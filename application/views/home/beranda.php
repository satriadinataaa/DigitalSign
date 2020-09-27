<div class ="container mt-5">
<div class="text-center">
<h3>Tanda Tangani Berkas</h3>
</div>
</div>

<div class="container mt-4">
  <div class="row">
    <div class="col-md-6">
          <p class="text-center">
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              Penanda Tangan Pertama
            </a>
          </p>
          <div class="collapse" id="collapseExample">
          <div class="card bg-primary mb-5">
            <div class="card-body">
                <div class="container text-white">
                <p class="badge badge-warning p-2">Cara Menggunakan:</p>

                </div>
            </div>
          </div>

              <form>
                <!--<div class="form-group">
                  <label for="exampleInputEmail1">Flag</label>
                  <input type="text" class="form-control" id="flag" name="flag" aria-describedby="emailHelp" placeholder="Enter Flag">
                  <small id="emailHelp" class="form-text text-muted">Penanda Tanda Tangan Digital Anda</small>
                </div>-->
                <div class="form-group">
                  <label for="exampleInputPassword1">File</label>
                  <input type="file" class="form-control" id="file" name="inputFile" placeholder="File">
                </div>
                <input type="submit" name="submitFirst" class="btn btn-primary">
              </form>
          </div>
    </div>

    <div class="col-md-6">
          <p class="text-center">
            <a class="btn btn-success" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
              Penanda Tangan Kedua
            </a>
          </p>
          <div class="collapse" id="collapseExample2">
          
              <form method="POST" action="<?= base_url()?>Home/index">
                <!--<div class="form-group">
                  <label for="exampleInputEmail1">Flag</label>
                  <input type="text" class="form-control" id="flag2" name="flag2" aria-describedby="emailHelp" placeholder="Enter Flag">
                  <small id="emailHelp" class="form-text text-muted">Penanda Tanda Tangan Digital Anda</small>
                </div>-->
                <div class="form-group">
                  <label for="exampleInputPassword1">Last Signature</label>
                  <input type="text" class="form-control" id="signature" name="lastSignature" placeholder="Signature Sebelumnya">
                </div>
                <div class="form-group">
                  <input type="submit" name="submitSec" class="btn btn-primary">
                </div>
              </form>
          </div>
    </div>

  </div>

</div>
