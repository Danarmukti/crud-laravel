@include('layout.header')
<h3>penerbit</h3>
<a href="{{ route('penerbit.create') }}" class="tombol">Tambah Penerbit</a>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Penerbit</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($allpenerbit as $key => $r)
            <tr>
                <td> {{ $key + 1 }} </td>
                <td> {{ $r->nama_penerbit }} </td>
                <td>
                    <form action="{{ route('penerbit.destroy', $r->id) }}" method="POST">
                        <a href="{{ route('penerbit.show', $r->id) }}" class="tombol">detail</a>
                        <a href="{{ route('penerbit.edit', $r->id) }}" class="tombol">Edit</a>
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