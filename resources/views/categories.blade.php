@extends('plantilla')

  @section('principal')
    <div class="separator">
      <hr>
      <h3 class="destacados">{{$categories->name}}</h3>
    </div>
    <hr>
    <div class="container">
        @foreach ($categories->products as $product)
            <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img class="imgreloj" src="/storage/products/{{$product->featured_img}}" alt="...">
              <div class="caption">
              <p class="textoimg">{{$product->name}} <br> {{$product->price}} <br> HASTA 12 CUOTAS </p>
              <button type="button" class="btn" id="diseños"> <a href="/product/{{$product->id}}">Ver Mas</a> </button>
              </div>
            </div>
          </div>
        @endforeach
    </div>



  @endsection
