<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>MP3 em PHP</title>
</head>
<body>
    <div class="content">
        <?php
            include_once 'helpers.php';

            if(isset($_GET['page'])) {
                if (file_exists("pages/{$_GET['page']}.php")) {
                    include_once "pages/{$_GET['page']}.php";
                } else {
                    include_once 'pages/errors404.php';
                } 
            } else {
                include_once 'pages/albums.php';
            }
        ?>
    </div>
</body>
</html>