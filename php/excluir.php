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
            <li><strong><a href="index.html">Home</a></strong></li>
            <li><strong><a href="../html/escolha.html">Consultar</a></strong></li>
            <li><strong><a href="../html/atualizar.html">Atualizar</a></strong></li>
            <li><strong><a href="../html/excluir.html">Excluir</a></strong></li>
        </ul>
        <img src="../imgs/Spotify_Logo_RGB_Green.png" alt="Logo do Spotify">
    </nav>
    <?php
        require_once 'conecta.php';

        if($_POST){
            $exc_musica = $_POST['exc_musica'];
            //$exc_musica_escaped = mysqli_real_escape_string($conn, $exc_musica);
            //echo $exc_musica;
            $sql = "DELETE FROM musicas WHERE musica = '{$exc_musica}'";

            
            
            if($conn->query($sql) === TRUE) {
                echo "<script>console.log('Excluído com Sucesso');</script>";
                } else {
                echo "Erro: " . $conn->error;
                }
            // $conn->close();
        
        }

    ?>
    <div class="askNew" id="askNew">
        <h3>Música excluida com sucesso!</h3>
        <h3>Deseja excluior outra música?</h3>
    </div>
    <div class="askNewButton" id="askNewButton">
        <a href="../html/excluir.html" class="sim">Sim</a>
        <a href="../html/index.html" class="nao">Não</a>
    </div>
</body>
</html>