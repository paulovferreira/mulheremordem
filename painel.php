<?php
if (session_status() === PHP_SESSION_NONE) {
    // Verifica se a sessão ainda não foi iniciada
    session_start();
}

include('verifica_login.php');
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Controle de Acesso</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">    
    <link rel="stylesheet" type="text/css" href="css/painel.css">
</head>

<body>

<div class="overlay">        
    Olá, <?php echo $_SESSION['nome'];?>
    <br>
    SEJA BEM VINDO! 
    <br>           
    <?php
        if (isset($_SESSION['perfil']) && $_SESSION['perfil'] === 'ADMIN'):
    ?>                
        <a class="highlight-button" href="cadastro.php">Cadastrar novo usuário</a>
    <?php
        endif;
    ?>

</div>
        
    

<div class="gallery">        
        <div><a href="./videos/video1.php"> <img src="./img/fundo.jpg" alt="Imagem 2">  </a>  </div>
        <div><a href="./videos/video1.php"> <img src="./img/fundo.jpg" alt="Imagem 2">  </a>  </div>
        <div><a href="./videos/video1.php"> <img src="./img/fundo.jpg" alt="Imagem 2">  </a>  </div>
        <div><a href="./videos/video1.php"> <img src="./img/fundo.jpg" alt="Imagem 2">  </a>  </div>
        <div><a href="./videos/video1.php"> <img src="./img/fundo.jpg" alt="Imagem 2">  </a>  </div>
        <div><a href="./videos/video1.php"> <img src="./img/fundo.jpg" alt="Imagem 2">  </a>  </div>
        <div><a href="./videos/video1.php"> <img src="./img/fundo.jpg" alt="Imagem 2">  </a>  </div>
        <div><a href="./videos/video1.php"> <img src="./img/fundo.jpg" alt="Imagem 2">  </a>  </div>
        <div><a href="./videos/video1.php"> <img src="./img/fundo.jpg" alt="Imagem 2">  </a>  </div>
        <div><a href="./videos/video1.php"> <img src="./img/fundo.jpg" alt="Imagem 2">  </a>  </div>
        <div><a href="./videos/video1.php"> <img src="./img/fundo.jpg" alt="Imagem 2">  </a>  </div>
        <div><a href="./videos/video1.php"> <img src="./img/fundo.jpg" alt="Imagem 2">  </a>  </div>
        <div><a href="./videos/video1.php"> <img src="./img/fundo.jpg" alt="Imagem 2">  </a>  </div>
        <div><a href="./videos/video1.php"> <img src="./img/fundo.jpg" alt="Imagem 2">  </a>  </div>
        <div><a href="./videos/video1.php"> <img src="./img/fundo.jpg" alt="Imagem 2">  </a>  </div>
        <div><a href="./videos/video1.php"> <img src="./img/fundo.jpg" alt="Imagem 2">  </a>  </div>        
        <!-- Adicione mais divs com suas imagens aqui -->
        <!-- Certifique-se de substituir "imagem1.jpg", "imagem2.jpg", etc., pelos caminhos corretos das suas imagens -->
    </div>

    



</body>

</html>