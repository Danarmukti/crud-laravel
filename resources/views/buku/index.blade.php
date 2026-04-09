@include('layout.header')
<h3>buku</h3>
<a href="{{ route('buku.create') }}" class="tombol">Tambah Buku</a>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun terbit</th>
            <th>Kategori</th>
            <th>Penerbit</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($allbuku as $key => $r)
            <tr>
                <td> {{ $key + 1 }} </td>
                <td> {{ $r->judul }} </td>
                <td> {{ $r->pengarang }} </td>
                <td> {{ $r->tahun_terbit }} </td>
                <td> {{ $r->Kategori->nama_kategori }} </td>
                <td> {{ $r->Penerbit->nama_penerbit }} </td>
                <td width="170px">
                    <form action="{{ route('buku.destroy', $r->id) }}" method="POST">
                        <a href="{{ route('buku.show', $r->id) }}" class="tombol">detail</a>
                        <a href="{{ route('buku.edit', $r->id) }}" class="tombol">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="tombol">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div>
    {{ $allbuku->links('vendor.pagination.buatanku') }}
</div>
@include('layout.footer');