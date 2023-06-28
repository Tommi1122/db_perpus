<h3> Tambah Buku </h3>

<form action="" method"post">
    <table>
    <tr>
        <td width="130">Nama Buku</td>
        <td><input type="text" name ="nama_buku"></td>
    </tr>
    <tr>
        <td> Kategori Buku</td>
        <td><input type="text" name ="kategori_buku"></td>
    </tr>
    <tr>
        <td> Penerbit Buku</td>
        <td><input type="text" name ="penerbit_buku"></td>
    </tr>
    <tr>
        <td> Tahun Buku</td>
        <td><input type="text" name ="tahun_buku"></td>
    </tr>
    <tr>
        <td> Jumlah Buku</td>
        <td><input type="text" name ="jumlah_buku"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="simpan" name="proses"></td>
</tr>
</table>
</form>
<?php
include "buku.blade.php";
if(isset($_POST['proses'])){
    mysqli_query($buku, "insert into buku set
    nama_buku='$_POST[nama_buku]',
    kategori_buku='$_POST[kategori_buku]',
    penerbit_buku='$_POST[penerbit_buku]',
    tahun_buku='$_POST[tahun_buku]',
    jumlah_buku='$_POST[jumlah_buku]'");

echo "Data buku baru telah tersimpan";
}


?>