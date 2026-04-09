@include('layout.header')
<h3>Tambah buku</h3>
<form action="{{ route('buku.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="judul">Judul Buku</label>
        <input type="text" name="judul" id="" placeholder="Masukan Judul Buku" required>
    </div>
    <div class="form-group">
        <label for="pengarang">Pengarang</label>
        <input type="text" name="pengarang" id="" placeholder="Masukan Nama pengarang" required>
    </div>
    <div class="form-group">
        <label for="tahun_terbit">Tahun terbit</label>
        <input type="text" name="tahun_terbit" id="" placeholder="Masukan Tahun Terbit" required>
    </div>
    <div class="form-group">
        <label for="kategori_id">kategori</label>
        <select name="kategori_id" id="">
            <option value="">Pilih Kategori</option>
            @foreach ($kategori as $k)
                <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="penerbit_id">Penerbit</label>
        <select name="penerbit_id" id="">
            <option value="">Pilih Penerbit</option>
            @foreach ($penerbit as $p)
                <option value="{{ $p->id }}">{{ $p->nama_penerbit }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="file_cover">Cover Buku</label>
        <input type="file" name="file_cover" id="" class="form-control" required>
    </div>
    <button type="submit" class="tombol">Tambah</button>
</form>

@include('layout.footer');