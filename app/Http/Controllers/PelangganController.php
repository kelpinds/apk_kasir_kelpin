<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function pelanggan(){
        $k = new Pelanggan;
      return  view('crud.pelanggan.pelanggan',['data'=>$k->all()]);
    }
    public function tambah(){
      return  view('crud.pelanggan.tambah');
    }
    public function tambahpelanggan(Request $request){
        $k = new Pelanggan;
        $k->create([
            'namapelanggan'=>$request->input('namapelanggan'),
            'alamat'=>$request->input('alamat'),
            'nomortelpon'=>$request->input('nomortelpon'),
            
        ]);
        return redirect('pelanggan');
    }
    public function hapuspelanggan($id){
        $k= Pelanggan::where('pelangganid',$id)->delete();
        return back();
    }
    public function edit($id){
        $k = Pelanggan::select('*')->where('pelangganid',$id)->get();
        return  view('crud.pelanggan.edit',['data'=>$k->all()]);
    }
    public function editpelanggan(Request $request ,$id){
        $k = Pelanggan::where('pelangganid',$id)->update([
        'namapelanggan'=>$request->namapelanggan,
        'alamat'=>$request->alamat,
        'nomortelpon'=>$request->nomortelpon,
        ]);
        return redirect('pelanggan');
}
}
