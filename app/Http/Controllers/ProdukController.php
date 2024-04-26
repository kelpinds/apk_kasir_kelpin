<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function produk(){
        $k = new Produk;
      return  view('crud.produk.produk',['data'=>$k->all()]);
    }
    public function tambah(){
      return  view('crud.produk.tambah');
    }
    public function tambahproduk(Request $request){
        $k = new Produk;
        $k->create([
            'namaproduk'=>$request->input('namaproduk'),
            'harga'=>$request->input('harga'),
            'stok'=>$request->input('stok'),
            
        ]);
        return redirect('produk');
    }
    public function hapusproduk($id){
        $k= Produk::where('produkid',$id)->delete();
        return back();
    }
    public function edit($id){
        $k = Produk::select('*')->where('produkid',$id)->get();
        return  view('crud.produk.edit',['data'=>$k->all()]);
    }
    public function editproduk(Request $request ,$id){
        $k = Produk::where('produkid',$id)->update([
        'namaproduk'=>$request->namaproduk,
        'harga'=>$request->harga,
        'stok'=>$request->stok,
        ]);
        return redirect('produk');
}
        
}

