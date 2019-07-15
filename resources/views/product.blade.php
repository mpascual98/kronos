@extends('plantilla')

  @section('principal')

<div class="detalleproducto">

      <div class="col-sm-6 col-md-8">
      <div class="thumbnail-producto">
          <h2>Detalle Producto {{$product->name}}</h2>
        <img class="imgreloj" src="/storage/products/{{$product->featured_img}}" alt="...">
        <br><br>
        <div class="caption">
        <p class="textoimg">Nombre: <br> {{$product->name}} </p>
        <br>
        <p class="textoimg">Precio: <br> {{$product->price}} </p>
        <br>
        <p class="textoimg">Descripcion: <br> {{$product->description}}</p>
        <br>
        <p class="textoimg">Categoria: <br> {{$product->categories[0]->name}}</p>
        <a href="/product/addtocart/{{$product->id}}"  id="navtext"> <i class="fas fa-shopping-cart"></i> Agregar al Carrito </a>
        <br> <br>

        </div>
      </div>

    </div>
  </div>


  @endsection

  @section('footer', '')
