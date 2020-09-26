<?php
function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}
?>
<div class="container">

    <!-- directory -->
    <div class=" d-xl-block d-none">
        <ol class="breadcrumb bg-white" style="margin-left: -15px; margin-top: -10px;">
            <li class="breadcrumb-item">Informasi</li>
            <li class="breadcrumb-item active">Berita</li>
        </ol>
    </div>
    <!-- Header Berita -->
    <h1 class="color-auladi ml-auto my-5">Berita</h1>
    <?php if(count($this->data['berita'])== 0){?>
        <h3 style="color: #f26628;" class="text-center">Tidak ada Berita Terkait</h3>
        <?php }?> 
    <!-- Berita -->
    <div class="d-none d-xl-block">
        <div class="row">
    
        <?php foreach($berita as $b):?>
            <div class="col-md-4 my-3">
                    <div class="card">
                        
                        <img class="card-img-top" style="height: 220px;" src="<?= base_url()?>assets/berita_foto/<?= $b['foto'] ?>" alt="">
                        <div class="card-body">
                            <p class="card-text" style="color: #f26628;">
                            <?= date('l',strtotime($b['created_at']))?>, <?= date('d M Y',strtotime($b['created_at']))?>
                            </p>
                            <a href="<?= base_url()?>Home/detailberita/<?= $b['slugJudul']?>" style="text-decoration:none;color:black;"><h4 class="card-title font-weight-bold"><?= $b['judulBerita'] ?></h4></a>
                            <?php $kata = limit_words($b['isiBerita'],10);?>
                            <p class="card-text"><?= $kata ?><span>...<a href="<?= base_url()?>Home/detailberita/<?= $b['slugJudul']?>" style="color:#f26628;">Selengkapnya</a></span></p>
                        </div>
                        
                    </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>

    <div class="d-xl-none d-block">
    <?php foreach($berita as $b):?>
        <div class="row mt-3">
    
        
            <div class="col-4 my-auto">
                    <div class="card">
                        
                        <img class="card-img-top" style="height: 220px;" src="<?= base_url()?>assets/berita_foto/<?= $b['foto'] ?>" alt="">
                        
                        
                    </div>
            </div>

            <div class="col-8 my-auto">
                    <div class="card">
                        
                        <div class="card-body">
                            <p class="card-text" style="color: #f26628;">
                            <?= date('l',strtotime($b['created_at']))?>, <?= date('d M Y',strtotime($b['created_at']))?>
                            </p>
                            <a href="<?= base_url()?>Home/detailberita/<?= $b['id']?>" style="text-decoration:none"><h4 class="card-title"><?= $b['judulBerita'] ?></h4></a>
                            <?php $kata = limit_words($b['isiBerita'],10);?>
                            <p class="card-text"><?= $kata ?><span>...<a href="<?= base_url()?>Home/detailberita/<?= $b['id']?>" style="color:#f26628;">Selengkapnya</a></span></p>
                        </div>
                        
                    </div>
            </div>
           
        </div>
        <?php endforeach;?>
    </div>
    <div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            
            <?php echo $pagination; ?>
        </div>
    </div>
    
</div>