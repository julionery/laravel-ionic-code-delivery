<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Os PrintF</title>

    <link href='https://fonts.googleapis.com/css?family=Tangerine:700,400' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <script src="js/jquery.ui.totop.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body data-spy="scroll" data-target=".menu-navegacao" data-offset="300">
      <!-- Redes Sociais -->
      <div class="container">
          <div class="row">
              <div class="col-xs-12">
                  <center> <img src="imgs/logo2.png" class="img-responsive"/></center>
              </div>
          </div>
      </div>
      <!-- // Redes Sociais -->

      <!-- Menu da Aplicação -->
      <nav class="navbar navbar-default navbar-fixed-top divcolorida">
          <div class="container">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-navegacao">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
              <a class="navbar-brand" href="#">Os PrintF</a>
              </div>

              <div class="collapse navbar-collapse menu-navegacao" id="menu-navegacao">
                  <ul class="nav navbar-nav navbar-right">
                      <li>
                        <a class="" href="#servicos">Serviços</a>
                      </li>
                      <li>
                        <a class="" href="#menu">Menu</a>
                      </li>
                      <li>
                        <a class="" href="#quemsomos">Quem Somos</a>
                      </li>
                      <li>
                        <a class="" href="#localizacao">Localização</a>
                      </li>
                      <li>
                        <a class="" href="#contato">Contato</a>
                      </li>
                      <li>
                        <a class="" href="#">Login</a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
      <!-- // Menu da Aplicação -->

      <!-- Slider da Aplicação -->
      <div class="divslider">
        <!-- <div class="container">
            <div class="col-xs-12"> -->
            <div id="sliderprincipal" class="carousel slide" data-ride="carousel">

              <ol class="carousel-indicators">
                  <li data-target="#sliderprincipal" data-slide-to="0" class="active"></li>
                  <li data-target="#sliderprincipal" data-slide-to="1"></li>
                  <li data-target="#sliderprincipal" data-slide-to="2"></li>
                  <li data-target="#sliderprincipal" data-slide-to="3"></li>
              </ol>

              <div class="carousel-inner" role="listbox">
                  <div class="item active">
                      <img src="imgs/slider/slide.jpg" alt="Imagem slider 1">
                  </div>
                  <div class="item">
                      <img src="imgs/slider/slide1.jpg" alt="Imagem slider 2">
                  </div>
                  <div class="item">
                      <img src="imgs/slider/slide2.jpg" alt="Imagem slider 3">
                  </div>
                  <div class="item">
                      <img src="imgs/slider/slide3.jpg" alt="Imagem slider 4">
                  </div>
              </div>
              <a class="left carousel-control" href="#sliderprincipal" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Anterior</span>
              </a>
              <a class="right carousel-control" href="#sliderprincipal" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Próximo</span>
              </a>
            </div>
            <!--  </div>
          </div> -->
      </div>
      <!-- // Slider da Aplicação -->


      <!-- Serviços -->
      <section id="servicos">
          <div class="container">
              <div class="row">
                  <div class="col-xs-12">
                    <div class="page-header"><h1>Serviços <small>Conheça o que fazemos!</small></h1></div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-4 col-md-4 itemServicos">
                      <div><img src="imgs/pizzada.jpg" class="img-responsive img-circle"/></div>
                      <h4>Pizzada</h4>
                      <p> Comemore seu aniversário ou leve para seu evento a Pizzada dos PrintF!<br> Preencha o formulário que os PrintF vai até você! </p>
                      <div class="col-xs-12 text-center">
                          <a href="#" class="btn btn-default btn-lg itemServicos_todosOsServicos">Mais informações!</a>
                      </div>
                  </div>

                  <div class="col-sm-4 col-md-4 itemServicos">
                      <div><img src="imgs/delivery2.png" class="img-responsive img-circle"/></div>
                      <h4>Delivery Rápido</h4>
                      <p> Receba no conforto do seu lar os melhores pratos que a Fabbrica tem a oferecer utilizando nosso <br>Delivery Online</p>
                      <div class="col-xs-12 text-center">
                          <a href="#" class="btn btn-default btn-lg itemServicos_todosOsServicos">Mais informações!</a>
                      </div>
                  </div>

                  <div class="col-sm-4 col-md-4 itemServicos">
                      <div><img src="imgs/comemoracoes.jpeg" class="img-responsive img-circle"/></div>
                      <h4>Comemorações</h4>
                      <p> Os PrintF estão preparados para receber com carinho sua comemoração, desde aniversários e formaturas até eventos corporativos. </p>
                      <div class="col-xs-12 text-center">
                          <a href="#" class="btn btn-default btn-lg itemServicos_todosOsServicos">Mais informações!</a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- // Serviços -->



      <!-- Menu -->
      <section id="menu" class="divcolorida">
          <div class="container">
              <div class="row">
                  <div class="col-xs-12">
                      <div class="page-header"><h1>Menu <small>Conheça nossos cardápios!</small></h1></div>
                  </div>
              </div>

              <div class="row rowMenu">
                  <div class="col-sm-4 col-md-4">
                      <div class="itemMenu">
                      <div><img src="imgs/cardapioPizza.jpg" class="img-responsive img-rounded"/></div>
                          <div class="col-xs-12 text-center itemBotao">
                          <a href="#" class="btn btn-default btn-lg">Pizzas</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-4 col-md-4">
                      <div class="itemMenu">
                      <div><img src="imgs/cardapioSalada.jpg" class="img-responsive img-rounded"/></div>
                          <div class="col-xs-12 text-center itemBotao">
                              <a href="#" class="btn btn-default btn-lg">Saladas</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-4 col-md-4">
                      <div class="itemMenu">
                      <div><img src="imgs/cardapioMassas.jpg" class="img-responsive img-rounded"/></div>
                          <div class="col-xs-12 text-center itemBotao">
                          <a href="#" class="btn btn-default btn-lg">Massas</a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="row rowMenu">
                  <div class="col-sm-4 col-md-4">
                      <div class="itemMenu">
                      <div><img src="imgs/cardapioPratos.jpg" class="img-responsive img-rounded"/></div>
                          <div class="col-xs-12 text-center itemBotao">
                          <a href="#" class="btn btn-default btn-lg">Pratos</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-4 col-md-4">
                      <div class="itemMenu">
                      <div><img src="imgs/cardapioSobremesas.jpg" class="img-responsive img-rounded"/></div>
                          <div class="col-xs-12 text-center itemBotao">
                          <a href="#" class="btn btn-default btn-lg">Sobremesas</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-4 col-md-4">
                      <div class="itemMenu">
                      <div><img src="imgs/cardapioBebidas.jpg" class="img-responsive img-rounded"/></div>
                          <div class="col-xs-12 text-center itemBotao">
                          <a href="#" class="btn btn-default btn-lg">Bebidas</a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="row">

              </div>
          </div>
      </section>
      <!-- // Menu -->



      <!-- Quem Somos -->
      <section id="quemsomos">
          <div class="container">
              <div class="row">
                  <div class="col-xs-12">
                      <div class="page-header"><h1>Quem Somos <small>Conheça nossa história!</small></h1></div>
                  </div>
              </div>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="col-sm-8 text-right">
                              <h3>Sobre Os PrintF Pizzaria:</h3>
                              <p>Fundada no Brasil em 2010, Os PrintF Pizzaria é uma das maiores redes de pizzaria delivery do mundo. A marca PrintF está baseada em cinco pilares que norteiam o posicionamento da marca no Brasil e no mundo: sabor, preço, velocidade, delivery e promoção. Isto quer dizer que, mesmo sendo uma marca conhecida mundialmente, Os PrintF sabe da importância de agir localmente, de acordo com a particularidade de cada lugar.
