@extends('layouts.main')

@section('content')
<div class="container-fluid my-5" style="background-color: #F4F1F1;">
    <div class="row justify-content-center">
        <div class="col-10 col-md-6 col-lg-5 my-5">
            <h1 class="mb-4 text-center" style="font-family: 'Modak', cursive; font-size: 60px">IslamiQ</h1>
            <div class="card">
                <div class="card-body">
                    @if (session()->has('error'))
                        <p class="text-danger">{{ session('error') }}</p>
                    @endif

                    <form action="" method="POST">
                    @csrf
                        <div class="mb-3">
                            <label for="nip" class="col-md-4 col-form-label text-md-right">{{ __('NIP') }}</label>

                            <div class="col-md-12">
                                <input id="nip" type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip') }}" required autocomplete="nip" autofocus>

                                @error('nip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : ''}}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-success">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection