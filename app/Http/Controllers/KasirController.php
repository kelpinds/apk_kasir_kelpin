<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function regis(){
        return  view('registrasi');
      }
      public function registrasi(Request $request){
          $k = new Kasir;
          $k->create([
              'nama'=>$request->input('nama'),
              'username'=>$request->input('username'),
              'password'=>$request->input('password'),
              'akses'=>$request->input('akses')

          ]);
          return redirect('registrasi');
      }
    public function login(){
        $k = new Kasir;
      return  view('login');
    }
     public function ceklogin(Request $request){
        $s = new Kasir;
        if($s->where('username',$request->input('username'))->where('password',$request->input('password'))->exists()){
                    session(['username'=>$request->input('username')]);
                   return redirect('dashboard');
                 
        
             }
                 return back()->with('pesan','Username dan password tidak terdaftar');
         }
        
    public function logout(){
        session()->flush();
        return  redirect('login');
    }

    public function layout(){
      return  view('layout');
    }
    public function dass(){
      return  view('dashboard');
    }
    public function kasir(){
        $k = new Kasir;
      return  view('crud.kasir.kasir',['data'=>$k->all()]);
    }
    public function tambah(){
      return  view('crud.kasir.tambahkasir');
    }
    public function tambahkasir(Request $request){
        $k = new Kasir;
        $k->create([
            'nama'=>$request->input('nama'),
            'username'=>$request->input('username'),
            'password'=>$request->input('password'),
            'akses'=>$request->input('akses')

        ]);
        return redirect('kasir');
    }
    public function hapuskasir($id){
        $k= Kasir::where('kasirid',$id)->delete();
        return back();
    }
    public function edit($id){
        $k = Kasir::select('*')->where('kasirid',$id)->get();
        return  view('crud.kasir.editkasir',['data'=>$k->all()]);
    }
    public function editkasir(Request $request ,$id){
        $k = Kasir::where('kasirid',$id)->update([
        'nama'=>$request->nama,
        'username'=>$request->username,
        'password'=>$request->password,
        'akses'=>$request->akses
        ]);
        return redirect('kasir');
}

}
