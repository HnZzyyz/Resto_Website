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
    
}
