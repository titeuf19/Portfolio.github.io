<?php
require_once('language.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon PORTFOLIO</title>
    <link rel="icon" href="img/cutmypic.ico" >
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <!-- main style -->
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
        #ytd_link
{
    position: relative;
    top: 50px;
    display: block;
    width: 166px;
    clear: both;
    color: white;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-weight: bold;
    text-decoration: none;
    text-align: center;
    padding: 6px 14px 10px 14px;
    margin: 0 auto;
    margin-bottom:50px;
    background-color: #ada074;
    border: 1px solid #ada074;
    border-radius: 2px;
}
.section .container .disply-table .table-cell .read-more{
   background-color: white;
  width:183px;
  height:47px;
  margin:100px auto;
  line-height:47px;
  border:1px solid white;
  text-transform:uppercase;
  color: #425bb5;
  display:block;
  cursor:pointer;
  font-size:14px;
  letter-spacing:1px;
  background:none;
  -webkit-transition: all 0.6s ease-in;
    -moz-transition: all 0.6s ease-in;
    -ms-transition: all 0.6s ease-in;
    -o-transition: all 0.6s ease-in;
    transition: all 0.6s ease-in;
}
.section .container .disply-table .table-cell .read-more:hover{
  color:white;
  background: #425bb5;
  border:1px solid #425bb5;
}
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- http://localhost/portfolio/index.php?language=en# -->
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">

            <div class="preloader" aria-busy="true" aria-label="Loading, please wait." role="progressbar">
            </div>

        </div>
    </div>
    <!-- ./Preloader -->
    
    <!-- header -->
    <header class="navbar-fixed-top">
        <nav class="navbar-fixed-top">
            <ul>
                <li><a href="#home"><?= $lang[$_SESSION['language']]['nav1'] ?></a></li>
                <li><a href="#about"><?= $lang[$_SESSION['language']]['nav2'] ?></a></li>
                <li><a href="#experience"><?= $lang[$_SESSION['language']]['nav3'] ?></a></li>
                <li><a href="#projects"><?= $lang[$_SESSION['language']]['nav4'] ?></a></li>
                <li><a href="#contact"><?= $lang[$_SESSION['language']]['nav5'] ?></a></li>




                <!-- Single button -->
<li>
  <div class="row">
    <div class="span12 text-center" >
      <div class="btn-group animated">
        <button type="button" class="btn btn-primary">Traduction</button>
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="caret"></span>
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="http://localhost/portfolio/index.php?language=en#">en</a></li>
          <li><a href="http://localhost/portfolio/index.php?language=fr#">fr</a></li>
        </ul>
      </div><!-- /btn-group -->
      </div><!-- /btn-group dropup -->
    </div>      
</li>


            </ul>
        </nav>
    </header>
    <!-- ./header -->
    
    <!-- home -->
    <div class="section" id="home" data-stellar-background-ratio="0.5" style="background-repeat: no-repeat; background-size:100%">
        <div class="container">
            <div class="disply-table">
                <div class="table-cell" data-aos="fade-up" data-aos-delay="0">
                    <h4>Ayoub Elmarzak</h4>
                    <h1><?= $lang[$_SESSION['language']]['greeting'] ?><br/></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- ./home -->
    
    <!-- about -->
    <div class="section" id="about">
        <div class="container">
            <div class="col-md-6" data-aos="fade-up">
                <h1 class="size-50"><?= $lang[$_SESSION['language']]['service'] ?></h1>
                <div class="h-50"></div>
                <p><?= $lang[$_SESSION['language']]['aboutme'] ?> </p>
                <div class="h-50"></div> 
                <div class="h-50"></div>
            </div>
            <div class="col-md-6 about-img-div">
                <img src="img/ok1.JPG" width="500" class="img-responsive" alt="" align="right" data-aos="fade-right" data-aos-delay="0" />
            </div>
        </div>
    </div>
    <!-- ./about -->
    
    <!-- experience  -->
    <div class="section" id="experience">
        <div class="container">
            <div class="col-md-12">
                <h1 class="size-50"><?= $lang[$_SESSION['language']]['formt'] ?></h1>
                <div class="h-50"></div>
            </div>
            <div class="col-md-12">
                <ul class="timeline">
                    <li class="timeline-event" data-aos="fade-up">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail"><?= $lang[$_SESSION['language']]['date'] ?></p>
                            <h3>Youcode, Youssoufia, Maroc</h3>
                            <h4 style="color:black"><?= $lang[$_SESSION['language']]['formt1'] ?> </h4>
                            <p></p>
                        </div>
                    </li>
                    <li class="timeline-event" data-aos="fade-up" data-aos-delay=".2">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail"><?= $lang[$_SESSION['language']]['date2'] ?></p>
                            <h3>IPSM, Mohammedia, Maroc</h3>
                            <h4 style="color:black"><?= $lang[$_SESSION['language']]['formt2'] ?></h4>
                            <p><strong>Gestion des entreprises agricoles</strong></p>
                        </div>
                    </li>
                       <li class="timeline-event" data-aos="fade-up" data-aos-delay=".4">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail">2014 - 2015 </p>
                            <h3>Youssoufia, Maroc </h3>
                            <h4 style="color:black"><?= $lang[$_SESSION['language']]['formt3'] ?> </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ./experience -->
    
    <!-- projects -->
    <div class="section" id="projects">
        <div class="container">
            <div class="col-md-12">
                <h1 class="size-50"><?= $lang[$_SESSION['language']]['projet'] ?></h1> 
            </div>
            <!-- main container -->
            <div class="main-container portfolio-inner clearfix">
                <!-- portfolio div -->
                <div class="portfolio-div">
                    <div class="portfolio">
                        <!-- portfolio_filter -->
                        <div class="categories-grid wow fadeInLeft">
                            <nav class="categories">
                                <ul class="portfolio_filter">
                                    <li><a href="" class="active" data-filter="*"><?= $lang[$_SESSION['language']]['nav6'] ?></a></li>
                                    <li><a href="" data-filter=".cv"><?= $lang[$_SESSION['language']]['nav7'] ?></a></li>
                                    <li><a href="" data-filter=".site"><?= $lang[$_SESSION['language']]['nav8'] ?></a></li>
                                    <li><a href="" data-filter=".css"><?= $lang[$_SESSION['language']]['nav9'] ?></a></li>
                                    <li><a href="" data-filter=".js"><?= $lang[$_SESSION['language']]['nav10'] ?></a></li>
                                    <li><a href="" data-filter=".CAPGEMINI"><?= $lang[$_SESSION['language']]['nav11'] ?></a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- portfolio_filter -->
                        
                        <!-- portfolio_container -->
                        <div class="no-padding portfolio_container clearfix" data-aos="fade-up"> 


                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 site">
                                <a href="YoucodeSITE/index.html" class="portfolio_item" target="_blank"> <img src="img/portfolio/Youcode.png" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Refonte Site Web</span> <em>YOUCODE, Youssoufia, Maroc</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                          <div class="col-md-4 col-sm-6">
                                <a href="#animatedModal" class="portfolio_item" target="_blank"> <img src="img/portfolio/011.png" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Projet CAPGEMINI</span> <em>CAPGEMINI, Marrakech, Maroc</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                           <div class="col-md-4 col-sm-6 css">
                                <a href="css1/css/index.html" class="portfolio_item" target="_blank"> <img src="img/portfolio/css.png" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Atelier CSS</span> <em>YOUCODE, Youssoufia, Maroc</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 css">
                                <a href="css1/html/index.html" class="portfolio_item" target="_blank"> <img src="img/portfolio/html.png" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Atelier HTML-CSS</span> <em>YOUCODE, Youssoufia, Maroc</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 css">
                                <a href="css1/flex/index.html" class="portfolio_item" target="_blank"> <img src="img/portfolio/flex.png" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Atelier FlexBox</span> <em>YOUCODE, Youssoufia, Maroc</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <div class="col-md-4 col-sm-6 css">
                                <a href="css1/grid/index.html" class="portfolio_item" target="_blank"> <img src="img/portfolio/grid.png" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Atelier Grid Css</span> <em>YOUCODE, Youssoufia, Maroc</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->

                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 js">
                                <a href="js1/drum/index.html" class="portfolio_item" target="_blank"> <img src="img/portfolio/drum.png" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Projet Drum Kit</span> <em>YOUCODE, Youssoufia, Maroc</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 js">
                                <a href="js1/clock/index.html" class="portfolio_item" target="_blank"> <img src="img/portfolio/clock.png" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Projet Clock</span> <em>YOUCODE, Youssoufia, Maroc</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 js">
                                <a href="js1/var/index.html" class="portfolio_item" target="_blank"> <img src="img/portfolio/var.png" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Projet Variables</span> <em>YOUCODE, Youssoufia, Maroc</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->

                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 js">
                                <a href="js1/count/index.html" class="portfolio_item" target="_blank"> <img src="img/portfolio/count.png" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Projet Count</span> <em>YOUCODE, Youssoufia, Maroc</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->

                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 js">
                                <a href="js1/mipro/index.html" class="portfolio_item" target="_blank"> <img src="img/portfolio/mipro.png" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Mini Projet</span> <em>YOUCODE, Youssoufia, Maroc</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                        </div>
                        <!-- end portfolio_container -->
                    </div>
                    <!-- portfolio -->
                </div>
                <!-- end portfolio div -->
            </div>
            <!-- end main container -->
        </div>
    </div>
    <!-- ./projects -->
    
    <!-- contact -->
    <div class="section" id="contact">
        <div class="container">
            <div class="col-md-12">
                <h1 class="size-50"><?= $lang[$_SESSION['language']]['contact'] ?></h1>
                <div class="h-50"></div>
            </div>
            <div class="col-md-4" data-aos="fade-up">

                <h3><?= $lang[$_SESSION['language']]['phone'] ?></h3>
                <p>+212 767 871 095</p>
                <h3>Email</h3>
                <p>a.elmarzak96@gmail.com </p>

                <h3><?= $lang[$_SESSION['language']]['media'] ?></h3>

                <ul class="social">
                    <li><a href="https://www.facebook.com/ayoub.elmarzak.18" target="_blank"><i class="ion-social-facebook" ></i></a></li>
                    <li><a href="https://www.instagram.com/titeuf.18/" target="_blank"><i class="ion-social-instagram"></i></a></li>
                </ul>
                <div class="clearfix"></div>
                <div class="h-50"></div>
            </div>
            <div class="col-md-8" data-aos="fade-up">
                <form action="connexion.php" class="contact-bg"  name="contact" method="post">
                    <input type="text" name="name" class="form-control" placeholder="Votre Nom" />
                    <input type="email" name="email" class="form-control" placeholder="Votre E-mail" />
                    <input type="text" name="phone" class="form-control" placeholder="Numéro de Téléphone" />
                    <textarea name="message" class="form-control" placeholder="Votre Message" style="height:120px"></textarea>
                    <button id="submit" type="submit" name="submit" class="btn btn-glance"><?= $lang[$_SESSION['language']]['send'] ?></button>
                    <div id="success">
                        <p class="green textcenter"> Your message was sent successfully! I will be in touch as soon as I can. </p>
                    </div>
                    <div id="error">
                        <p> Something went wrong, try refreshing and submitting the form again. </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ./contact -->

    <!--DEMO01-->
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!--  plugins  -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>

    <!--  main script  -->
    <script src="js/custom.js"></script>
</body>

</html>