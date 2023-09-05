<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function content(){
        $nggota = AnggotaController::all();
        return view('content', compact(['anggota']));
        //dd($buku);
    }

    public function storea(Request $nggota){
        //dd($tb_buku->except(['_token','submit']));
        Anggota::create($nggota->except(['_token','submit']));
    }

    public function anggota(){
        return view('anggota');
    }
}
