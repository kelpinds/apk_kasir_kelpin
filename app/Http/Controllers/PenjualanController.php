<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function transaksi(){
        return view('transaksi.form');
    }
}
