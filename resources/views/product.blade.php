@extends('plantilla')

  @section('principal')

<div class="detalleproducto">

      <div class="col-sm-6 col-md-8">
      <div class="thumbnail-producto">
          <h2>Detalle Producto {{$product->id}}</h2>
        <img class="imgreloj" src="/storage/products/{{$product->featured_img}}" alt="...">
        <br><br>
        <div class="caption">
        <p class="textoimg">Nombre: <br> {{$product->name}} </p>
        <br>
        <p class="textoimg">Precio: <br> {{$product->price}} </p>
        <br>
        <p class="textoimg">Descripcion: <br> {{$product->description}}</p>
        <br>
        <p class="textoimg">Categoria: <br> {{$product->categories->first()->name}}</p>
        </div>
      </div>


    </div>
  </div>



  @endsection

  @section('footer', '')
