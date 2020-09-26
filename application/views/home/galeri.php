<div class="container">

    <!-- directory -->
    <div class=" d-xl-block d-none">
    <ol class="breadcrumb bg-white" style="margin-left: -15px; margin-top: -10px;">
        <li class="breadcrumb-item">Informasi</li>
        <li class="breadcrumb-item active">Galeri Foto & Video</li>
    </ol>
    </div>
        
    <!-- Header Galeri -->
    <h1 class="color-auladi ml-auto my-5">Galeri Foto & Video</h1>

    <!-- Galeri Foto/ Video -->
		  <div class="row">
          <?php foreach($album as $b){?>
			<div class="col-sm-6 my-3">
				<div class="card" style="border-radius: 26px;">
                    <a href="<?= base_url()?>Home/Detail_galeri/<?= $b['id']?>">
                        <img class="card-img-top img-fluid galeri-img" style="height: 280px; width: 552px;" src="<?= base_url()?>uploads\coveralbum\<?= $b['coverPhoto'] ?>" alt="">
                        <img class="galeri-ico" src="<?= base_url()?>assets\images\foto.png" alt="" style="max-height: 40px; max-width: 40px;">
                    </a>
					<div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <p class="card-text color-auladi"><?= date('l',strtotime($b['created_at']))?>, <?= date('d M Y',strtotime($b['created_at']))?></p>
                            </div>
                            
                        </div>
                        <h4 class="card-title"><?= $b['albumName'] ?></h4>
					</div>
				</div>
			</div>
          <?php }?>
		 </div>
		             


        <!-- Button -->
        <div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            
            <?php echo $pagination; ?>
        </div>
    </div>
</div> 
      
      
