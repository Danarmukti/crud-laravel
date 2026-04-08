@include('layout.header')
<h3>Tambah kategori</h3>
<form action="{{ route('kategori.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama_kategori">Nama Kategori</label>
        <input type="text" name="nama_kategori" id="" placeholder="Masukan Nama Kategori" required>
    </div>
    <button type="submit" class="tombol">Tambah</button>
</form>

@include('layout.footer');