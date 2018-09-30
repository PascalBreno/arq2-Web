<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <!--- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>JGameduino</title>
    <meta name="description" content="BirdDog Data Science Project" />
    <meta name="keywords" content="BirdDog, Big Data, Roney Fraga Souza,Data Science, R, SAS, Data Analytics, Python" />

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/media-queries.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/analytics.js"></script>

    <script type="text/javascript" src = "js/particles.js"> </script>
    <script type="text/javascript" src = "js/app.js"> </script>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="images/uiuc.ico" >
    <link rel="bookmark" href="images/uiuc.ico">

</head>

<body>


<!-- Header
================================================== -->
<div id="particles-js">


</div>


<script type="text/javascript" src = "js/particles.js"> </script>
<script type="text/javascript" src = "js/app.js"> </script>
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
            <li><a class="smoothscroll" href="#contact">Grupo</a></li>
        </ul> <!-- end #nav -->

    </nav> <!-- end #nav-wrap -->

    <div class="row banner">
        <div class="banner-text">


            <!-- <h1 class="responsive-headline">&nbsp;&nbsp;&nbsp;<br></h1> -->
            <h1 class="responsive-headline">JGameduino</h1>
            <h3>Projeto de Arquitetura II</h3><br>


                <hr />
            @guest
                <a href="{{route('home')}}"> <button class="button">Acessar sua conta</button></a>
                <a  href="{{ route('register') }}"><button class=button">Criar sua conta </button> </a>
            @else
                <h2>Seja bem vindo, <span class="caret">{{ Auth::user()->name }}</span></h2>
                <h2 >Seu ID parece acessar o jogo <span style="color:white;">{{Auth::user()->id}}</span></h2>
                        <a  href="{{ route('logout') }}"
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
                            <img class="profile-pic"  src="images/arduino1.jpg" alt="" />
                        </div>

                        <div class="nine columns main-col">
                            <h2>Sobre o projeto</h2>

                            <p>O projeto consiste de um mini-game que contem 3 jogos,
                                o primeiro é um jogo de matematica que testa o conhecimento do jogador em somas, subtrações, multiplacações e divisões, o segundo jogo se baseia em perguntas e respostas para testar o conhecimento do jogador em diversas áreas, o terceiro jogo é baseado em binario, esse apresenta para o jogador um numero em binário e o jogador devera responder o complemento de dois desse numero. É apresentada ao jogador a opção de criar conta em nosso site para que esse receba sua ID que será utilizada pra salvar os recordes do jogador em cada jogo. O jogo foi desenvolvido pelos alunos Breno, David, Henrique e Pedro que cursam Ciencia da Computação da UFMT para a disciplina de Arquitetura de Computadores 2.</p>

                        </div> <!-- end .main-col -->

                    </div> <!-- end outer row -->

                </section> <!-- About Section End-->


                <!-- Work Experience Section
                ================================================== -->
                <section id="experience">

                    <div class="row work">

                        <div class="twelve columns header-col">
                            <h1 style = ''><span>Equipamentos</span></h1>
                        </div>

                        <br>
                        <br>
                        <div class="twelve columns main-col">
                            <div class="row item">

                                <div class="nine columns">

                                    <h3>Equipamentos Utilizados</h3>

                                    <p class = 'info'>
                                        O projeto é dividido em duas partes básicas a física que corresponde aos componentes eletrônicos; e um sistema que irá armazenar os recordes e as informações do jogador.

                                    </p>
                                </div>


                            </div> <!-- item end -->

                        </div>

                        <div class="twelve columns main-col">
                            <div class="row item">

                                <div class="nine columns">

                                    <h3>Software</h3>

                                    <p>
                                        A parte de software do projeto é o sistema que contém os jogos implementados no arduino e organizados através de um menu, que quando acionado pelo teclado direciona para o jogo em questão. Também faz parte do sistema uma página web onde constará o histórico de recordes vinculados aos respectivos jogadores.                                    </p>
                                </div>


                            </div> <!-- item end -->

                        </div>

                        <div class="twelve columns main-col">
                            <div class="row item">

                                <div class="nine columns">

                                    <h3>Hardware</h3>

                                    <p>
                                        A parte física é formada por duas breadboards que são a base para receber os demais componentes. A interação entre usuário e jogo é feita com um teclado de 16 teclas por onde os comandos são emitidos e um display LCD Nokia 5110 por onde o usuário visualiza todas as informações necessárias para jogar; a comunicação web é feita com o módulo  ESP8266 Wi-fi; arduino mega; e componentes menores: resistores e jumpers.
                                    </p>
                                    <ul>
                                        <li>Breadboards</li>
                                        <li>Teclado de 16 teclas</li>
                                        <li>Display LCD Nokia 5110</li>
                                        <li>Módulo  ESP8266 Wi-fi</li>
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
                                        <li>Arduíno é uma plataforma de prototipagem eletrônica de hardware livre e de placa única, projetada com um microcontrolador Atmel AVR com suporte de entrada/saída embutido, uma linguagem de programação padrão, a qual tem origem em Wiring, e é essencialmente C/C++. O objetivo do projeto é criar ferramentas que são acessíveis, com baixo custo, flexíveis e fáceis de se usar por principiantes e profissionais. Principalmente para aqueles que não teriam alcance aos controladores mais sofisticados e ferramentas mais complicadas.</li>
                                    </ul>
                                </div>


                            </div> <!-- item end -->

                            <div class="row item">

                                <div class="ten columns">

                                    <h3>SQL</h3>
                                    <p class="info">Data Base Programming Language</p>
                                    <ul>
                                        <li>Structured Query Language, ou Linguagem de Consulta Estruturada ou SQL, é a linguagem de pesquisa declarativa padrão para banco de dados relacional (base de dados relacional). Muitas das características originais do SQL foram inspiradas na álgebra relacional. </li>
                                    </ul>
                                </div>



                            </div> <!-- item end -->

                            <div class="row item">

                                <div class="ten columns">

                                    <h3>Laravel</h3>
                                    <p class="info">PHP<span>&bull; Framework</span> + javascript</p>
                                    <ul>
                                        <li>O Laravel é um framework de desenvolvimento rápido para PHP, livre e de código aberto. Cuja o principal objetivo é permitir que você trabalhe de forma estruturada e rápida.</ul>
                                </div>

                            </div> <!-- item end -->

                        </div> <!-- main-col end -->

                    </div> <!-- End Work -->

                </section> <!-- Experience Section End-->


                <section id="records">

                    <div class="row">

                        <div class="twelve columns collapsed">

                            <h1><span>Records</span></h1>
                            @foreach( $bd as $bds)
                                <div style="margin-top:2%;" class="col col-md-2 col-xs-2">
                                    <h2>{{$bd->JogoA}}</h2>
                                </div>
                            @endforeach
                        </div> <!-- twelve columns end -->

                    </div>
                        <!-- Modal Popup
                        ================================================== -->


                </section> <!-- Records Section End-->


                <!-- Contact Section
                ================================================== -->


                <!-- footer
                ================================================== -->
                <footer>

                    <div class="row">

                        <div class="twelve columns">

                            <ul class="social-links">
                                <li><a href="https://github.com/PascalBreno" target="_blank"><i class="fa fa-github"></i></a></li>
                            </ul>

                            <ul class="copyright">
                                <li>2018 <span>&bull;</span> Developed by <span>&bull;</span> Pascal Monet </li>
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
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
                <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

                <script src="js/jquery.flexslider.js"></script>
                <script src="js/waypoints.js"></script>
                <script src="js/jquery.fittext.js"></script>
                <script src="js/magnific-popup.js"></script>
                <script src="js/init.js"></script>
                <!-- <script type="text/javascript" src="back2top/back2top.js"></script> -->

</body>

</html>
