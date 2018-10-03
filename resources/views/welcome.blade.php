<!DOCTYPE html>
<!--[if lt IE 8 ]>
<html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <!--- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>JGameduino</title>
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/media-queries.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/datatables.css"/>

    <!-- Script
    ================================================== -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
    <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

    <script src="js/jquery.flexslider.js"></script>
    <script src="js/waypoints.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/magnific-popup.js"></script>
    <script src="js/init.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/datatables.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/analytics.js"></script>
    <script type="text/javascript" src="js/particles.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/app.js"></script>

    <!-- Favicons
    ================================================== -->

</head>

<body>


<!-- Header
================================================== -->
<div id="particles-js">


</div>


<script type="text/javascript" src="js/particles.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<header id="home">

    <nav id="nav-wrap">

        <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
        <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

        <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">Jogar</a></li>
            <li><a class="smoothscroll" href="#about">Sobre o projeto</a></li>
            <li><a class="smoothscroll" href="#experience">Equipamentos</a></li>
            <!-- <li><a class="smoothscroll" href="#education">Education</a></li> -->
            <li><a class="smoothscroll" href="#records">Records</a></li>
            <!-- <li><a class="smoothscroll" href="#photos">Photos :)</a></li> -->
            <!-- <li><a class="smoothscroll" href="#photos">Photos :)</a></li> -->
            <li><a class="smoothscroll" href="#grupo">Grupo</a></li>
        </ul> <!-- end #nav -->

    </nav> <!-- end #nav-wrap -->

    <div class="row banner">
        <div class="banner-text">


            <!-- <h1 class="responsive-headline">&nbsp;&nbsp;&nbsp;<br></h1> -->
            <h1 class="responsive-headline">JGameduino</h1>
            <h3>Projeto de Arquitetura II</h3><br>


            <hr/>
            @guest
            <a href="{{route('home')}}">
                <button class="button">Acessar sua conta</button>
            </a>
            <a href="{{ route('register') }}">
                <button class="button">Criar sua conta</button>
            </a>
            @else
                <h2>Seja bem vindo, <span class="caret">{{ Auth::user()->name }}</span></h2>
                <h2>Seu ID parece acessar o jogo <span style="color:white;">{{Auth::user()->id}}</span></h2>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Sair da sua conta') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
        </div>
        </li>
        @endguest

    </div>
    </div>
    <p class="scrolldown">
        <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
    </p>
</header>


<section id="about">

    <div class="row">
        <div class="three columns">
            <img class="profile-pic" src="images/arduino1.jpg" alt=""/>
        </div>

        <div class="nine columns ">
            <h1>Sobre o projeto</h1>
            <br/>

            <p style="color:ghostwhite">O projeto consiste de um mini-game que contem 3 jogos,
                o primeiro é um jogo de matematica que testa o conhecimento do jogador em somas, subtrações,
                multiplacações e divisões, o segundo jogo se baseia em perguntas e respostas para testar o conhecimento
                do jogador em diversas áreas, o terceiro jogo é baseado em binario, esse apresenta para o jogador um
                numero em binário e o jogador devera responder o complemento de dois desse numero. É apresentada ao
                jogador a opção de criar conta em nosso site para que esse receba sua ID que será utilizada pra salvar
                os recordes do jogador em cada jogo.</p>

        </div> <!-- end .main-col -->

    </div> <!-- end outer row -->
    <div class ="row">
    <div class="col col-md-2"></div>
<div class="col col-md-8">
        <h1 style="margin-top:5%;margin-bottom:5%;"><span>Dificuldades:</span></h1>
    <h2><span>ESP8266:<span></h2> <p>Tivemos dificuldades durante a configuração do ESP para conectar na internet por comandos AT. Conseguimos resolver isso quando percebemos que ao programar anteriormente diretamente na placa do ESP o código upado é salvo nela até que um reset para o firmware de fábrica seja feito,  assim, respondendo aos comandos AT novamente. Após conseguirmos fazer com o que o ESP respondesse aos comandos AT, tentamos enviar uma string por meio do comando AT+CIPSEND para que por meio de um webservice o recorde fosse atualizado. Contudo,  por mais que o arduino enviasse a string certa e o servidor recebesse a string corretamente  a atualização não era realizada, resolvemos esse problema colocando um serial.Print() na próxima linha(???????)</p>
    <h2><span>Programação:</span></h2>

<p>Tivemos problema durante a programação quando chegamos na parte do timer que controlava o término do jogo. Como no arduino todas as funções costumam ficar dentro do loop, não era possível fazer um timer para cada jogo se estivessem todos dentro do loop. Para resolver o problema nós criamos diversas funções fora do loop, chamando somente o menu dentro do loop.</p>
    <p>O reset do projeto não inicializava  do zero, mas continuava de um estado já adicionado como o recorde  do jogo, tempo, pontuação, escolha do menu e conexão com o banco de dados, assim tivemos que criar um loop para a conexão do ID sem resetar.</p>
    <p>Na programação dos jogos, em geral, a leitura do teclado foi um problema, já que o arduino funciona em looping infinito e adiciona informações continuamente  para o mesmo. Assim, ele não espera uma ação como a leitura do teclado para adicionar na string, então diversos loopings foram necessários para guardar informações do teclado.</p>
    <h2><span>Arduino:</span></h2>
 
