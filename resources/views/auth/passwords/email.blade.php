@extends('layouts.welcome')

@section('content')

<div style="background-color: black">
    <div class="modal-bg-dark"></div>
    <div class="row justify-content-center">
        <!-- Modal -->
        <div class="modal show d-block" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-dark pb-4">
                <div class="modal-header border-0">
                    <h5 class="w-100 modal-title text-center text-white font-weight-bold text-uppercase pt-4">{{ __('Olvidé mi contraseña') }}</h5>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="Correo" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                    </form>
                </div>
                <div class="modal-footer border-0">
                    <button type="submit" class="w-100 btn btn-primary text-uppercase">{{ __('Envíar link') }}</button>
                </div>
                <div>
                    <a href="{{ route('home') }}"
                    class="size-24 w-100 btn-link text-white text-center d-block pt-3 pb-3">{{ __('Iniciar sesión') }}</a>
                </div>
            </div>
        </div>
    </div>    
</div>


<div class="container" style="display: none">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
