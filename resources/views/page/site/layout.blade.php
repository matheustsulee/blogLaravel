<!doctype html>
<html class="no-js" lang="PT-BR">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/estilo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/sociais.css')}}">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark" id="cabecalho">

 <a href='{{ route("home.site") }}'>  <img src="{{ asset('assets/img/logo.png') }}" alt="Responsive image" width="50%"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href='{{ route("home.site") }}'>Home <span class="sr-only">(página atual)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Quadros do Nação
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <!-- <a href="">Na Espiral da História</a>
          <a href="">Teorias E suas Práticas</a>
          <a href="">Imersão Cultural</a>
          <a href="">Projeto ClioLeaks</a>
          <a href="">Reflexões Politítico-Cotidianas</a>
          <a href="">A Roda das Contradições:<br>Debates e Polêmicas</a> -->
        </div>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
  </div>
</nav>

    <div id="site">

        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Redes Sociais</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-4">
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
            </div>
            <div class="col-4">
               <i class="fa fa-user-circle-o" aria-hidden="true"></i>
            </div>
            <div class="col-4">
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
            </div>
        </div>
      </div>


    </div>
  </div>
</div>

        <div class="cleafix"></div>




        @yield('box')

        <div class="box">

            @yield('content')



        </div>



    </div>
    </div>
    <div class="clearfix"></div>

    <div class="rodape">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid" alt="Responsive image">
                </div>

                <div class="col-md-8">
                    <div class="d-flex justify-content-center row">
                        <div class="col-md-9">
                            <div class="p-3 subscription text-center px-5">
                                <p style="color:aliceblue; font-size:0.8em;">Cadastre seu e-mail para receber os conteúdos em primeira mão</p>
                                <div class="d-flex mt-3 mb-3">
                                    <div class="input-group mb-5">
                                        <div class="input-group-prepend"></div><input class="form-control email-input" type="text" placeholder="Enter your email address">
                                        <div class="input-group-append"><button class="btn btn-primary d-flex align-items-center" type="button"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                                </svg></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>


    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>







    <!-- footer start -->

    <!--/ footer end  -->





</body>

</html>
