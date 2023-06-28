<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller

{
    public function index()
    {
        $buku = DB::table('tb_buku')->simplePaginate(5);
        return view('blog/buku', ['buku' => $buku]);
    }
}
?>