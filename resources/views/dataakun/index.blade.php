@extends('layout.layouts')

@section('content')
<div class="container">
    <h1>Data Akun</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('akun.create') }}" class="btn btn-primary mb-3">Tambah Akun</a>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($akun as $item)
            <tr>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->username }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <a href="{{ route('akun.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('akun.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
