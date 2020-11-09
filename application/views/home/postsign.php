<div class ="container mt-5">
<div class="text-center">
<h3 class="text-success">Tanda Tangan Digital Berhasil</h3>
</div>
</div>

<div class="container mt-4">
  <div class="row">
    <div class="col-md-2">
    
    </div>
    <div class="col-md-8 bg-light rounded p-3">    
    
          <a class="btn btn-success mb-5" href="<?= base_url()?>file/<?= $filename?>" download>Download Berkas Tanda Tangan Digital</a>&nbsp
          <a class="btn btn-primary mb-5" href="<?= base_url()?>">Kembali ke beranda</a>
          <p>Private Key Anda :</p>
          
          <textarea cols="100%" rows="10"><?= $pvtkey ?></textarea>
          
          
          
    </div>
    <div class="col-md-2">
    </div>

    

  </div>

</div>
