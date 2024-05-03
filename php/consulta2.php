<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/consulta2.css">
</head>
<body>
    <nav>
        <ul>
        <li><strong><a href="../html/index.html">Home</a></strong></li>
            <li><strong><a href="../html/escolha.html">Consultar</a></strong></li>
            <li><strong><a href="cadastrar.html">Cadastrar</a></strong></li>
            <li><strong><a href="atualizar.html">Atualizar</a></strong></li>
            <li><strong><a href="excluir.html">Excluir</a></strong></li>
        </ul>
        <img src="../imgs/Spotify_Logo_RGB_Green.png" alt="Logo do Spotify">
    </nav>
    <table>
        <thead>
          <tr>
            <th scope="col">Musica</th>
            <th scope="col">Artista</th>
            <th scope="col">Álbum</th>
            <th scope="col">Ano de Lançamento</th>
            <th scope="col">Duração</th>
          </tr>
        </thead>
    <tbody>
    <?php
        $musica = $_GET['musica'];
        $class = 'linhaTabela';
        $id = 'linhaTabela';
        require_once 'conecta.php';

        if(isset($_GET['musica'])) {
            $musica = $_GET['musica'];
            // Query SQL com filtro pelo valor da música
            $sql = mysqli_query($conn,"SELECT * FROM musicas WHERE musica LIKE '%$musica%'") or die(mysqli_error($conn));
        } else {
            echo "<p>Música não encontrada</p>";
        }

        while ($row = mysqli_fetch_assoc($sql)){
            echo "<tr class=".$class." id=".$id.">
            <td>".ucwords($row['musica'])."</td>
            <td>".ucwords($row['artista'])."</td>
            <td>".ucwords($row['album'])."</td>
            <td>".ucwords($row['ano_lanc'])."</td>
            <td>".ucwords($row['duracao'])."</td>
            </tr>";
        }
    ?>
    </tbody>
    </table>

</body>
</html>