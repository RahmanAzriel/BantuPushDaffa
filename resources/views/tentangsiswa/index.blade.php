@extends('layout.layouts')

@section('title', 'Daftar Siswa')

@section('content')
    <div class="container">
        <h1 class="my-4">Daftar Siswa</h1>

        <!-- Tombol untuk menambah siswa -->
        <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">Tambah Siswa</a>

        <!-- Cek apakah ada data siswa -->
        @if($datasiswa->isEmpty())
            <div class="alert alert-warning" role="alert">
                Data siswa kosong. Silakan tambahkan data siswa.
            </div>
        @else
            <!-- Tabel Data Siswa -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIS</th>
                        <th>Kelas</th>
                        <th>Hobi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datasiswa as $index => $data)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->nis }}</td>
                            <td>{{ $data->kelas }}</td>
                            <td>{{ $data->hobi }}</td>
                            <td>
                                <!-- Tombol Edit -->
                                <a href="{{ route('siswa.edit', $data['id']) }}" class="btn btn-warning btn-sm">Edit</a>

                                <!-- Tombol Delete -->
                                <form action="{{ route('siswa.destroy', $data['id']) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" >Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
