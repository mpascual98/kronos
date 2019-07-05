
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <meta charset="utf-8">
        <link rel="stylesheet" href="CSS/homestyles0.css">

    <title>@yield('title', 'Home')</title>
  </head>
  <body>


<style >
            body{
              background-image: url(IMG0/imgfondo.jpg);
            }
            /* div.container{
              margin: 0 auto;
            } */
            nav {
                background-color: rgba(0, 0, 0, 1);
                margin-bottom: 20px;
            }
            #navtext{
              color: yellow;
              text-transform: uppercase;
            }
            #navtext:hover{
              background-color: #333;
            }
            .dropdown-menu{
              background-color: rgba(0, 0, 0, 0.5);
            }
            .container-fluid{
              padding: 13px;
            }
            .navbar-nav{
              padding-left: 10px;
            }
            form.navbar-form.navbar-left{
              padding-left: 50px;
            }
            .main-footer{
              display: flex;
              align-items: center;
              justify-content:center;
              overflow: hidden;
              background-color: rgba(0, 0, 0, 1);
              padding: 20px 60px 20px 201px;
              border-top-left-radius: 40px;
              border-top-right-radius: 40px;
              color:white;
              border: 1px solid grey;
            }
            .contenedorfooter{
              display: flex;
              flex-wrap: wrap;
              justify-content: space-between;
            }
            #contenidofooter{
              border-left: 2px solid white;
              margin-bottom: 10px;
            }
            #contenidofooter1{
              border-left: 2px solid white;
              margin-bottom: 10px;
            }
            .fototarjeta{
              height: 30px;
            }
            /* Header */


            .logo{
              display: inline-block;
              text-align: center;
              margin-left: 640px;
            }

            .containerlogos{
              max-width: 100%;
              display: flex;
              justify-content: center;
              align-items: center;
            }

            .form-control{
              background-color: inherit;
              border: 1px solid yellow;
            }

</style>

<nav class="" >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    {{-- <div class="navbar-header">
    <!-- <img src="IMG0/logocompany.png" alt=""> -->

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div> --}}


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      {{-- <ul class="nav navbar-nav">
        <li class="nav-item dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="navtext">Categorias<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Relojes</a></li>
            <li><a class="dropdown-item" href="#">Billeteras</a></li>
            <li><a class="dropdown-item" href="#">Eco-Billeteras</a></li>
          </ul>
        </li>
      </ul> --}}
      {{-- <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar...">
        </div>
        <button type="submit" class="btn btn-default" id="lup">
          <i class="fas fa-search"></i>
        </button>
      </form> --}}
      <div class="logo">
          <a href="/"> <img  class="logocompany" src="IMG0/logocompany01.png" class="lohoexample" style="width:100px; height:45px; "alt=""> </a>
      </div>

      <ul class="nav navbar-nav navbar-right">

                @if (Route::has('login'))
                        @auth
                    <li> <a href="{{ url('/home') }}"  id="navtext">Home</a> </li>
                        @else
                  <li>    <a href="{{ route('login') }}" id="navtext">Login</a> </li>

                            @if (Route::has('register'))
                      <li> <a href="{{ route('register') }}" id="navtext" >Registrate</a> </li>
                            @endif
                        @endauth
                        <li> <a href="#" id="navtext"> <i class="fas fa-shopping-cart"></i></a> </li>
                    </div>
                @endif
              </div>
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->

</nav>


@yield('prueba')

  </body>
</html>