<p>A tela Nokia 5110 teve diversos problemas por mal contato e a tela desaparecer durante o processo (Sem ser problema na programação).</p>
</div>
<div class="col col-md-2"></div>
    </div>

</section> <!-- About Section End-->


<!-- Work Experience Section
================================================== -->
<section id="experience">

    <div class="row work">

        <div class="twelve columns header-col">
            <h1 style=''><span>Equipamentos</span></h1>
        </div>

        <br>
        <br>
        <div class="twelve columns main-col">
            <div class="row item">

                <div class="nine columns">

                    <h3>Equipamentos Utilizados</h3>

                    <p class='nine columns'>
                        O projeto é dividido em duas partes básicas a física que corresponde aos componentes
                        eletrônicos; e um sistema que irá armazenar os recordes e as informações do jogador.

                    </p>
                </div>


            </div> <!-- item end -->

        </div>

        <div class="twelve columns main-col">
            <div class="row item">

                <div class="nine columns">

                    <h3>Software</h3>

                    <p>
                        A parte de software do projeto é o sistema que contém os jogos implementados no arduino e
                        organizados através de um menu, que quando acionado pelo teclado direciona para o jogo em
                        questão. Também faz parte do sistema uma página web onde constará o histórico de recordes
                        vinculados aos respectivos jogadores. </p>
                </div>


            </div> <!-- item end -->

        </div>

        <div class="twelve columns main-col">
            <div class="row item">

                <div class="nine columns">

                    <h3>Hardware</h3>

                    <p>
                        A parte física é formada por duas breadboards que são a base para receber os demais componentes.
                        A interação entre usuário e jogo é feita com um teclado de 16 teclas por onde os comandos são
                        emitidos e um display LCD Nokia 5110 por onde o usuário visualiza todas as informações
                        necessárias para jogar; a comunicação web é feita com o módulo ESP8266 Wi-fi; arduino mega; e
                        componentes menores: resistores e jumpers.
                    </p>
                    <ul style="font-family: 'opensans-regular', sans-serif !important;line-height: 30px;
    color: #838C95;">
                        <li class="nine collumns">Breadboards</li>
                        <li>Teclado de 16 teclas</li>
                        <li>Display LCD Nokia 5110</li>
                        <li>Módulo ESP8266 Wi-fi</li>
                        <li>Arduino mega</li>
                        <li>Resistores e jumpers</li>
                    </ul>
                </div>


            </div> <!-- item end -->

        </div>

    </div> <!-- end outer row -->

    <div class="row work">
        <!-- <div class="three columns header-col"> -->
        <div class="twelve columns header-col">
            <h1><span>Linguagens usadas</span></h1>
        </div>

        <div class="twelve columns main-col">
            <div class="row item">

                <div class="nine columns">

                    <h3>C</h3>
                    <p class="info">Arduino<span>&bull;</span>Programming language</p>

                    <ul>
                        <li>Arduíno é uma plataforma de prototipagem eletrônica de hardware livre e de placa única,
                            projetada com um microcontrolador Atmel AVR com suporte de entrada/saída embutido, uma
                            linguagem de programação padrão, a qual tem origem em Wiring, e é essencialmente C/C++. O
                            objetivo do projeto é criar ferramentas que são acessíveis, com baixo custo, flexíveis e
                            fáceis de se usar por principiantes e profissionais. Principalmente para aqueles que não
                            teriam alcance aos controladores mais sofisticados e ferramentas mais complicadas.
                        </li>
                    </ul>
                </div>


            </div> <!-- item end -->

            <div class="row item">

                <div class="ten columns">

                    <h3>SQL</h3>
                    <p class="info">Data Base Programming Language</p>
                    <ul>
                        <li>Structured Query Language, ou Linguagem de Consulta Estruturada ou SQL, é a linguagem de
                            pesquisa declarativa padrão para banco de dados relacional (base de dados relacional).
                            Muitas das características originais do SQL foram inspiradas na álgebra relacional.
                        </li>
                    </ul>
                </div>


            </div> <!-- item end -->

            <div class="row item">

                <div class="ten columns">

                    <h3>Laravel</h3>
                    <p class="info">PHP<span>&bull; Framework</span> + javascript</p>
                    <ul>
                        <li>O Laravel é um framework de desenvolvimento rápido para PHP, livre e de código aberto. Cuja
                            o principal objetivo é permitir que você trabalhe de forma estruturada e rápida.
                    </ul>
                </div>

            </div> <!-- item end -->

        </div> <!-- main-col end -->

    </div> <!-- End Work -->

