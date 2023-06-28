

<form action="/buku/tambah" method="post">
        {{ csrf_field() }}
        <div class="form-group mt-3">
            <label for="nama">Nama Buku</label>
           	<input type="text" class="form-control" name="nama buku" id="nama buku" placeholder="Nama Buku">
        </div>
        <div class="form-group mt-3">
            <label for="kategori buku">Kategori Buku</label>
            <select class="form-control" name="kategori buku" id="kategori buku">
                <option value="Teknologi">Teknologi</option>
          <option value="Management">Management</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="penerbit">Penerbit Buku</label>
            <select class="form-control" name="penerbit buku" id="penerbit buku">
                <option value="Graha Ilmu">Graha Ilmu</option>
                <option value="Gramedia">Gramedia</option>
                <option value="Karmelindo">Karmelindo</option>
            </select>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="tahun">Tahun Buku</label>
                <input type="number" name="tahun buku" class="form-control">
            </div>
            <div class="col">
                <label for="jumlah Buku">Jumlah Stok Buku</label>
                <input type="number" name="jumlah Buku" class="form-control">
            </div>
        </div>
        <div class="form-group mt-3">
            <input class="btn btn-primary" type="submit" value="Simpan Data">
        </div>
    </form>
