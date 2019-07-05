
@extends('plantilla')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
            <meta charset="utf-8">

            @section('principal')

<style>

.dropdown-item a{
  color:yellow;
}
 .banner{
  overflow: hidden;
  position: relative;
}
 .fotobanner{
  max-width: 100%;
  border: 3px solid black;
  margin-bottom: 10px;
}
 .footerul{
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0;
  padding: 0;
  overflow: hidden;
  text-align: center;
}
 .footerli{
  font-size: 50px;
  color: white;
  list-style-type: none;
  padding: 10px;
  text-align: center;
  float: right;
  list-style-type: none;
}

 .title-container{
  display: flex;
  text-align: center;
  justify-content: center;
}
 h4.categoriastexto{
  color: yellow;
  text-align: center;
  text-transform: uppercase;
  padding-bottom: 10px;
}
 .catprincipales{
  background-color: rgba(0, 0, 0, 0.6);
  padding-top: 20px;
  padding-bottom: 20px;
}
.thumbnail{
  overflow: hidden;
  border: 3px solid yellow;
  position: relative;
  background-color: black;
}
 h3.textofoto{
  position: absolute;
  z-index: 900;
  text-align: center;
  right: 0px;
  left: 0px;
  top: 210px;
  background-color: rgba(0, 0, 0, 0.6);
  color: white;
  font-style: oblique;
}
 a{
  text-transform: uppercase;
  color: black;
}
 #diseños{
  background-color: yellow;
}
 .separator{
  padding: 0px;
  position: relative;
}
 hr{
  z-index: 100;
  color: white;
  width: 100%;
}
 .destacados{
  color: yellow;
  z-index: 900;
  text-align: center;
  /* position: absolute;
  transform: translate(-50%, -50%);
  top: 50%;
  left: 50%; */
}

 p.textoimg {
  color: white;
}

/* Ver más productos */

.ultimoboton1{
  display: flex;
  align-items: center;
  justify-content: center;
}
#ultimoboton{
  background-color: yellow;
  align-items: center;
  margin:20px;
}


 h3.usuariosregistrados{
  color: white;
}
</style>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


            <div class="container">

            <section class="banner">
              <img class="fotobanner" src="IMG0/slides/banner-04.jpg" width="1130"  height="416" alt="">
            </section>
            <section class="pills-container home-categories horizontal-container pills-container container-fluid">
              <div class="catprincipales">
                <h4 class="categoriastexto">Categorías principales</h4>
                <ul class="list-inline p-none m-none text-center text-left-xs">
                    <li data-item="1" class="pill  m-left-half  ">
                      <button type="button" class="btn btn-warning"> <a href="#">RELOJES</a> </button>
                    </li>
                    <li data-item="2" class="pill">
                      <button type="button" class="btn btn-warning"> <a href="#">BILLETERAS</a> </button>
                    </li>
                    <li data-item="3" class="pill   p-right-half ">
                      <button type="button" class="btn btn-warning"> <a href="#">COMBOS !</a> </button>
                    </li>
                </ul>
              </div>

            </section>

                <div class="row">
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img class="imgreloj" src="IMG0/newatch.jpg" alt="..." >
                  <div class="caption">
                  <h3 class="textofoto">RELOJES</h3>
                  <button type="button" class="btn" id="diseños"> <a href="#">ver diseños</a> </button>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img class="imgreloj" src="IMG0/newbilletera1.jpg" alt="..." >
                  <div class="caption">
                  <h3 class="textofoto">BILLETERAS</h3>
                  <button type="button" class="btn" id="diseños"> <a href="#">ver diseños</a> </button>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img class="imgreloj" src="IMG0/ecobilletera.jpg" alt="..." >
                  <div class="caption">
                  <h3 class="textofoto">ECO-BILLETERAS</h3>
                  <button type="button" class="btn" id="diseños"> <a href="#">ver diseños</a> </button>
                  </div>
                </div>
              </div>
              <div class="separator">
                <hr>
                <h3 class="destacados">DESTACADOS </h3>
                <hr>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img class="imgreloj" src="IMG0/relojes/reloj-01.png" alt="...">
                  <div class="caption">
                    <p class="textoimg">RELOJ - ART NOT WAR <br> $1300,00 <br> HASTA 12 CUOTAS </p>
                    <button type="button" class="btn" id="diseños"> <a href="#">Comprar</a> </button>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img class="imgreloj" src="IMG0/billeteras/billetera01/001-001.jpg" alt="...">
                  <div class="caption">
                    <p class="textoimg">BILLETERA - WANDERLUST <br> $400,00 <br> HASTA 12 CUOTAS </p>
                    <button type="button" class="btn" id="diseños"> <a href="#">Comprar</a> </button>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img class="imgreloj" src="IMG0/relojes/reloj-03.png" alt="...">
                  <div class="caption">
                    <p class="textoimg">RELOJ - TERRA <br> $1300,00 <br> HASTA 12 CUOTAS </p>
                    <button type="button" class="btn" id="diseños"> <a href="#">Comprar</a> </button>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img class="imgreloj" src="IMG0/billeteras/billetera02/002-001.jpg" alt="...">
                  <div class="caption">
                    <p class="textoimg">BILLETERA - ART NOT WAR <br> $300,00 <br> HASTA 12 CUOTAS </p>
                    <button type="button" class="btn" id="diseños"> <a href="#">Comprar</a> </button>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img class="imgreloj" src="IMG0/relojes/reloj-02.png" alt="...">
                  <div class="caption">
                    <p class="textoimg">RELOJ - WANDERLUST <br> $1300,00 <br> HASTA 12 CUOTAS </p>
                    <button type="button" class="btn" id="diseños"> <a href="#">Comprar</a> </button>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img class="imgreloj" src="IMG0/billeteras/billetera03/003-001.jpg" alt="...">
                  <div class="caption">
                    <p class="textoimg">ECO BILLETERA - TERRA <br> $1300,00 <br> HASTA 12 CUOTAS </p>
                    <button type="button" class="btn" id="diseños"> <a href="#">Comprar</a> </button>
                  </div>
                </div>
              </div>

            </div>
            <div class="ultimoboton1">
              <button type="button" class="btn" id="ultimoboton">
              <a href="#">Ver todos los productos</a>
              </button>
            </div>
            </div>
        </div>

@endsection

{{--
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 --}}

    </body>
</html>
