<?php

public function tambah_buku(Request $request)
    {
      DB::table('buku')->insert([
        'nama_buku' => $request->nama,
        'kategori_buku' => $request->kategori,
        'penerbit_buku' => $request->penerbit,
        'tahun_buku' => $request->tahun,
        'jumlah_buku' => $request->jumlah
      ]);
      return redirect('/buku');
    }
?>