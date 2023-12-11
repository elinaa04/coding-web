@extends('layouts.navbar')

@section('title')
    Profil
@stop

@section('css')

@stop

@section('content')
<div class="container-fluid my-8">
    <h1 class="h3 mb-h3">Profil</h1>
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 my-5">
            <h5 class="card-title mb-0" style="background-color: #79CD7B; padding: 10px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                Profil
            </h5>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-8" style="display: flex;">
                            <div class="profile-image-box">
                                @if($bks->image)
                                    <div class="profil-img"style="display: flex; width: 128px; height: 128px; margin-top: 40px; margin-right: 50px; border: 1px solid #000000; border-radius: 50%; overflow: hidden;">
                                        <img src="{{ asset('storage/'. $bks->image) }}" alt="Gambar Profil" class="img-fluid rounded-circle" style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                @else
                                <i class="fas fa-user-circle fa-8x profile-icon" style="line-height: 200px; margin-right: 45px; color: gray;"></i>
                                @endif
                            </div>
                            <div class="mb-3 col">
                                <form action="{{ route('edit', $bks->nip) }}" method="POST">
                                    <div class="mb-3 col">
                                        <div class="mb-3 row">
                                            <label for="nip" class="col-sm-4 col-form-label">NIP</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="nip" name="nip" class="form-control" value="{{ $bks->nip }}" readonly>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="namaLengkap" class="col-sm-4 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="namaLengkap" name="namaLengkap" class="form-control" value="{{ $bks->namaLengkap }}" readonly>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="tanggalLahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-8">
                                                <input type="date" id="tanggalLahir" name="tanggalLahir" class="form-control" value="{{ $bks->tanggalLahir }}" readonly>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="jenisKelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="jenisKelamin" name="jenisKelamin" class="form-control" value="{{ $bks->jenisKelamin }}" readonly>
                                            </div>
                                        </div>
                                        <div class="card-footer" style="background-color: #FFFFFF; padding: 10px;"> 
                                            <a href="{{ route('edit') }}" class="btn" style="background-color: #79CD7B; margin-left: 150px;">Edit Profil</a>
                                            <a href="{{ route('pass') }}" class="btn" style="color: #1E90FF; margin-left: 30px;">Update Password</a>
                                        </div>
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