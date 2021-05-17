<?php 

$dsn = "mysql:host=localhost;dbname=estagio";
$user = "root";
$passwd = "";

$conexao = new PDO($dsn, $user, $passwd);

$sql = "SELECT * FROM piri";
$query = $conexao->query($sql);
$alunos = $query->fetchAll(PDO::FETCH_ASSOC);


if (isset($_POST["btnEnviar"])){

    $Nome = $_POST["Nome"];
    $Telefone = $_POST["Telefone"];
    $Email = $_POST["Email"];
    $Mensagem  = $_POST["Mensagem"];

    $insert = "INSERT INTO piri(Nome,Telefone,Email,Mensagem) VALUES ('" . $Nome . "','" . $Telefone . "','" . $Email . "','" . $Mensagem . "')";

    $conexao->exec($insert);
}

?>

<!DOCTYPE html>
<html>
    <head>
        <!-- basic -->
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Pomona Piri Piri</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/email/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/email/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/email/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/email/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->






        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Vanilla Bootstrap v4.2.1 Theme</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/templatemo-main.css">
        <link rel="stylesheet" href="css/owl-carousel.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>






        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        




    </head>
<!--
Vanilla Template
https://templatemo.com/tm-526-vanilla
-->
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="nav3"> 
                <li class="nav-item">
                    <img src="img/logo.png" class="logo">
                </li>       
                <li class="nav-item" id="nav4">
                    <a class="nav-link" style="color: black;">Pomona Piri Piri</a>
                </li> 
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
                     
              <li class="nav-item" id="nav2">
                    <a class="nav-link" href="#" style="color: black;">Inicio</a>
              </li>
              <li class="nav-item" id="nav2">
                <a class="nav-link" href="#portfolio" style="color: black;">Produtos</a>
              </li>
              <li class="nav-item nav" id="nav2">
              <a class="nav-link" href="#contact" style="color: black;"><span>Encomendar</span></a>
              </li>
              <li class="nav-item" id="nav2">
                <a class="nav-link" aria-current="page" href="#services" style="color: black;">Sobre Nós</a>
              </li>
              <li class="nav-item" id="nav2">
                <a class="nav-link" href="#contact-us" style="color: black;">Contactos</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>

      

    <div class="parallax-content baner-content baner-content2">
        <div class="container">
            <div class="first-content">
                <h1>Pomona Piri Piri</h1>
                <span id="bold">Uma prenda diferente, única,
                    <br>saborosa e picante</span>
                <div class="primary-button">
                    <a href="#portfolio">Descubra mais</a>
                </div>
            </div>
        </div>
        
    </div>

    <div class="service-content projects-content" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="left-text">
                        <h4 class="font" align="center">Produtos</h4>
                        <p>
                        </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div id="owl-testimonials" class="owl-carousel owl-theme">
                    <div class="item">
                            <div class="testimonials-item">
                                <a href="img/3.jpg" data-lightbox="image-1"><img src="img/3.jpg" alt=""></a>
                                <div class="text-content">
                                    <h4>Frasco 50g
                                        <br>Picante suave
                                    </h4>
                                    <span>00.00€</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/4.jpg" data-lightbox="image-1"><img src="img/4.jpg" alt=""></a>
                                <div class="text-content">
                                    <h4>Frasco 50g
                                        <br>Picante médio
                                    </h4>
                                    <span>00.00€</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/5.jpg" data-lightbox="image-1"><img src="img/5.jpg" alt=""></a>
                                <div class="text-content">
                                    <h4>Frasco 50g
                                        <br>Picante intenso
                                    </h4>
                                    <span>00.00€</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/10.jpg"><img src="img/9.jpg" class="produto"></a>
                                <div class="text-content">
                                    <h4>Frasco 180g<br>
                                    Picante Intenso
                                    </h4>
                                    <span>00,00€</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/8.jpg" data-lightbox="image-1"><img src="img/8.jpg" alt=""></a>
                                <div class="text-content">
                                    <h4>Frasco 500g
                                        <br>Picante Intenso
                                    </h4>
                                    <span>00.00€</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


    <div id="contact" class="contact service-content">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <div class="left-text">
                        <h4 class="font" align="center">Encomende já!</h4>
                        <p>
                        </p>
                    </div>
                </div>
                    <div class="col-md-12">
                        <form class="contact_bg" method="post">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 padd5">
                                    <input class="contactus" placeholder="Nome" type="text" name="Nome">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <input class="contactus" placeholder="Telefone" type="text" name="Telefone">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <input class="contactus" placeholder="Email" type="text" name="Email">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="textarea" placeholder="Mensagem" type="text" name="Mensagem"></textarea>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input type="submit" value="Enviar" name="btnEnviar" class="send"/></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
    
            </div>
        </div>


    <div class="service-content" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="left-text">
                        <h4 class="font" align="center">Sobre o Pomona Piri Piri</h4>
                        <p align="center"> O Pomona é um molho de piri-piri caseiro e saboroso.<br>
                            Não tem conservantes artificiais, mas a alquimia da combinação certa dos ingredientes.<br>
                            É um picante que não tira o sabor da comida, potencia-o!</p>
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="service-item">
                                <h4 class="font ">3 intensidades de picante</h4>
                                <div class="line-dec"></div>
                                <p class="padd2">suave
                                    <br>médio
                                    <br>intenso
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-item">
                                <h4 class="font">3 tamanhos</h4>
                                <div class="line-dec"></div>
                                <p class="padd2">50g
                                    <br>180g
                                    <br>500g
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-item">
                                <h4 class="font">Saudável e Vegano</h4>
                                <div class="line-dec"></div>
                                <p>Um molho picante saboroso, caseiro, sem conservantes 
                                    artificiais e sem produtos de origem animal.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>
    <div class="service-content" id="services">
        <div class="container">
            <div class="row"> 
                <div class="col-md-12">
                    <div class="service-item">
                        <h4 class="font">Um pouco de historia</h4>
                        <div class="line-dec"></div>
                        <p>Em Setembro de 2017 dei um passo que ansiava dar há 20 anos,
                            deixei um trabalho de secretária, onde me sentia definhar de dia para dia.

                                <br>
                                    
                                
 
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item">
                        <h4></h4>
                        <div class="line-dec"></div>
                        <p align="justify" class="padd4">Aprendi a caminhar com os olhos do coração, 
                            vendo apenas o horizonte de cada passo, e quando dei por mim... 
                            estava a voar! Que é como quem diz, a Viver!
                                <br>
                                    
                                
 
                        </p>
                    </div>
                    <div class="service-item">
                        <h4></h4>
                        <div class="line-dec"></div>
                        <p align="justify" class="padd4"> Uma receita antiga, vinda de África, 
                            revelou-se uma oportunidade para ser a criadora do meu sustento.
                            A deusa romana da abundância, dos pomares e frutos, Pomona, 
                            foi a inspiração para o nome.
                                    
                                    
 
                        </p>
                    </div>
                    <div class="service-item">
                        <h4></h4>
                        <div class="line-dec"></div>
                        <p align="justify" class="padd3 padd4"> Era a responsável pela mágica transformação das flores em fruto, 
                            e em mim representa o florescimento da criatividade e liberdade,
                            a materialização da minha emancipação.
                                      
                                    
                                    
 
                        </p>
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <div class="left-text">

                        <p>
                            <img src="img/6.jpg">
                            </p>
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <div class="service-content" id="contact-us">
        <div class="container">
            <div class="row">  
                <div class="col-md-6">
                    <div class="service-item">
                        <h4>Onde comprar</h4>
                        <div class="line-dec"></div>
                        <p> 
                            <a href="https://www.lxrural.com/" target="_blank">LX FACTORY</a><br>
                            <br>Rua Rodrigues Faria, 103
                            <br>1300 - 501 Lisboa
                            
                        </p>
                                    
                    </div>
                    <div class="service-item">
                        <h4>Contactos</h4>
                        <div class="line-dec"></div>
                        <p> 
                        Email: pomona.piripiri@gmail.com

                            
                        </p>
                        <div class="redes">
                        <ul>
                            <li><a href="https://www.facebook.com/piripireira/" target="blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                                    
                </div>

                                    

                </div>
                
                <div class="col-md-6">
                    <div class="left-text">
                       

                        
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3113.641903277231!2d-9.181048885013139!3d38.70306917960117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1934af7d568473%3A0xf6d679eb9d34b1ce!2sLxMarket!5e0!3m2!1spt-PT!2spt!4v1618762807787!5m2!1spt-PT!2spt" width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
        
    



   

    


    

    <footer>
        <div class="container"  id="home">
            <div class="row">
                <div class="col-md-12">
                    <div class="primary-button">
                        <a href="#">Voltar ao Inicio</a>
                    </div>
                    <p>
 
                    <img src="img/selo.png" class="selo">

                    </p>
            
                </div>
            </div>
        </div>
    </footer>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script>
        function openCity(cityName) {
            var i;
            var x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
               x[i].style.display = "none";  
            }
            document.getElementById(cityName).style.display = "block";  
        }
    </script>

    <script>
        $(document).ready(function(){
          // Add smooth scrolling to all links
          $(".fixed-side-navbar a, .primary-button a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
              // Prevent default anchor click behavior
              event.preventDefault();

              // Store hash
              var hash = this.hash;

              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 800, function(){
           
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              });
            } // End if
          });
        });
    </script>

</body>
</html>