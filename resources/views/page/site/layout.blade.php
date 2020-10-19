<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/estilo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/sociais.css')}}">
</head>

<body>

    <div id="site">
        <div id="cabecalho">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                      <a href="index.php">  <img src="assets/img/logo.png" class="img-fluid" alt="Responsive image"></a>
                    </div>
                    <div class="col-md-5 text-right">
                        <div id="menu">
                            <nav class="navbar navbar-expand-md navbar-light">
                              
                                <li><a href="#">Quadros do Nação</a>
                                    <ul>
                                        <li><a href="">Na Espiral da História</a></li>
                                        <li><a href="">Teorias E suas Práticas</a></li>
                                        <li><a href="">Imersão Cultural</a></li>
                                        <li><a href="">Projeto ClioLeaks</a></li>
                                        <li><a href="">Reflexões Politítico-Cotidianas</a></li>
                                        <li><a href="">A Roda das Contradições:<br>
                                                Debates e Polêmicas</a></li>


                                    </ul>
                                </li>
                                <li><a id="modal-723776" href="#modal-container-723776" role="button" class="btn" data-toggle="modal">Redes Sociais</a></li>
                                <div class="modal fade" id="modal-container-723776" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel">
                                                    Redes Sociais
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="social">

                                                    <p>Você pode encontrar todo o conteudo do Nação Incógnita por aqui</p>
                                                    <div class="footer-img">
                                                        <div class="figure">
                                                            <a href="#" target="_blank">
                                                                <figure>
                                                                    <img src="assets/img/redes/face.png" alt="#" style="width: 100%;">
                                                                    
                                                                </figure>
                                                            </a>
                                                        </div>

                                                        <div class="figure">
                                                            <a href="#" target="_blank">
                                                                <figure>
                                                                    <img src="assets/img/redes/vk.png" alt="#" style="width: 100%;">
                                                                    
                                                                </figure>
                                                            </a>
                                                        </div>

                                                        <div class="figure">
                                                            <a href="#" target="_blank">
                                                                <figure>
                                                                    <img src="assets/img/redes/youtube.png" alt="#" style="width: 100%";>
                                                                    
                                                                </figure>
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="modal-footer">


                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>



                                    </div>

                                </div>
                        </div>

                        </nav>

                    </div>


                    <div class="col-md-4 text-right">
                        <form class="form-inline my-1 my-lg-0">
                            <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-1 my-sm-0" type="submit">Pesquisa</button>
                        </form>
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
                    <img src="assets/img/logo.png" class="img-fluid" alt="Responsive image">
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