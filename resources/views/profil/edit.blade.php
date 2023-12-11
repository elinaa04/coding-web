@extends('layouts.navbar')

@section('title')
    Edit Profil
@stop

@section('css')

@stop

@section('content')
<div class="container-fluid my-8">
    <h1 class="h3 mb-h3">Update Profil</h1>
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 my-5">
            <h5 class="card-title mb-0" style="background-color: #79CD7B; padding: 10px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                Edit Profil
            </h5>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Maaf!</strong> Terdapat kesalahan dengan inputan Anda.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="col-md-12 mb-8 d-flex justify-content-center">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="profile-image-box">
                                        @if($bks->image)
                                            <div class="profil-img" style="display: flex; width: 128px; height: 128px; margin-top: 40px; margin-right: 50px; border: 1px solid #000000; border-radius: 50%; overflow: hidden;">
                                                <img src="{{ asset('storage/'. $bks->image) }}" alt="Gambar Profil" class="img-fluid rounded-circle" style="width: 100%; height: 100%; object-fit: cover;">
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="delete"style="display: flex; margin-left: 5px;">
                                                    <form id="formDeleteImage" action="{{ route('deleteImage') }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div style="display: flex; align-items: center; justify-content: center;">
                                                            <i class="fas fa-trash-alt" style="color: gray;"></i>
                                                            <button type="submit" class="btn" style="color: gray; white-space: nowrap;">
                                                                Hapus Gambar
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        @else
                                        <i class="fas fa-user-circle fa-8x profile-icon" style="line-height: 200px; margin-right: 50px; color: gray;"></i>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <form action="{{ route('edit', $bks->nip) }}" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3 row">
                                        <label for="nip" class="col-sm-4 col-form-label">NIP</label>
                                        <div class="col-sm-8">
                                            <input type="text" id="nip" name="nip" class="form-control" value="{{ $bks->nip }}" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="namaLengkap" class="col-sm-4 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-8">
                                            <input type="text" id="namaLengkap" name="namaLengkap" class="form-control" value="{{ $bks->namaLengkap }}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="tanggalLahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-8">
                                            <input type="date" id="tanggalLahir" name="tanggalLahir" class="form-control" value="{{ $bks->tanggalLahir }}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="jenisKelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-8">
                                            <select id="jenisKelamin" name="jenisKelamin" class="form-control" required>
                                                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                                <option value="Laki-Laki" @if($bks->jenisKelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
                                                <option value="Perempuan" @if($bks->jenisKelamin == 'Perempuan') selected @endif>Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="image" class="col-sm-4 col-form-label">Photo Profile</label>
                                        <div class="col-sm-8">
                                            <input class="form-control @error('image') is invalid @enderror" type="file" id="image" name="image">
                                        </div>
                                    </div>
                                    <div class="card-footer text-center" style="background-color: #FFFFFF; padding: 10px;"> 
                                        <form id="formSimpan" method="post" action="{{ route('edit') }}">
                                            @csrf
                                            @method('put')
                                            <button type="submit" class="btn" style="background-color: #79CD7B;">Simpan</button>
                                        </form>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection