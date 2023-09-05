<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;

class PetugasController extends Controller
{
    public function content(){
        $petugas = PetugasController::all();
        return view('content',compact(['petugas']));
        //dd($buku);
    }

    public function storep(Request $petugas){
        //dd($tb_buku->except(['_token','submit']));
        Petugas::create($petugas->except(['_token','submit']));
    }

    public function petugas(){
        return view('petugas');
    }
}
