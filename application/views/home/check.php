<div class ="container mt-5">
<div class="text-center">
<h3>Periksa Integritas Berkas</h3>
</div>
</div>

<div class="container mt-4">
  <div class="row">
    <div class="col-md-3">
    
    </div>
    <div class="col-md-6 bg-light rounded p-5">    
          
              <form method="POST" action="<?= base_url()?>DigitalSignature/verify" enctype="multipart/form-data">
                <!--<div class="form-group">
                  <label for="exampleInputEmail1">Flag</label>
                  <input type="text" class="form-control" id="flag" name="flag" aria-describedby="emailHelp" placeholder="Enter Flag">
                  <small id="emailHelp" class="form-text text-muted">Penanda Tanda Tangan Digital Anda</small>
                </div>-->
                <div class="form-group">
                  <label for="exampleInputPassword1">Berkas yang ingin diperiksa</label>
                  <input type="file" class="form-control" id="file" name="berkas" placeholder="File">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Excel Signature</label>
                  <input type="file" class="form-control" id="file" name="sign" placeholder="File">
                </div>
                <input type="submit" name="submitFirst" class="btn btn-primary">
              </form>

    </div>

    

  </div>

</div>
