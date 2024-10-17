@extends('layout.layouts')
@section('content')
    <div class="container">
        <h1 class="my-4">Update Data Siswa</h1>

        <!-- Form untuk menambahkan data siswa -->
        <form action="{{ route('siswa.update', $datasiswa['id']) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="nama">Nama Siswa</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Siswa" required value="{{ $datasiswa['nama'] }}" >
            </div>

            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukkan NIS" required value="{{ $datasiswa['nis'] }}">
            </div>

            <div class="form-group">
                <label for="kelas">Kelas</label>
                <select class="form-control" id="kelas" name="kelas" required>
                    <option value="">Pilih Kelas</option>
                    <option value="X" {{ $datasiswa['kelas'] == 'X' ? 'selected' : '' }}>X</option>
                    <option value="XI" {{ $datasiswa['kelas'] == 'XI' ? 'selected' : '' }}>XI</option>
                    <option value="XII" {{ $datasiswa['kelas'] == 'XII' ? 'selected' : ''  }}>XII</option>
                </select>
            </div>

            <div class="form-group">
                <label for="hobi">Hobi</label>
                <input type="text" class="form-control" id="hobi" name="hobi" placeholder="Masukkan Hobi Siswa" required value="{{ $datasiswa['hobi'] }}">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
