<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
    <link rel="stylesheet" href="../css/pesquisaUP.css">
</head>
<body>
    <nav>
        <ul>
            <li><strong><a href="../html/index.html">Home</a></strong></li>
            <li><strong><a href="../html/escolha.html">Consultar</a></strong></li>
            <li><strong><a href="cadastrar.html">Cadastrar</a></strong></li>
            <li><strong><a href="excluir.html">Excluir</a></strong></li>
        </ul>
        <img src="../imgs/Spotify_Logo_RGB_Green.png" alt="Logo do Spotify">
    </nav>

<?php

require_once 'conecta.php';

$musica = $_POST['pesquisa']; 



$sql = ("SELECT * FROM musicas where musica = '$musica'") or die( mysqli_error($conn));
$result = $conn->query($sql);
if($result->num_rows > 0){
    $dados = $result->fetch_assoc();
    $musica = $dados['musica'];
    $artista = $dados['artista'];
    $album = $dados['album'];
    $ano_lanc = $dados['ano_lanc'];
    $duracao = $dados['duracao'];
    $ID = $dados['ID'];
    
}

?>


<form action="update.php" method="post">
    <table>
        
        <label for="musica">Música</label>
        <input type="text" name="musica" placeholder="Música" value="<?php echo $musica;?>"/>

        <label for="artista">Artista</label>
        <input type="text" name="artista" placeholder="Artista" value="<?php echo $artista;?>"/>

        <label for="album">Álbum</label>
        <input type="text" name="album" placeholder="Álbum" value="<?php echo $album;?>"/>

        <label for="ano_lanc">Ano de Lançamento</label>
        <input type="number" name="ano_lanc" placeholder="Ano_lançamento" value="<?php echo $ano_lanc;?>"/>

        <label for="duracao">Duração</label>
        <input type="text" name="duracao" placeholder="Duração" value="<?php echo $duracao;?>"/>

        <label for="ID">ID</label>
        <input type="text" name="ID"  value="<?php echo $ID;?>"/>

        <button type="submit"><strong>Salvar Alterações</strong></button>
    </form>
</body>
</html>



   

    




    
   