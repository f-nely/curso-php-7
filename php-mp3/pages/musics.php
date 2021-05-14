<div class="form-group">
    <a href="?page=albums" class="btn btn-primary mt-2 ml-2">Voltar Para os Álbuns</a>
</div>
<h1>Músicas do Álbum <?=$_GET['album'];?></h1>

<a href="?page=new_music&album=<?=$_GET['album'];?>" class="btn btn-success mt-2 ml-2">Cadastrar Nova Música</a>

<hr>
<?php
    $album = $_GET['album'];
    $musics = getMusics($album);
    
    foreach ($musics as $music):
?>

<div class="col-12">
    <audio src="<?=$music;?>" controls></audio>
</div>

<?php
    endforeach;
?>
