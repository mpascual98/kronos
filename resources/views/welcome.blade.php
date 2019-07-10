
@extends('plantilla')

        @section('principal')

            <div class="container">


            <section class="banner">
              <img class="fotobanner" src="IMG0/slides/banner-04.jpg" width="1130"  height="416" alt="">
            </section>
            <section class="pills-container home-categories horizontal-container pills-container container-fluid">
              <div class="catprincipales">
                <h4 class="categoriastexto">Categorías principales</h4>
                <ul class="list-inline p-none m-none text-center text-left-xs">
                @foreach ($categories as $categorie)
                <li data-item="1" class="pill  m-left-half  ">
                <button type="button" class="btn btn-warning">
                  <a href="/categories/{{$categorie->id}}">{{$categorie->name}}</a>
                </button>
                </li>
                @endforeach
                </ul>
              </div>

            </section>

                <div class="row">
              @foreach ($categories as $categorie)
                <div class="col-sm-6 col-md-4">
                  <div class="thumbnail">
                    <img class="imgreloj" src="IMG0/newatch.jpg" alt="..." >
                    <div class="caption">
                    <h3 class="textofoto"> <a style="color:white" href="/categories/{{$categorie->id}}">{{$categorie->name}}</a></h3>
                    {{-- <button type="button" class="btn" id="diseños"> <a href="/">ver diseños</a> </button> --}}
                    </div>
                  </div>
                </div>
              @endforeach

              <div class="separator">
                <hr>
                <h3 class="destacados">DESTACADOS </h3>
                <hr>
              </div>

                @foreach ($products as $product)
                  <div class="col-sm-6 col-md-4">
                  <div class="thumbnail">
                    <img class="imgreloj" src="storage/products/{{$product->featured_img}}" alt="...">
                    <div class="caption">
                    <p class="textoimg">{{$product->name}} <br> {{$product->price}} <br> HASTA 12 CUOTAS </p>
                    <button type="button" class="btn" id="diseños"> <a href="/product/{{$product->id}}">Ver Mas</a> </button>
                    </div>
                  </div>
                </div>
                @endforeach

            </div>
            <div class="ultimoboton1">
              <button type="button" class="btn" id="ultimoboton">
              <a href="#">Ver todos los productos</a>
              </button>
            </div>
            </div>
        </div>

@endsection
