@extends('plantilla')

  @section('principal')

    <h2 class="detalleproducto">Bienvenido a tu carrito</h2>

    @forelse ($cart as $item)

      <div class="detalleproducto">
            <div class="col-sm-6 col-md-8">
            <div class="thumbnail-producto">
              <img class="imgreloj" src="/storage/products/{{$item->featured_img}}" alt="...">
              <br><br>
              <div class="caption">
              <p class="textoimg">Nombre: <br> {{$item->name}} </p>
              <br>
              <p class="textoimg">Precio: <br> {{$item->price}} </p>
              <br>
              <p class="textoimg">Descripcion: <br> {{$item->description}}</p>
              <br> <br>
              </div>
            </div>

          </div>
        </div>

    @empty
      <p class="detalleproducto"> No hay productos en tu carrito</p>
    @endforelse


  @endsection

  @section('footer', '')
