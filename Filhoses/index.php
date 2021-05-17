<?php 

$dsn = "mysql:host=localhost;dbname=estagio";
$user = "root";
$passwd = "";

$conexao = new PDO($dsn, $user, $passwd);

$sql = "SELECT * FROM filhoses";
$query = $conexao->query($sql);
$alunos = $query->fetchAll(PDO::FETCH_ASSOC);


if (isset($_POST["btnEnviar"])){

    $Nome = $_POST["Nome"];
    $Telefone = $_POST["Telefone"];
    $Email = $_POST["Email"];
    $Mensagem  = $_POST["Mensagem"];
    $Data = $_POST["Data"];

    $insert = "INSERT INTO Filhoses(Nome,Telefone,Email,Produtos,Data) VALUES ('" . $Nome . "','" . $Telefone . "','" . $Email . "','" . $Mensagem . "','" . $Data . "')";

    $conexao->exec($insert);
}

?>

<html>
    <head>

  <!-- basic -->
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Filhoses de Loures</title>
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
    

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="nav2">
                <li class="nav-item">
                    <img src="img/logo.jpg" class="logo">
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 dir" id="nav3">
              <li class="nav-item">
                <a class="nav-link" href="#">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portfolio">Produtos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#services">Sobre Nós</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#our-story">Encomendar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#home">Contactos</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="parallax-content baner-content">
        <div class="container">
            <div class="first-content">
                <h1>Filhoses de Loures</h1>
                <span><em>Doce tradição, um sabor inesquecível!</em></span><br>
                
                <div class="primary-button mar">
                    <a href="#portfolio">Descubra mais</a>
                </div>
            </div>
        </div>
        
    </div>


    <div class="service-content projects-content color" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="owl-testimonials" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="testimonials-item">
                                <a><img src="img/29.jpg" class="produto"></a>
                                <div class="text-content produto2">
                                    <h4>Filhoses de Loures
                                        
                                    </h4>
                                    <span></span>
                                    <div class="primary-button-2">
                                        <a href="img/Ingredientes filhoses.png" data-lightbox="image-1">Ingredientes</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <a><img src="img/23.jpg" alt=""></a>
                                <div class="text-content">
                                    <h4>Caixa 500g
                                    
                                    </h4>
                                    <span>00,00€</span>
                                    <div class="primary-button-2">
                                        <a href="#our-story">Encomende já</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <a><img src="img/20.jpg" alt=""></a>
                                <div class="text-content">
                                    <h4>Caixa 1kg
                                    
                                    </h4>
                                    <span>00,00€</span>
                                    <div class="primary-button-2">
                                    <a href="#our-story">Encomende já</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

            </div>
        </div>
    </div>
   

    <div class="service-content projects-content color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="left-text">
                        <h4 class="font" align="center">Outros Produtos</h4>
                        <p>
                        </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div id="owl-testimonials2" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="testimonials-item">
                                <a><img src="img/17.jpg" alt=""></a>
                                <div class="text-content">
                                    <h4>Tarte de Amêndoa
                                    
                                    </h4>
                                    <span>20,00€</span>
                                    <div class="primary-button-2">
                                        <a href="img/Ingredientes tarte.png" data-lightbox="image-1">Ingredientes</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    

    <div class="service-content color2" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="left-text">
                        <h4>Sobre estas deliciosas filhoses</h4>
                        <div class="line-dec"></div>
                        <p> As Filhoses de Loures são um doce regional 
                            muito antigo e uma tradição ainda mais 
                            vincada no Carnaval, especialmente, 
                            no Carnaval Saloio. 
                            
                            </p>
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="left-text"></div>
                        <p><img src="img/10.jpg">
                            </p>

                    </div>
                </div>        
            </div>
        </div>
    </div>
    <div class="service-content color2" id="services">
        <div class="container">
            <div class="row">  
                <div class="col-md-6">
                    <div class="service-item padd">
                        <h4></h4>

                        <p>Dizem os mais antigos que já os avós 
                            falavam dos foliões que animavam as ruas 
                            de Loures.
                            <br>Para presentear esta animação, o 
                            povo oferecia o que tinha aos carnavalescos,
                            sem nunca faltarem com as filhoses.
                                
                                    
                                
 
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-text">
                        
                        <p>
                            <img src="img/12.jpg">
                            </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-text">
                        
                        <p>
                            <img src="img/14.jpg">
                            </p>
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item padd2">
                        <h4></h4>

                        <p>
                            Era uma época de pouca abundância, os ingredientes 
                            da receita eram simples e provinham de colheita própria.
                            <br>Estendidas bem finas para que rendessem e durassem,
                            eram fritas, para depois serem mergulhadas numa
                            calda deliciosa que as tornam únicas... 
                            
                                    
                                
 
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item padd3">
                        <p> Esta singularidade fez-nos recuperar uma 
                            receita tradicional dessa época, recorrendo
                             aos mesmos produtos e mantendo o modo de
                              produção artesanal.
                              <br><a class="bold">Fizemos renascer as Filhoses de Loures!   </a>
                                    
                                    
 
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-text">

                        
                        <p><br>
                            <img src="img/1.jpg">
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
    <div id="our-story" class="service-content color3">
        <div id="contact" class="contact">
            <div class="container" >
    
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
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="contactus" placeholder="Nome" type="text" name="Nome">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <input class="contactus" placeholder="Telefone" type="text" name="Telefone">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <input class="contactus" placeholder="Email" type="text" name="Email">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="textarea" placeholder="Produtos" type="text" name="Mensagem"></textarea>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="contactus" placeholder="Data de Entrega" type="text" name="Data">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input type="submit" value="Enviar" name="btnEnviar" class="send" /></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
    
            </div>
        </div>
    </div>

    <div class="service-content color4" id="home">
        <div class="container">
            <div class="row">  
                <div class="col-md-6">
                    <div class="service-item">
                        <h4>Onde estamos</h4>
                        <div class="line-dec"></div>
                        <p> 
                            <br>Rua 25 de Abril n.4, Loja B
                            <br>Loures, 2670-769 Loures
                            
                        </p>
                                    
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item">
                        <h4>Contactos</h4>
                        <div class="line-dec"></div>
                        <p> 
                            <br>Telemóvel: 916 224 048
                            <br>Email: filhosesdeloures@gmail.com
                            
                        </p>
                                    
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-text">
                        <h4></h4>

                        <p><br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1554.080566999131!2d-9.164381979007462!3d38.82877042272129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd192d1973d07b8f%3A0x223a5f1cbb114d01!2sR.%2025%20de%20Abril%204%20Loja%20B%2C%202670-482%20Loures!5e0!3m2!1spt-PT!2spt!4v1618784403155!5m2!1spt-PT!2spt" width="555" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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





   

    


    

    <footer>
        <div class="container" id="contact-us">
            <div class="row">
                <div class="col-md-12">
                    <div class="primary-button">
                        <a href="#">Voltar ao Inicio</a>
                    </div>
                    <p>
                        
                    <img src="img/selo.png" class="selo">
                    
            
            		
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