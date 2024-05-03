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
            <li><strong><a href="#">Atualizar</a></strong></li>
            <li><strong><a href="../html/excluir.html">Excluior</a></strong></li>
        </ul>
        <img src="../imgs/Spotify_Logo_RGB_Green.png" alt="Logo do Spotify">
    </nav>
    <?php
        require_once 'conecta.php';

        $musica = strtolower($_POST['musica']); 
        $artista = strtolower($_POST['artista']);
        $album = strtolower($_POST['album']);
        $ano_lanc = strtolower($_POST['ano_lanc']);
        $duracao = strtolower($_POST['duracao']);

        $sql = "INSERT INTO musicas (musica, artista, album, ano_lanc, duracao) 
        VALUES ('$musica', '$artista', '$album', '$ano_lanc', '$duracao')";
            if ($conn->query($sql) === TRUE) {
                echo "<script>console.log('Novo cadastro criado com sucesso.');</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        //$conn->close();
            
    ?>
    <div class="askNew" id="askNew">
        <h3>Cadastro Realizado com sucesso!</h3>
        <h3>Deseja realizar outro cadastro?</h3>
    </div>
    <div class="askNewButton" id="askNewButton">
        <a href="../html/cadastrar.html" class="sim">Sim</a>
        <a href="../html/index.html" class="nao">Não</a>
    </div>
</body>
</html>