</section> <!-- Experience Section End-->


<section id="records">

    <div class="row">

        <div class="collapsed">

            <h1><span>Records</span></h1>
            <div style="text-align:center;">
                <a class="btn btn-lg btn-success" data-toggle="collapse" href="#jogoA"
                   aria-controls="jogoA">
                    Records do jogo do milhão
                </a>
                <a class="btn btn-lg btn-success" data-toggle="collapse" href="#jogoB" role="button"
                   aria-expanded="true"
                   aria-controls="jogoB">
                    Records do jogo da matemática
                </a>
                <a class="btn btn-lg btn-success" data-toggle="collapse" href="#jogoC" role="button"
                   aria-expanded="true"
                   aria-controls="jogoC">
                    Record do Complemento de 2
                </a>
            </div>
            <div class="collapse" id="jogoA">
                <div class="card card-body">

                    <table style="margin-top:5%;" id="myTable" class="table table-dark">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Record do milhão</th>
                            <th>Data</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $record1 as $record1s)
                            <tr>

                                <td>{{$record1s->name}}</td>
                                <td>{{$record1s->record1}}</td>

                                <td>{{$record1s->datah}}</td>
                            </tr>
                        @endforeach

                        <script>
                            $(document).ready(function () {
                                $('#myTable').DataTable();
                            });
                        </script>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="collapse" id="jogoB">
                <div class="card card-body">

                    <table style="margin-top:5%;" id="myTable" class="table table-dark">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Record do jogo matemático</th>
                            <th>Data</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $record2 as $record2s)
                            <tr>

                                <td>{{$record2s->name}}</td>
                                <td>{{$record2s->record1}}</td>
                                <td>{{$record2s->datah}}</td>
                            </tr>
                        @endforeach
                        <script>
                            $(document).ready(function () {
                                $('#myTable').DataTable();
                            });
                        </script>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="collapse" id="jogoC">
                <div class="card card-body">

                    <table style="margin-top:5%;" id="myTable" class="table table-dark">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Record do jogo de complemento de 2</th>
                            <th>Data</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $record3 as $record3s)
                            <tr>

                                <td>{{$record3s->name}}</td>
                                <td>{{$record3s->record1}}</td>
                                <td>{{$record3s->datah}}</td>
                            </tr>
                        @endforeach
                        <script>
                            $(document).ready(function () {
                                $('#myTable').DataTable();
                            });
                        </script>
                        </tbody>
                    </table>
                </div>
            </div>

            <div style="margin-bottom:10%;"></div>
            <hr/>
        </div> <!-- twelve columns end -->

    </div>
    <!-- Modal Popup
    ================================================== -->


</section> <!-- Records Section End-->


<!-- grupo Section
================================================== -->
<section id="grupo">
    <div class="row">

        <div class="collapsed">
            <h1 style="margin-bottom:5%;"><span>Equipe</span></h1>
<div style="text-align:center">
            <div style="margin: auto;max-height:600px; max-width:620px; width: auto; height: auto;" id="carouselExampleIndicators" class="carousel slide slideprincipal" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div  class="carousel-inner">
        <div class="carousel-item active zoom">
            <img  class="w-100" src="images/equipe/equipe1.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block fundodescricaoslide">
                <h5>30/09/2018</h5>
                <p>Turma reunida</p>
            </div>
        </div>
        <div class="carousel-item zoom">
            <img   class="w-100" src="images/equipe/equipe2.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block fundodescricaoslide ">
                <div class="fundodescricaoslide"></div>
                <h5>Petrucci pensativo...</h5>
                <p>:o</p>
            </div>
        </div>
        <div class="carousel-item zoom">
            <img height="50%" width="50%" class="w-100" src="images/equipe/equipe3.jpg"alt="Third slide">
            <div class="carousel-caption d-none d-md-block fundodescricaoslide">
                <h5>Churrasco + programação</h5>
                <p></p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</div>
        </div>
            </div>
</section>

<!-- footer
================================================== -->
<footer>

    <div class="row">

        <div class="twelve columns">

            <ul class="social-links">
                <li><a href="https://github.com/PascalBreno" target="_blank"><i class="fa fa-github"></i></a></li>
            </ul>

            <ul class="copyright">
                <li>2018 <span>&bull;</span> Developed by <span>&bull;</span> Pascal Monet</li>
                <!-- The design of this website is inspired by http://www.styleshout.com/ -->
            </ul>

        </div>

        <!-- <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home">
            <i class="icon-up-open"></i>
            </a>
        </div> -->

    </div>

</footer> <!-- Footer End-->

<!-- Java Script
================================================== -->

<!-- <script type="text/javascript" src="back2top/back2top.js"></script> -->

</body>

</html>
