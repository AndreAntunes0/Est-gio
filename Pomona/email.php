<?php 

$dsn = "mysql:host=localhost;dbname=fct";
$user = "root";
$passwd = "";

$conexao = new PDO($dsn, $user, $passwd);

$sql = "SELECT * FROM Pomona";
$query = $conexao->query($sql);
$alunos = $query->fetchAll(PDO::FETCH_ASSOC);


if (isset($_POST["btnEnviar"])){

    $Nome = $_POST["Nome"];
    $Telefone = $_POST["Telefone"];
    $Email = $_POST["Email"];
    $Mensagem  = $_POST["Mensagem"];

    $insert = "INSERT INTO Pomona(Nome,Telefone,Email,Mensagem) VALUES ('" . $Nome . "','" . $Telefone . "','" . $Email . "','" . $Mensagem . "')";

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
    <title>jackpiro</title>
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
    </head>
    <body>

        <div id="contact" class="contact">
            <div class="container">
    
                <div class="row">
    
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
    </body>
</html>