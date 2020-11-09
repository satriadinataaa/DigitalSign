<div class ="container mt-5">
<div class="text-center">
<h3>Tanda Tangan Digital</h3>
</div>
<?php if(isset($_SESSION['msg'])) { 
  echo $_SESSION['msg'];
} ?>
</div>

<div class="container mt-4">
  <div class="row">
    <div class="col-md-6 ">
          <p class="text-center">
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            <span class="fa fa-pencil"></span>  Buat Tanda Tangan
            </a>
          </p>
          <div class="bg-light rounded p-5" id="collapseExample">
          <div class="card bg-primary mb-3">
            <div class="card-body">
                <div class="container text-white">
                <h4>Cara Menggunakan:</h4>
                <ul>
                    <!-- <li>Jika Anda berperan sebagai penandatangan bukan pertama, beralih ke menu disamping</li> -->
                    <li>Masukkan File Yang ingin diberikan Tanda Tangan Digital</li>
                    <li>Pastikan File Yang Anda Masukkan Telah Benar</li>
                    <li>Klik Tombol "Buat Tanda Tangan"</li>
                </ul>  
                </div>
            </div>
          </div>

              <form method="POST" action="<?= base_url()?>DigitalSignature/sign_first" enctype="multipart/form-data">
                <!--<div class="form-group">
                  <label for="exampleInputEmail1">Flag</label>
                  <input type="text" class="form-control" id="flag" name="flag" aria-describedby="emailHelp" placeholder="Enter Flag">
                  <small id="emailHelp" class="form-text text-muted">Penanda Tanda Tangan Digital Anda</small>
                </div>-->
                <div class="form-group">
                  <label for="exampleInputPassword1">Berkas</label>
                  <input type="file" class="form-control" id="file" name="inputFile" placeholder="File">
                </div>
                <input type="submit" value="Buat Tanda Tangan" name="submitFirst" class="btn btn-primary">
              </form>
          </div>
    </div>

    <div class="col-md-6">
          <p class="text-center">
            <a class="btn btn-success" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
            <span class="fa fa-search"></span>&nbsp;Validasi Tanda Tangan
            </a>
          </p>
          <div class="bg-light rounded p-5" id="collapseExample2">
          <div class="card bg-success mb-3">
            <div class="card-body">
                <div class="container text-white">
                <h4>Cara Menggunakan:</h4>
                <ul>
                    <!-- <li>Jika Anda berperan sebagai penandatangan pertama, beralih ke menu disamping</li> -->
                    <!-- <li>Masukkan Berkas dan File Excel yang berisikan Tandatangan digital penandatangan sebelumnya</li> -->
                    <li>Masukkan File Yang Ingin Diperiksa Tanda Tangan Digital</li>
                    <li>Masukan File Excel Tanda Tangan Yang Dikirim Oleh Penanda Tangan</li>
                    <li>Jika Penanda Tangan Lebih Dari Satu, Klik Tombol "+"
                    <li>Pastikan File Yang Anda Masukkan Telah Benar</li>
                    <li>Klik Tombol Validasi</li>
                </ul>  
                </div>
            </div>
          </div>
              <form method="POST" action="<?= base_url()?>DigitalSignature/validasi" enctype="multipart/form-data">
                <!--<div class="form-group">
                  <label for="exampleInputEmail1">Flag</label>
                  <input type="text" class="form-control" id="flag2" name="flag2" aria-describedby="emailHelp" placeholder="Enter Flag">
                  <small id="emailHelp" class="form-text text-muted">Penanda Tanda Tangan Digital Anda</small>
                </div>-->
                <div class="form-group">
                  <label for="exampleInputPassword1">Berkas</label>
                  <input type="file" class="form-control" id="file" name="berkas" placeholder="File">
                </div>
                <div id="item-container"> 
                <div class="row">
                <div class="col-md-9">
                <div class="form-group">
                  <label for="exampleInputPassword1">File Excel Tanda Tangan 1</label>
                  <input type="file" class="form-control" id="file" name="sign[]" placeholder="File">
                </div>
                </div>
                <div class="col-md-3">
                <div class="form-group">
                <label for="exampleInputPassword1">&nbsp;</label>
                 <button type="button" class="btn btn-primary form-control" onclick="add_item()">+</button>
                </div>
                </div>
                </div>
                </div>
               
                <!--<div class="form-group">
                  <label for="exampleInputPassword1">Last Signature</label>
                  <input type="text" class="form-control" id="signature" name="lastSignature" placeholder="Signature Sebelumnya">
                </div>-->
                <div class="form-group">
                  <input type="submit" value="Validasi" name="submitSec" class="btn btn-success">
                </div>
              </form>
          </div>
    </div>

  </div>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>
let i=2;
function add_item() {
           
            $('#item-container').append(`
            <div class="row">
                <div class="col-md-9">
                <div class="form-group">
                  <label for="exampleInputPassword1">File Excel Tanda Tangan ${i++}</label>
                  <input type="file" class="form-control" id="file" name="sign[]" placeholder="File">
                </div>
                </div>
                <div class="col-md-3">
                <div class="form-group">
                <br>
                <button type="button" class="btn btn-danger " onclick="remove_item(this)">-</button>
                 <button type="button" class="btn btn-primary " onclick="add_item()">+</button>
                </div>
                </div>
                </div>
            `);
}

function remove_item(obj) {
          i--;
            $(obj).parent().parent().parent().remove();
           
        }
        
        </script>