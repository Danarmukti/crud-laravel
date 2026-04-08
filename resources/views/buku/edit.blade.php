@include('layout.header')
<h3>Edit buku</h3>
<form action="{{ route('buku.update', $buku->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="judul">Judul Buku</label>
        <input type="text" name="judul" id="" value="{{ $buku->judul }}" required>
    </div>
    <div class="form-group">
        <label for="pengarang">Pengarang</label>
        <input type="text" name="pengarang" id="" value="{{ $buku->pengarang }}" required>
    </div>
    <div class="form-group">
        <label for="tahun_terbit">Tahun terbit</label>
        <input type="text" name="tahun_terbit" id="" value="{{ $buku->tahun_terbit }}" required>
    </div>
    <div class="form-group">
        <label for="kategori_id">kategori</label>
        <select name="kategori_id" id="">
            <option value="">Pilih Kategori</option>
            @foreach ($kategori as $k)
                <option value="{{ $k->id }}" {{ ($k->id == $buku->kategori_id) ? "selected" : "" }}>{{ $k->nama_kategori }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="penerbit_id">Penerbit</label>
        <select name="penerbit_id" id="">
            <option value="">Pilih Penerbit</option>
            @foreach ($penerbit as $p)
                <option value="{{ $p->id }}" {{ ($p->id == $buku->penerbit_id) ? "selected" : "" }}>{{ $p->nama_penerbit }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="tombol">Update</button>
</form>

@include('layout.footer');