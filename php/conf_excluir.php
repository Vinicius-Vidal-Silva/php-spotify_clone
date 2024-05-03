<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/excluir.css">
</head>
<body>
    <nav>
        <ul>
            <li><strong><a href="../html/index.html">Home</a></strong></li>
            <li><strong><a href="../html/escolha.html">Consultar</a></strong></li>
            <li><strong><a href="cadastrar.html">Cadastrar</a></strong></li>
            <li><strong><a href="atualizar.html">Atualizar</a></strong></li>
        </ul>
        <img src="../imgs/Spotify_Logo_RGB_Green.png" alt="Logo do Spotify">
    </nav>
    
    <h2>Tem certeza que deseja excluir a música?</h2>
    <?php
        if($_POST){
            $exc_musica = $_POST['exc_musica'];
            //echo $exc_musica ;
        }
        
    ?>
    <form action="excluir.php" method="post">
        <input type="text" name="exc_musica" value='<?php echo $exc_musica;?>'/>
        <button type="submit">Excluir</button>
    </form>

</body>
</html>