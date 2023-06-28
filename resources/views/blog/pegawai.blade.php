@section ('konten')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="nav-link" href="#">Halaman Data Pegawai</a>
        <a class="nav-link" href="#">Home</a>
        <a class="nav-link" href="#">Data Buku</a>
        <a class="nav-link" href="#">Data Pegawai</a>
        <a class="nav-link" href="#">Tentang Kami</a>
        
      
  </div>
</nav>

<h2>DATA PEGAWAI</h2>

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
            <th>id</th>
            <th>nama pegawai</th>
            <th>telfon pegawai</th>
            <th>alamat pegawai</th>
            <th>posisi pegawai</th>
            <th> action</th>
        </tr>
    </thead>
    <tbody>


        @foreach($pegawai as $pegawai)
        <tr>
            <td>{{ $pegawai->id }}</td>
            <td>{{ $pegawai->nama_pegawai}}</td>
            <td>{{ $pegawai->telfon_pegawai }}</td>
            <td>{{ $pegawai->alamat_pegawai }}</td>
            <td>{{ $pegawai->posisi_pegawai }}</td>
            <td> <input class="btn btn-primary" type="button" value="Edit">
            <button type="button" class="btn btn-danger">Delete <type="button"value="Delete">
        </tr>
         @endforeach
    </tbody>
    </table>
    <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
   
</body>
</html>

