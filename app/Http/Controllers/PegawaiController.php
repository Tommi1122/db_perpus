<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller

{
    public function index()
    {

        $pegawai = DB::table('pegawai')->simplePaginate(5);
        return view('blog/pegawai', ['pegawai' => $pegawai]);
    }
}