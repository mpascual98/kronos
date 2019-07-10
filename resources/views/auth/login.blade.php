@extends('plantilla')


@section('principal')



<div class="container-login">

                    <form method="POST" action="{{ route('login') }}" class="caja">
                        @csrf
                        <div class="formulario">
      <h2>{{ __('Iniciar sesion') }}</h2>

                            {{-- <label for="email">{{ __('E-Mail Address') }}</label> --}}


                                <input id="email" type="email" class="dato1 @error('email') is-invalid @enderror" name="email" placeholder="Ingrese Email" value="{{ old('email') }}"  autocomplete="email" autofocus >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


<br>

                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}


                                <input id="password" type="password" placeholder="Contraseña" class="dato1 @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


<br>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="" for="remember">
                                        {{ __('Recordarme') }}
                                    </label>



<br>
<br>
                                <input type="submit" class="dato1" value="Ingresar">
                                    {{-- {{ __('Log In') }} --}}
                                </input>
<br>

                                @if (Route::has('password.request'))
                                    <a class="" href="{{ route('password.request') }}">
                                        {{ __('Recordar contraseña') }}
                                    </a>
                                @endif

                        </div>
</div>
@endsection
@section('footer', '')
