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
            <li><a class="smoothscroll" href="#portfolio">Records</a></li>
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

                            <p>O projeto consiste em um sistema de x jogos, o primeiro de operações matemáticas; o segundo complemento de dois; e o último hhhhh. O objetivo destes jogos é o entretenimento e testar os conhecimentos do usuário em certas áreas de conhecimento. As informações do usuário serão armazenadas contendo uma identificação e seus recordes nos jogos que acessou.

                                1.1 Operações matemáticas: neste jogo o usuário analisa algumas expressões matemáticas (das quatro operações básicas) e julga o resultado como certo ou errado, escolhendo entre dois botões que correspondem ao julgamento do usuário. A pontuação é com base na quantidade de acertos em um tempo limite de trinta segundos.
                                1.2 Complemento de dois:

                                Grupo de Trabalho
                                O grupo responsável por este projeto é formado pelos alunos: Breno  Felix de Souza, David Henrique da Luz Sampaio, Henrique Petrucci Teixeira Rabelo e Pedro Augusto Salamoni.</p>

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

                                    <h3>Big Data Analysis</h3>

                                    <p class = 'info'>
                                        Many of the data that we work on is obtained via scraping data from internet pages. We also usually follow and manipulate some databases the Brazilian government makes available. These are:
                                    <ul>
                                        <li>Censo Demográfico</li>
                                        <li>Pesquisa Nacional por Amostra de Domicílios - PNAD</li>
                                        <li>Pesquisa de Orçamento Familiar - POF</li>
                                        <li>Pesquisa Mensal de Emprego - PME</li>
                                        <li>Censo da Educação Superior</li>
                                        <li>Censo Escolar</li>
                                        <li>ENEM</li>
                                        <li>ENADE</li>
                                    </ul>
                                    </p>
                                </div>


                            </div> <!-- item end -->

                        </div>

                        <div class="twelve columns main-col">
                            <div class="row item">

                                <div class="nine columns">

                                    <h3>Text Mining</h3>

                                    <p>
                                        We use NLP Natural Language Processing to analyze the contents of articles and patents. The idea is to obtain the content of a set of documents, via language filters to return candidate terms, without the need to read those documents. The analysis of the importance of these candidate terms is done by metrics such as tf-idf.
                                    </p>
                                </div>


                            </div> <!-- item end -->

                        </div>

                        <div class="twelve columns main-col">
                            <div class="row item">

                                <div class="nine columns">

                                    <h3>Web Scraping</h3>

                                    <p>
                                        Automated processes implemented using a bot. It is a form of copying, in which specific data is gathered and copied from the web, typically into a central local database or spreadsheet, for later retrieval or analysis.
                                    </p>
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
                                    <p class="info">Arduino<span>&bull;</span>Programming language<span></p>

                                    <ul>
                                        <li>allows you to analyze data in a proficient way with a few lines of code. The great availability of packages, free software, community and flexibility are the strongest points to choose R as a work tool.</li>
                                    </ul>
                                </div>

                                <div class="three push-1 columns">
                                    <a href="http://cs.illinois.edu/" target="_blank"><img class="cs-pic" src="images/r.png" alt="cs_illinois_logo" /></a>
                                </div>

                            </div> <!-- item end -->

                            <div class="row item">

                                <div class="ten columns">

                                    <h3>Python</h3>
                                    <p class="info">Programming Language</p>
                                    <ul>
                                        <li>Python supports multiple programming paradigms, including object-oriented, imperative, functional and procedural, and has a large and comprehensive standard library.  </li>
                                    </ul>
                                </div>

                                <div class="two columns">
                                    <a href="http://groupon.com" target="_blank"><img class="groupon-pic" src="images/python.png" alt="groupon_logo" /></a>
                                </div>

                            </div> <!-- item end -->

                            <div class="row item">

                                <div class="ten columns">

                                    <h3>SQL</h3>
                                    <p class="info">DataBase<span>&bull; Expertise</span></p>
                                    <ul>
                                        <li>We analyzed and projected data from a wide range of database management systems.</li>
                                    </ul>
                                </div>

                                <div class="two columns">
                                    <a href="http://apple.com" target="_blank"><img class="apple-pic" src="images/sql.jpeg" alt="apple_logo" /></a>
                                </div>

                            </div> <!-- item end -->

                        </div> <!-- main-col end -->

                    </div> <!-- End Work -->

                </section> <!-- Experience Section End-->


                <!-- Portfolio Section
                ================================================== -->
                <section id="portfolio">

                    <div class="row">

                        <div class="twelve columns collapsed">

                            <h1><span>Records</span></h1>


                        </div> <!-- twelve columns end -->


                        <!-- Modal Popup
                        ================================================== -->

                        <div id="modal-00" class="popup-modal mfp-hide">

                            <img class="scale-with-grid" src="images/portfolio/tecc.png" alt="410" />

                            <div class="description-box">
                                <h4>Technology Forecasting</h4>
                                <ul>
                                    <li>technological forecasting via curriculum, articles and patent analyzes</li>
                                </ul>
                                <span class="categories"><i class="fa fa-tag"></i>CS, Text mining, NLP, Network, Patents, Papers</span>
                            </div>

                            <div class="link-box">
                                <a href="google.com.br" target="_blank">View Demo</a>
                                <a class="popup-modal-dismiss">Close</a>
                            </div>

                        </div><!-- modal-00 End -->

                        <div id="modal-01" class="popup-modal mfp-hide">

                            <img class="scale-with-grid" src="images/portfolio/bioenergy.png" alt="410" />

                            <div class="description-box">
                                <h4>Bioenergy Patent Networks</h4>
                                <ul>
                                    <li>Responsive Network created from uspto patents</li>
                                    <li>using vis.js</li>
                                </ul>
                                <span class="categories"><i class="fa fa-tag"></i>CS, Data Visualization, Social Visualization, vis.js, network</span>
                            </div>

                            <div class="link-box">
                                <a href="projects/bioenergy_patent.html" target="_blank">Open Network</a>
                                <a class="popup-modal-dismiss">Close</a>
                            </div>

                        </div><!-- modal-01 End -->

                        <div id="modal-02" class="popup-modal mfp-hide">

                            <img class="scale-with-grid" src="images/portfolio/gametheory.png" alt="410" />

                            <div class="description-box">
                                <h4>AccentDiff</h4>
                                <ul>
                                    <li>Reponsive Network created from Scopus papers</li>
                                    <li>using vis.js</li>
                                </ul>
                                <span class="categories"><i class="fa fa-tag"></i>CS, Data Visualization, Social Visualization, vis.js</span>
                            </div>

                            <div class="link-box">
                                <a href="projects/gametheory_papers.html" target="_blank">Open Network</a>
                                <a class="popup-modal-dismiss">Close</a>
                            </div>

                        </div><!-- modal-02 End -->

                        <div id="modal-03" class="popup-modal mfp-hide">

                            <img class="scale-with-grid" src="images/portfolio/matogrosso.png" alt="410" />

                            <div class="description-box">
                                <h4>Choropleth Map</h4>
                                <ul>
                                    <li>Mato Grosso IDH Map</li>
                                    <li>Using leafletmap</li>
                                </ul>
                                <span class="categories"><i class="fa fa-tag"></i>CS, Data Visualization, Social Visualization, Map, Leaflet</span>
                            </div>

                            <div class="link-box">
                                <a href="projects/mapa_idh_mt.html" target="_blank">Open Map</a>
                                <a class="popup-modal-dismiss">Close</a>
                            </div>

                        </div><!-- modal-03 End -->

                        <div id="modal-04" class="popup-modal mfp-hide">

                            <img class="scale-with-grid" src="images/portfolio/modals/410_2.png" alt="410" />

                            <div class="description-box">
                                <h4>ReviewsHub</h4>
                                <p>A Review Analyzer for Best Buy Reviews. It has the following three functions:<br></p>
                                <ul>
                                    <li>Search Engine: Search in all the reviews about product properties that users queried</li>
                                    <li>Compare Visualization: Search and visualize comparison patterns in reviews</li>
                                    <li>Summarizer: Summarize long reviews to a few sentences</li>
                                </ul>
                                <span class="download"><a href="https://drive.google.com/file/d/0B4U4hE0IYrjnZC1OZlA1SXdDOGM/edit?usp=sharing" target="_blank">Download Final Report<img alt="pdf_icon" src="images/save_pdf.png" /></a></span>
                                <span class="categories"><i class="fa fa-tag"></i>CS, Text mining, Information Retrieval, Django, Search, Comparison, Summarization</span>
                            </div>

                            <div class="link-box">
                                <a href="https://github.com/riffschelder/reviewshub" target="_blank">Details</a>
                                <a class="popup-modal-dismiss">Close</a>
                            </div>

                        </div><!-- modal-04 End -->

                        <div id="modal-05" class="popup-modal mfp-hide">

                            <img class="scale-with-grid" style="height:380px;" src="images/portfolio/modals/242_redflag_2.png" alt="242_redflag" />

                            <div class="description-box">
                                <h4>Xiaodan's Portfolio</h4>
                                <p>Features:</p>
                                <ul>
                                    <li>SVN code viewer with Comment Filter System</li>
                                    <li>The SVN data were parsed with PHP so that the information of each commit could be seen</li>
                                    <li>All Java codes for a Chess Library and Python codes for a CSAir Flight System can be shown with jQuery slide down effects</li>
                                </ul>
                                <span class="categories"><i class="fa fa-tag"></i>CS, Web Programming, SVN, Java, Python, PHP</span>
                            </div>

                            <div class="link-box">
                                <a href="http://web.engr.illinois.edu/~zhang349/Portfolio/" target="_blank">Visit Site</a>
                                <a class="popup-modal-dismiss">Close</a>
                            </div>

                        </div><!-- modal-05 End -->

                        <div id="modal-06" class="popup-modal mfp-hide">

                            <img class="scale-with-grid" style="height:340px;" src="images/portfolio/modals/yummy_2.png" alt="yummy" />

                            <div class="description-box">
                                <h4>Yummy!</h4>
                                <p>Users can invite their friends with QR codes and share restaurants with their friends. The communication is based on socket channel with low frequency polling which significantly reduced the number of requests processed by server.</p>
                                <span class="download"><a href="https://drive.google.com/file/d/0B4U4hE0IYrjncGpQTkttUXlndEE/edit?usp=sharing" target="_blank">Download Project Proposal<img alt="pdf_icon" src="images/save_pdf.png" /></a></span><br>
                                <span class="download"><a href="https://drive.google.com/file/d/0B4U4hE0IYrjna080YTVhQVpsbWc/edit?usp=sharing" target="_blank">Download Technical Design File<img alt="pdf_icon" src="images/save_pdf.png" /></a></span><br>
                                <span class="download"><a href="https://drive.google.com/file/d/0B4U4hE0IYrjnXzFPWWdNejlsX1U/edit?usp=sharing" target="_blank">Download Wireframe Design File<img alt="pdf_icon" src="images/save_pdf.png" /></a></span><br>
                                <span class="categories"><i class="fa fa-tag"></i>CS, Mobile Web App, Facebook API, QR code, Google App Engine</span>
                            </div>

                            <div class="link-box">
                                <a href="http://yummy-webapp.appspot.com/login" target="_blank">Visit Site</a>
                                <a class="popup-modal-dismiss">Close</a>
                            </div>

                        </div><!-- modal-06 End -->

                        <div id="modal-07" class="popup-modal mfp-hide">

                            <img class="scale-with-grid" style="height:350px;" src="images/portfolio/modals/todo_list_2.png" alt="todo_list" />

                            <div class="description-box">
                                <h4>Remember THESE!</h4>
                                <p>Features:</p>
                                <ul>
                                    <li>Add and Remove list items</li>
                                    <li>Multiple Lists, with names</li>
                                    <li>Marking list items as done</li>
                                    <li>A button to delete all done items in a list</li>
                                    <li>List persist between browser sessions</li>
                                    <li>Deadlines and the ability to sort by deadlines</li>
                                    <li>Animations on almost all main actions</li>
                                </ul>

                                <span class="categories"><i class="fa fa-tag"></i>CS, Mobile Web App, HTML5, Design, LocalStorage, Javascript</span>
                            </div>

                            <div class="link-box">
                                <a href="http://web.engr.illinois.edu/~zhang349/TODO-List/" target="_blank">Visit Site</a>
                                <a href="https://github.com/Xiaodan/TodoList" target="_blank">Details</a>
                                <a class="popup-modal-dismiss">Close</a>
                            </div>

                        </div><!-- modal-07 End -->

                        <div id="modal-08" class="popup-modal mfp-hide">

                            <div class="description-box">
                                <h4>Breast Cancer Data Analysis</h4>
                                <p>Breast cancer is a type of cancer that originates from breast tissue.
                                    In this project, we will analyze a breast cancer dataset and use it to find genetic markers. For the selected genetic markers, we are going to give bio-functions corresponding to them and use the selected markers to predict the breast cancer. Then, we will discuss the limitations of the prediction model and some approaches to overcome them.</p>
                                <span class="download"><a href="https://drive.google.com/file/d/0B4U4hE0IYrjnbDF2Z20yMVBfa0U/edit?usp=sharing" target="_blank">Download Final Project Report<img alt="pdf_icon" src="images/save_pdf.png" /></a></span><br>
                                <span class="download"><a href="https://drive.google.com/file/d/0B4U4hE0IYrjnTWFHc194Q3hzZms/edit?usp=sharing" target="_blank">Download Final Project Presentation<img alt="pdf_icon" src="images/save_pdf.png" /></a></span><br>
                                <span class="download"><a href="https://drive.google.com/file/d/0B4U4hE0IYrjnQWk5cFBoZnB4MUk/edit?usp=sharing" target="_blank">Download Final Project Codes<img alt="pdf_icon" src="images/save_pdf.png" /></a></span><br>
                                <span class="download"><a href="https://drive.google.com/file/d/0B4U4hE0IYrjnaXpwdHJfaHoyaHM/edit?usp=sharing" target="_blank">Download Final Project Data<img alt="pdf_icon" src="images/save_pdf.png" /></a></span>
                                <span class="categories"><i class="fa fa-tag"></i>STAT, Biostatistics, R, LDA, T-Test, Heatmap, Predicted Model</span>
                            </div>

                            <div class="link-box">
                                <a class="popup-modal-dismiss">Close</a>
                            </div>

                        </div><!-- modal-08 End -->

                        <div id="modal-09" class="popup-modal mfp-hide">

                            <img class="scale-with-grid" style="height:350px;" src="images/portfolio/modals/personal_website_2.png" alt="personal_website" />

                            <div class="description-box">
                                <h4>Personal Website 1.0</h4>
                                <p>This is my first personal website.<br>This is how I first stepped into the fantastic Web Programming world.
                                    This project helped me learn a lot about Web Programming languages, skills and tricks.<br></p>
                                <span class="categories"><i class="fa fa-tag"></i>CS, Personal Website, Web Programming</span>
                            </div>

                            <div class="link-box">
                                <a href="http://web.engr.illinois.edu/~zhang349/old" target="_blank">Visit Site</a>
                                <a class="popup-modal-dismiss">Close</a>
                            </div>

                        </div><!-- modal-09 End -->

                        <div id="modal-10" class="popup-modal mfp-hide">

                            <img class="scale-with-grid" src="images/portfolio/modals/titanic_2.png" alt="titanic" />

                            <div class="description-box">
                                <h4>Titanic Data Anlysis</h4>
                                <p>The sensational tragedy on April 15, 1912, the Titanic sank after colliding with an iceberg during her maiden voyage, killing 1502 out of 2224 passengers and crew, shocked the international community and led to better safety regulations for ships. We are also interested to know the survivals' characteristics.</p>
                                <span class="download"><a href="https://drive.google.com/file/d/0B4U4hE0IYrjnNVVnNGQ1MEdadzA/edit?usp=sharing" target="_blank">Download Final Project Report<img alt="pdf_icon" src="images/save_pdf.png" /></a></span><br>
                                <span class="download"><a href="https://drive.google.com/file/d/0B4U4hE0IYrjnUjllN01mU1E4d0E/edit?usp=sharing" target="_blank">Download Final Project Questions<img alt="pdf_icon" src="images/save_pdf.png" /></a></span><br>
                                <span class="download"><a href="https://drive.google.com/file/d/0B4U4hE0IYrjnSU4xYTFudGd2SVU/edit?usp=sharing" target="_blank">Download Final Project Codes<img alt="pdf_icon" src="images/save_pdf.png" /></a></span><br>
                                <span class="download"><a href="https://drive.google.com/file/d/0B4U4hE0IYrjnbjJ5SnVSU0VROUE/edit?usp=sharing" target="_blank">Download Final Project Data<img alt="pdf_icon" src="images/save_pdf.png" /></a></span><br>
                                <span class="download"><a href="https://drive.google.com/file/d/0B4U4hE0IYrjnRlAxSVlVcnFfWWc/edit?usp=sharing" target="_blank">Download Helper Function File<img alt="pdf_icon" src="images/save_pdf.png" /></a></span>
                                <span class="categories"><i class="fa fa-tag"></i>STAT, Kaggle, R, Linear Regression, Logistic Regression, Random Forest</span>
                            </div>

                            <div class="link-box">
                                <a href="https://github.com/Xiaodan/Titanic-Data-Analysis-Project" target="_blank">Details</a>
                                <a class="popup-modal-dismiss">Close</a>
                            </div>

                        </div><!-- modal-10 End -->

                        <div id="modal-11" class="popup-modal mfp-hide">

                            <img class="scale-with-grid" src="images/portfolio/modals/paper_2.png" alt="paper" />

                            <div class="description-box">
                                <h4>Industry Sales for Printing and Writing Paper 1963-1972 Analysis</h4>
                                <p>The time series data we analyze is the industry sales for printing and writing paper (in Thousand of French francs) from January 1963 to December 1972. We expect to fit a forecasting model for the monthly industry sales of printing and writing papers.</p>
                                <span class="download"><a href="https://drive.google.com/file/d/0B4U4hE0IYrjnQ0Yza2FYQjRrR0k/edit?usp=sharing" target="_blank">Download Final Project Report<img alt="pdf_icon" src="images/save_pdf.png" /></a></span><br>
                                <span class="download"><a href="https://drive.google.com/file/d/0B4U4hE0IYrjnTzVRU0VtRDJhaEE/edit?usp=sharing" target="_blank">Download Final Project Codes<img alt="pdf_icon" src="images/save_pdf.png" /></a></span>
                                <span class="categories"><i class="fa fa-tag"></i>STAT, R, Time Series, ARIMA, Spectral, Predicted Model</span>
                            </div>

                            <div class="link-box">
                                <a href="https://github.com/Xiaodan/Time-Series-Analysis-Project" target="_blank">Details</a>
                                <a class="popup-modal-dismiss">Close</a>
                            </div>

                        </div><!-- modal-11 End -->

                        <div id="modal-12" class="popup-modal mfp-hide">

                            <div class="description-box">
                                <h4>1985 Wages Data Analysis</h4>
                                <p>The data we used were collected from the Current Population Survey (CPS) in the year of 1985, which provide supplement census information between census years.I mainly worked on checking whether an individual with higher wages was more likely to be in a management position or have a professional occupation than other who were not in these occupations.</p>
                                <span class="download"><a href="https://drive.google.com/file/d/0B4U4hE0IYrjnaDJ6Y29NNExkSzQ/edit?usp=sharing" target="_blank">Download Final Project Report<img alt="pdf_icon" src="images/save_pdf.png" /></a></span><br>
                                <span class="download"><a href="https://drive.google.com/file/d/0B4U4hE0IYrjnRWRtT0RiS09uWUU/edit?usp=sharing" target="_blank">Download Final Project Codes<img alt="pdf_icon" src="images/save_pdf.png" /></a></span><br>
                                <span class="download"><a href="https://drive.google.com/file/d/0B4U4hE0IYrjnOHJ5dzNQTzNBU2s/edit?usp=sharing" target="_blank">Download Final Project Data<img alt="pdf_icon" src="images/save_pdf.png" /></a></span>
                                <span class="categories"><i class="fa fa-tag"></i>STAT, SAS, Logistic Regression, AIC</span>
                            </div>

                            <div class="link-box">
                                <a class="popup-modal-dismiss">Close</a>
                            </div>

                        </div><!-- modal-12 End -->

                        <div id="modal-13" class="popup-modal mfp-hide">

                            <div class="description-box">
                                <h4>iBook2S</h4>
                                <p>Our project goal was to create a WWW service that offers campus-based book exchange platform. Users enable to trade books according to their requirements and preferences. With the featured <b>Location</b> function, our site could provide both face-to-face deal information/notification and drop-and-pick service for inconsistent deal. With the powerful real-time <b>Bidding System</b> function, buyers could buy books with cheap and reasonable prices. We also added two advanced functions: one is <b>Parsing</b> that we grabbed book information from Amazon.com in order to give users enough references; the other is <b>Ranking System</b> that we gave it several scientific formulas and creative algorithms determined by multiple factors, in order to give the buyers better search services.</p>
                                <span class="categories"><i class="fa fa-tag"></i>CS, Database System, PHP, MySQL, Ranking Function, Bidding</span>
                            </div>

                            <div class="link-box">
                                <a href="https://wiki.cites.illinois.edu/wiki/display/cs411sp12/Xiaodan+Final+Report" target="_blank">Details</a>
                                <a class="popup-modal-dismiss">Close</a>
                            </div>

                        </div><!-- modal-13 End -->

                    </div> <!-- row End -->

                </section> <!-- Portfolio Section End-->


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
