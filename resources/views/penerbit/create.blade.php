@include('layout.header')
<h3>Tambah penerbit</h3>
<form action="{{ route('penerbit.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama_penerbit">Nama Penerbit</label>
        <input type="text" name="nama_penerbit" id="" placeholder="Masukan Nama Penerbit" required>
    </div>
    <button type="submit" class="tombol">Tambah</button>
</form>

@include('layout.footer');