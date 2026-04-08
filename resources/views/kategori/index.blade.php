@include('layout.header')
<h3>kategori</h3>
<a href="{{ route('kategori.create') }}" class="tombol">Tambah Kategori</a>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($allkategori as $key => $r)
            <tr>
                <td> {{ $key + 1 }} </td>
                <td> {{ $r->nama_kategori }} </td>
                <td>
                    <form action="{{ route('kategori.destroy', $r->id) }}" method="POST">
                        <a href="{{ route('kategori.show', $r->id) }}" class="tombol">detail</a>
                        <a href="{{ route('kategori.edit', $r->id) }}" class="tombol">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="tombol">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@include('layout.footer');