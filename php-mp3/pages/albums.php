<h1>Álbum</h1>

<div class="row">
    <?php
        for($i = 1; $i <= 10; $i++):
    ?>
    <div class="col-3 album">
        <a href="">
            <img src="albums/david_guetta.jpg" alt="<?=$i;?>" class="img_album">
            <h4>Álbum <?=$i;?></h4>
        </a>
    </div>
    <?php
        endfor;
    ?>
</div>