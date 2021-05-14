<div class="form-group">
    <a href="?page=albums" class="btn btn-primary mt-2 ml-2">Voltar Para o Álbun <?=$_GET['album'];?></a>
</div>

<h1>Cadastrar Novo Álbum</h1>

<form action="#" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <input type="file" name="audio" accept="audio/*" class="form-control">
    </div>
    <button type="submit" class="btn btn-success ml-2">Cadastrar</button>
</form>

<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //var_dump($_FILES['audio']);
        $album = $_GET['album'];

        $path = "albums/{$album}/musics/";

        if (!is_dir($path)) {
            mkdir($path);
        }

       if (move_uploaded_file($_FILES['audio']['tmp_name'], $path . $_FILES['audio']['name'])) {
            header("Location: ?page=musics&album={$album}");
       } else {
           echo 'Falha no upload...';
       }
    }

?>