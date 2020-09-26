<div class="container">
    <!-- directory -->
    <div class=" d-xl-block d-none">
        <ol class="breadcrumb bg-white" style="margin-left: -15px; margin-top: -10px;">
            <li class="breadcrumb-item">Informasi</li>
            <li class="breadcrumb-item">Galeri Foto & Video</li>
            
            <li class="breadcrumb-item active"><?= $albumname->albumName ?></li>
        </ol>
    </div>

    <h1 class="my-5 color-auladi">Foto & Video</h1>
    <?php if(count($video) <= 0 && count($photo) <= 0){?>
        <h2>Belum ada foto yang di upload</h2>
    <?php }?>
    <div class="row my-5">
    <?php if(count($photo) > 0){?>
        <?php foreach($photo as $ph=>$p):?>
        <div class="col-sm-4 my-3">
            <img class="card-img-top img-fluid galeri-img auladi-rounded" style="" src="<?= base_url()?>uploads/galerifoto/<?= $p->photo ?>" alt="">
        </div>
        <?php endforeach;?>
        <?php }?>
        
    </div>
        
    <div class="row my-5">
    <?php if(count($video) > 0){?>
        <?php foreach($video as $ph=>$p):?>
        <div class="col-sm-4 my-3">
        <iframe width="420" height="315"
        src="<?= $p->youtubeID?>">
        </iframe>
        </div>
        <?php endforeach; ?>
        <?php }?> 
    </div>

    
</div>