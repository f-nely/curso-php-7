<div class="form-group">
    <a href="?page=albums" class="btn btn-primary mt-2 ml-2">Voltar Para os Álbuns</a>
</div>

<h1>Cadastrar Novo Álbum</h1>

<form action="#" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" name="name" placeholder="Nome:" class="form-control">
    </div>
    <div class="form-group">
        <input type="file" name="image" accept="image/*" class="form-control">
    </div>
    <button type="submit" class="btn btn-success ml-2">Cadastrar</button>
</form>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //var_dump($_FILES['image']);
        $album = $_POST['name'];

        $path = "albums/{$album}";

        if (!is_dir($path)) {
            mkdir($path);
        }

        $file = $_FILES['image'];
        $fileInfo = explode('.', $file['name']);

        $extension = $fileInfo[1];
        $nameImage = $album . '.' . $extension;

        if (move_uploaded_file($file['tmp_name'], $path.'/'.$nameImage)) {
            header('Location: ?page=albums');
        } else {
            echo 'Falha no upload...';
        }
    }
?>