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
                    <h5 class="w-100 modal-title text-center text-white font-weight-bold text-uppercase pt-4">{{ __('Iniciar sesión') }}</h5>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <input id="email" type="email" class="form-control mb-4 @error('email') is-invalid @enderror"
                            placeholder="Correo" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            placeholder="Contraseña" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </form>
                </div>
                <div class="modal-footer border-0">
                    <button type="submit" class="w-100 btn btn-primary text-uppercase">{{ __('Iniciar sesión') }}</button>
                </div>
                <div>
                    <a href="{{ route('password.request') }}"
                    class="size-24 w-100 btn-link text-white text-center d-block pt-3 pb-3">{{ __('Olvidé mi contraseña') }}</a>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection