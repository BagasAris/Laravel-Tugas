<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class MasterController extends Controller
{

    public function content(){
        $buku = Buku::all();
        return view('content',compact(['buku']));
        //dd($buku);
    }

    public function master(){
        return view('template.master');
    }

    public function anggota(){
        return view('anggota');
    }

    public function buku(){
        return view('buku');
    }

    public function petugas(){
        return view('petugas');
    }
}
