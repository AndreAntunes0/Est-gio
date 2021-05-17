<?php 

$dsn = "mysql:host=localhost;dbname=estagio";
$user = "root";
$passwd = "";
 
$conexao = new PDO($dsn, $user, $passwd);

 
    $sql = "SELECT * FROM piri";
    $query = $conexao->query($sql);
    $jogos = $query->fetchAll(PDO::FETCH_ASSOC);
?>
 
<!DOCTYPE html>
    <html>
    <body>
    <div class="container">
        <table class="w-50 mr-auto ml-auto" border="solid">
                
                <thead>
                    <tr>
                        <th>Lista de Encomendas por clientes</th>
                    </tr>
                    
 
                    
                </thead>    
 
                <tbody>

                    <?php foreach ($jogos as $jogo) { ?>
                            <tr>
                                <td>
                                    <?php echo $jogo["Nome"]; ?>       
                                </td>
                                <td>  
                                <a href="visualizar2.php?Nome=<?php echo $jogo["Nome"];?>">
                                <button type="Button" class="btn btn-dark"> Visualizar </button>
                                </a>
                                </td>   
                            </tr>
                    
                    <?php } ?>
                    
                </tbody>
                
            </table>      
                
                    </div>
                    <br>
                <div class="primary">
                    <a href="login.php">Terminar sessão</a>
                </div> 

    </body>
    </html> 