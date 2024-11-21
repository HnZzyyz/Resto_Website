<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $p = new Menu();
        $data = $p->paginate(10);
        $idmnu = $p->all()->last();
        if($idmnu == null) {
            $ip = 1;
        } else {
            $nilai = $idmnu->id_menu;
            $ip = intval($nilai)+1;
        }
        return view('Page.menu',[
            'data' => $data,
            'idmnu' =>$ip,
        ]);
    }

    public function create(Request $request) {
        $request->validate([
            'id_menu' => 'required',
            'nama_menu' => 'required',
            'harga' => 'required',
        ]);

        $data = new Menu();
        if($data->create($request->all())){
           return redirect('menu')->with('message','Berhasil Menambahkan Data'); 
        } else {
            return back()->with('pesan','Gagal Menambahkan Data!!');
        }
     
    }

    public function edit($id) {
        $p = new Menu();
        $edit = $p->find($id);
        $data = $p->paginate(10);
        return view('Page.menu',[
            'data' => $data,
            'edit' => $edit,
        ]);
    }
    
    public function ubah(Request $request,$id) {
        $request->validate([
            'id_menu' => 'required',
            'nama_menu' => 'required',
            'harga' => 'required',
        ]);

        if (Menu::where('id_menu', $request->id_menu)->where('id_menu', '!=', $id)->exists()) {
            return redirect()->back()->with(['pesan' => 'ID barang sudah ada.'])->withInput();
        }
        $data = new Menu();
        $menu = $data->find($id);
        $menu->id_menu = $request->id_menu;
        $menu->nama_menu = $request->nama_menu;
        $menu->harga = $request->harga;
        $menu->save();
        
        return redirect('menu')->with('message','Berhasil Mengupdate Data');
    }
    
    public function delete($id)
    {
        $data = new Menu();
        $item = $data->find($id);
        if ($item) {
            $item->delete();
            return redirect('menu')->with('message', 'Menu berhasil dihapus.');
        }
        return redirect('menu')->with('pesan', 'Menu tidak ditemukan.');
    }
}
