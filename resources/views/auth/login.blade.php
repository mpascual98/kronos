@extends('plantilla_login')

<style>
body{
  color: yellow;
  background-image: url(IMG0/imgfondo.jpg);
}

input, select, textarea{
    color: yellow;
}
* {

font-family: sans-serif;
box-sizing: border-box;
}


.container{
display: flex;
justify-content: center;
align-items: center;
}

form {
margin: auto;
width: 50%;
max-width: 400px;
background-color: white;
padding: 20px;
border: 1px solid;
text-align: center;
background-color: black;
color: yellow;

}
form.caja{
margin-top: 200px;
}

.login {
text-align: center;
margin-bottom: 10px;
}

.pass {
text-align: center;
}

h2 {
text-align: center;
margin-bottom: 20px
color: rgba(0, 0, 0, 0.5);
}

.dato1{
border: 1px solid yellow;
background-color: inherit;
display: block;
width: 100%;
padding: 10px;
font-size: 15px;
}
.recordar{
margin-top: 10px;
display: flex;
flex-wrap: wrap;
text-align: center;
justify-content: center;
}
input[type="submit"] {

background:rgb(255,250,205);
border: 0;
color: black;
cursor: pointer;
border-radius: 20px;
}

button[type="button"] {

border: 0;
color: red;
cursor: pointer;
border-radius: 20px;
}

a:-webkit-any-link {
    color: yellow;
    cursor: pointer;
    text-decoration: none;
}


</style>


@section('prueba')

<div class="container">

                    <form method="POST" action="{{ route('login') }}" class="caja">
                        @csrf
                        <div class="formulario">
      <h2>{{ __('Iniciar sesion') }}</h2>

                            {{-- <label for="email">{{ __('E-Mail Address') }}</label> --}}


                                <input id="email" type="email" class="dato1 @error('email') is-invalid @enderror" name="email" placeholder="Ingrese Email" value="{{ old('email') }}" required autocomplete="email" autofocus >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


<br>

                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}


                                <input id="password" type="password" placeholder="Contraseña" class="dato1 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
