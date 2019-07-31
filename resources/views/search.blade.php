
@extends('plantilla')

  @section('principal')

<div class="detalleproducto">

      <div class="col-sm-6 col-md-8">
      <div class="thumbnail-producto">
          <h2> Productos </h2>
@foreach ($products as $product)

        <div class="caption">
        <p class="textoimg">Nombre: <br> {{$product->name}} </p>
        <br>
        <p class="textoimg">Precio: <br> {{$product->price}} </p>
        <br>
        <p class="textoimg">Descripcion: <br> {{$product->description}}</p>
        <br>
        <img class="imgreloj" src="/storage/products/{{$product->featured_img}}" alt="..." width="300" height="310">
        <br><br>

      @endforeach

        </div>
      </div>
{{--
      @foreach ($products as $product)
      <li> Nombre: {{$product->name}}  </li>
      <br>
      <li> Precio: {{$product->price}}  </li>
      @endforeach --}}

    </div>
  </div>


  @endsection

  @section('footer', '')