</p>
                          </div>
                          <div class="col-sm-4">
                              <img src="imgs/pizzaria.png" class="img-responsive img-circle"/>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="col-sm-4">
                              <img src="imgs/missaoPizza.jpg" class="img-responsive img-circle"/>
                          </div>
                          <div class="col-sm-8 text-left">
                              <h3>Missão da empresa:</h3>
                              <p>Os PrintF Pizzaria, tem como proposta oferecer um programa completo: ambiente agradável, boa pizza e diversas opções. <br/>
A qualidade e o sabor dos pratos servidos, principalmente de nossas pizzas, bem como o atendimento de nossa equipe, é, sem duvida, o nosso maior orgulho, e a razão de uma clientela amiga e cativa, que nos acompanha por todos esses anos.<br>
<b> Os PrintF Pizzaria - Sabores que marcam para sempre!</b></p>
                          </div>

                      </div>
                  </div>

              <div class="row">
                  <div class="col-xs-12">
                      <div class="page-header"><h1>Nossa Equipe <small>Conheça nossos colaboradores!</small></h1></div>
                  </div>
              </div>

              <div class="row itemEmpresa">
                  <div class="col-sm-3">
                      <div>
                      <div><img src="imgs/bootstrap.png" class="img-responsive grayscale img-rounded"/></div>
                      <h4>Bootstrap</h4>
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div>
                      <div><img src="imgs/laravel.png" class="img-responsive grayscale img-rounded"/></div>
                      <h4>Laravel</h4>
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div>
                      <div><img src="imgs/cordova-ng-ionic.png" class="img-responsive grayscale img-rounded"/></div>
                      <h4>Cordova + AngularJS + Ionic</h4>
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div>
                      <div><img src="imgs/julio.jpg" class="img-responsive grayscale img-rounded"/></div>
                      <h4>Júlio Nery</h4>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-xs-12 text-center">
                      <a href="#" class="btn btn-default btn-lg itemConhecaEmpresa">Conheça melhor a empresa!</a>
                  </div>
              </div>
          </div>
      </section>
      <!-- // Quem Somos -->



      <!-- Localização -->
      <section id="localizacao" class="divcolorida">
          <div class="container">
              <div class="row">
                  <div class="col-xs-12">
                      <div class="page-header"><h1>Localização <small>Veja onde estamos!</small></h1></div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-xs-12">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60782.00891725883!2d-50.96180805590793!3d-17.797544710869705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9361db7d2c321dc1%3A0xe7ac78da77d5dc69!2sRio+Verde%2C+GO!5e0!3m2!1spt-BR!2sbr!4v1446926374839" width="100%" height="520" frameborder="0" style="border:0" allowfullscreen></iframe>

                  </div>
              </div>
          </div>
      </section>
      <!-- // Localização -->



      <!-- Contato -->
      <section id="contato">
          <div class="container">
              <div class="row">
                  <div class="col-xs-12">
                      <div class="page-header"><h1>Contato <small>Fale conosco agora mesmo!</small></h1></div>
                  </div>
              </div>

              <div class="row contato">
                  <div class="col-xs-12">
                      <p class="bg-info aviso">Preencha o formulário para entrar em contato conosco!</p>
                  </div>
              </div>


              <div class="row contato">
                  <div class="col-xs-12">
                      <form name="frmContato" id="formContato">
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <input type="text" class="form-control input-lg" placeholder="Qual o seu nome? *" required/>
                                  </div>
                                  <div class="form-group">
                                      <input type="email" class="form-control input-lg" placeholder="Qual o seu email? *" required/>
                                  </div>
                                  <div class="form-group">
                                      <input type="tel" class="form-control input-lg" placeholder="Seu telefone?"/>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <textarea class="form-control input-lg" placeholder="Sua mensagem! *" required></textarea>

                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-6">
                                  <div class="alert alert-success">Envio Realizado!</div>
                              </div>
                              <div class="col-sm-6 text-right">
                                  <button type="submit" class="btn btn-info btn-lg">Enviar Formulário</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </section>
      <!-- // Contato -->


      <footer>
          <div class="container">
              <div class="row">
                  <div class="col-sm-10">
                  <p>&copy; Copyright &copy; 2015. Company PrintF all rights reserved.</p>
                  </div>
                  <div class="col-sm-2 text-right">
                      <small>Desenvolvido por:</small><br>
                      <strong>Júlio Nery</strong>
                  </div>
              </div>
          </div>
      </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>