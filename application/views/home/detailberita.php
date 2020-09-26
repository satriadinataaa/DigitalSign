<div class="container">

    <!-- Directory -->
    <div class=" d-xl-block d-none">
      <ol class="breadcrumb bg-white" style="margin-left: -15px; margin-top: -10px;">
          <li class="breadcrumb-item">Informasi</li>
          <li class="breadcrumb-item">Berita</li>
          <li class="breadcrumb-item active"><?= $berita->judulBerita?></li>
      </ol>
    </div>

    <!-- Head Berita -->
    
      <div class="row bg-light auladi-rounded head-berita mt-5 mx-1">
        <div class="col-sm-8 p-0">
          <img id="detail-berita-img" style="height: 380px; width:100%; border-top-left-radius: 16px; border-bottom-left-radius: 16px;" src="<?= base_url()?>assets/berita_foto/<?= $berita->foto ?>" alt="">
        </div>
        <div class="col-sm-4 px-auto py-4 d-none d-sm-block">
          <p class="lead mx-auto"><?= $berita->judulBerita ?></p>
          <p class="mx-auto color-auladi" style="" id="date-berita"><?= date('l',strtotime($berita->created_at))?>, <?= date('d M Y',strtotime($berita->created_at))?></p>
        </div>
      </div>
    
    <!-- Judul Mobile -->
    <div class="px-auto py-4 d-block d-sm-none">
      <p class="lead mx-auto"><?= $berita->judulBerita ?></p>
      <p class="mx-auto color-auladi" style="" id="date-berita"><?= date('l',strtotime($berita->created_at))?>, <?= date('d M Y',strtotime($berita->created_at))?></p>
    </div>

    <!-- isi Berita -->
    <div class="row">
      <div class="col-sm-8 my-5">
        <p><?= $berita->isiBerita?></p>
        
      </div>
      <div class="col-sm-4 mt-3">
        <!--<p class="lead mt-5 mb-3">Bagikan ke</p>-->
        <div class="d-flex flex-row row-h1">
        <h4> Bagikan Ke: </h4>
        <!--<div class="fb-share-button p-2 item-h1" 
            data-href="<?= base_url()?>/Home/detailberita/<?= $idberitaini?>" 
            data-layout="button_count">
        </div>
        <div class="p-2 item-h1 mt-1">
        <a class="twitter-share-button"
          href="https://twitter.com/intent/tweet?text=Saya%20Membaca%20 <?= $berita->judulBerita ?>">
        Tweet</a>
        </div>-->
        <!-- AddToAny BEGIN -->
        </div>
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_whatsapp"></a>
<a class="a2a_button_line"></a>
<a class="a2a_button_copy_link"></a>
</div>

<!-- AddToAny END -->
        <!--<img class="imgku mx-3 p-1 item-h1" src="<?= base_url()?>assets\images\share-berita.png" alt="" data-clipboard-text="<?= base_url()?>/Home/detailberita/<?= $idberitaini ?>"></a><br>-->

        
        <p class="lead my-4">Recent post</p>
        <?php foreach($beritalain as $ber => $b):?>
        <div class="row my-3">
          <div class="col-6 align-self-center">
          <a href="<?= base_url()?>Home/detailberita/<?= $b->slugJudul?>" style="color:black; text-decoration:none;"><img src="<?= base_url()?>assets/berita_foto/<?= $b->foto ?>" style="" alt="" class="img-fluid auladi-rounded"></a>
          </div>
          <div class="col-6">
            <p class="mx-auto color-auladi" style=""><?= date('l',strtotime($b['created_at']))?>, <?= date('d M Y',strtotime($b['created_at']))?></p>
            <a href="<?= base_url()?>Home/detailberita/<?= $b->slugJudul?>" style="color:black; text-decoration:none;"><p><?= $b->judulBerita ?></p></a>
          </div>
       </div>
        <?php endforeach;?>
      </div>
    </div>
   
    
      
    
</div>
<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  
}
</script>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<script>
    new ClipboardJS('.imgku');
  </script>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>