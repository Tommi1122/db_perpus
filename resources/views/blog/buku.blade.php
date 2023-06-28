@section ('konten')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="nav-link" href="halaman tambah data">Halaman Tambah Data</a>
        <a class="nav-link" href="#">Halaman Data Buku</a>
        <a class="nav-link" href="#">Home</a>
        <a class="nav-link" href="#">Data Buku</a>
        <a class="nav-link" href="#">Data Pegawai</a>
        <a class="nav-link" href="#">Tentang Kami</a>
        
      
  </div>
</nav>

<h2>DATA BUKU</h2>
<p>List buku yang tersedia di perpustakaan</p>
<table>
<style>
    table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>

<table>
    <thead>
        <tr>
            <th>Nama Buku</th>
            <th>Kategori Buku</th>
            <th>Penerbit Buku</th>
            <th>Tahun Buku</th>
            <th>Jumlah Buku</th>
            <th> action</th>

        </tr>
    </thead>
    <tbody>
        @foreach($buku as $buku)
        <tr>
            <td>{{ $buku->nama_buku }}</td>
            <td>{{ $buku->kategori_buku }}</td>
            <td>{{ $buku->penerbit_buku }}</td>
            <td>{{ $buku->tahun_buku }}</td>
            <td>{{ $buku->jumlah_buku }}</td>
            <td> <input class="btn btn-primary" type="button" value="Edit">
            <button type="button" class="btn btn-danger">Delete <type="button"value="Delete">
        </tr>
        @endforeach
    </tbody>

</body>
</html>
