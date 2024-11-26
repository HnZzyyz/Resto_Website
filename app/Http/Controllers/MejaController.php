<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use Illuminate\Http\Request;

class MejaController extends Controller
{
    public function index()
    {
        $p = new Meja();
        $data = $p->paginate(10);
        $idmj = $p->all()->last();
        if($idmj == null) {
            $ip = 1;
        } else {
            $nilai = $idmj->id_meja;
            $ip = intval($nilai)+1;
        }
        return view('Page.meja',[
            'data' => $data,
            'idmj' =>$ip,
        ]);
    }

    public function create(Request $request) {
        $request->validate([
            'id_meja' => 'required',
            'no_meja' => 'required',
        ]);

        $data = new Meja();
        if($data->create($request->all())){
           return redirect('meja')->with('message','Berhasil Menambahkan Data'); 
        } else {
            return back()->with('pesan','Gagal Menambahkan Data!!');
        }
     
    }

    public function edit($id) {
        $p = new Meja();
        $edit = $p->find($id);
        $data = $p->paginate(10);
        return view('Page.meja',[
            'data' => $data,
            'edit' => $edit,
        ]);
    }
    
    public function ubah(Request $request,$id) {
        $request->validate([
            'id_meja' => 'required',
            'no_meja' => 'required',
        ]);

        if (Meja::where('id_meja', $request->id_meja)->where('id_meja', '!=', $id)->exists()) {
            return redirect()->back()->with(['pesan' => 'ID Meja sudah ada.'])->withInput();
        }
        $data = new Meja();
        $meja = $data->find($id);
        $meja->id_meja = $request->id_meja;
        $meja->no_meja = $request->no_meja;
        $meja->save();
        
        return redirect('meja')->with('message','Berhasil Mengupdate Data');
    }
    
    public function delete($id)
    {
        $data = new Meja();
        $item = $data->find($id);
        if ($item) {
            $item->delete();
            return redirect('meja')->with('message', 'Menu berhasil dihapus.');
        }
        return redirect('meja')->with('pesan', 'Meja tidak ditemukan.');
    }
}
