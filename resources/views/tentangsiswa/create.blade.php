@extends('layout.layouts')
@section('content')
    <div class="container">
        <h1 class="my-4">Tambah Data Siswa</h1>

        <!-- Form untuk menambahkan data siswa -->
        <form action="{{ route('siswa.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Siswa</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Siswa" required>
            </div>

            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukkan NIS" required>
            </div>

            <div class="form-group">
                <label for="kelas">Kelas</label>
                <select class="form-control" id="kelas" name="kelas" required>
                    <option value="">Pilih Kelas</option>
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                </select>
            </div>

            <div class="form-group">
                <label for="hobi">Hobi</label>
                <input type="text" class="form-control" id="hobi" name="hobi" placeholder="Masukkan Hobi Siswa" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
