<div class ="container mt-5">
<div class="text-center">
<h3>Tanda Tangani Berkas</h3>
</div>
</div>

<div class="container mt-4">
  <div class="row">
    <div class="col-md-6 ">
          <p class="text-center">
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              Penanda Tangan Pertama
            </a>
          </p>
          <div class="collapse bg-light rounded p-5" id="collapseExample">
          <div class="card bg-primary mb-3">
            <div class="card-body">
                <div class="container text-white">
                <h4>Cara Menggunakan:</h4>
                <ul>
                    <li>Jika Anda berperan sebagai penandatangan bukan pertama, beralih ke menu disamping</li>
                    <li>Masukkan File Yang ingin diberikan Tanda Tangan Digital</li>
                    <li>Pastikan File Yang Anda Masukkan Telah Benar</li>
                    <li>Klik Tombol Submit</li>
                </ul>  
                </div>
            </div>
          </div>

              <form method="POST" action="<?= base_url()?>Home/index">
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
          <div class="collapse bg-light rounded p-5" id="collapseExample2">
          <div class="card bg-success mb-3">
            <div class="card-body">
                <div class="container text-white">
                <h4>Cara Menggunakan:</h4>
                <ul>
                    <li>Jika Anda berperan sebagai penandatangan pertama, beralih ke menu disamping</li>
                    <li>Masukkan Berkas dan File Excel yang berisikan Tandatangan digital penandatangan sebelumnya</li>

                    <li>Klik Tombol Submit</li>
                </ul>  
                </div>
            </div>
          </div>
              <form method="POST" action="<?= base_url()?>Home/index">
                <!--<div class="form-group">
                  <label for="exampleInputEmail1">Flag</label>
                  <input type="text" class="form-control" id="flag2" name="flag2" aria-describedby="emailHelp" placeholder="Enter Flag">
                  <small id="emailHelp" class="form-text text-muted">Penanda Tanda Tangan Digital Anda</small>
                </div>-->
                <div class="form-group">
                  <label for="exampleInputPassword1">Berkas</label>
                  <input type="file" class="form-control" id="file" name="inputFile" placeholder="File">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">File Excel</label>
                  <input type="file" class="form-control" id="file" name="inputExcel" placeholder="File">
                </div>
                <!--<div class="form-group">
                  <label for="exampleInputPassword1">Last Signature</label>
                  <input type="text" class="form-control" id="signature" name="lastSignature" placeholder="Signature Sebelumnya">
                </div>-->
                <div class="form-group">
                  <input type="submit" name="submitSec" class="btn btn-success">
                </div>
              </form>
          </div>
    </div>

  </div>

</div>
