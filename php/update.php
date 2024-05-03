<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="../css/cadastrar.css">
</head>
<body>
    <nav>
        <ul>
            <li><strong><a href="../html/index.html">Home</a></strong></li>
            <li><strong><a href="../html/escolha.html">Consultar</a></strong></li>
            <li><strong><a href="../html/atualizar.html">Atualizar</a></strong></li>
            <li><strong><a href="../html/excluir.html">Excluir</a></strong></li>
        </ul>
        <img src="../imgs/Spotify_Logo_RGB_Green.png" alt="Logo do Spotify">
    </nav>
    <?php

        require_once 'conecta.php';
        if($_POST){
            $musica = $_POST['musica']; 
            $artista = $_POST['artista'];
            $album = $_POST['album'];
            $ano_lanc = $_POST['ano_lanc'];
            $duracao = $_POST['duracao'];
            $ID=$_POST['ID'];
            $sql="UPDATE musicas SET musica='$musica', artista='$artista', album='$album', ano_lanc='$ano_lanc', duracao=$duracao WHERE ID={$ID}";
            if($conn->query($sql) === TRUE){
                echo "<script>console.log('Atualizado com Sucesso');</script>";
            }else {
                echo "Erro: ". $conexao->error;
            }

        }
 
    ?>
        <div class="askNew" id="askNew">
        <h3>Atualização Realizado com sucesso!</h3>
        <h3>Deseja atualizar outro cadastro?</h3>
    </div>
    <div class="askNewButton" id="askNewButton">
        <a href="../html/atualizar.html" class="sim">Sim</a>
        <a href="../html/index.html" class="nao">Não</a>
    </div>
</body>
</html>