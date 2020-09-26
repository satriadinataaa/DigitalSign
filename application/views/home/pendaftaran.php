

<div class="container my-5">

<!-- Pengumuman -->
<p class="lead text-center"><?= $regtitle->judulpendaftaran ?></p>

<!-- Form Daftar -->
<div class="form-daftar bg-light py-3 px-5">
<?= $this->session->flashdata('msg') ?>
    <form action="" method="post">
        <h1 class="mb-3">Formulir Pendaftaran Siswa</h1>
        <div class="dropdown-divider"></div>

        <!-- Data Siswa -->
        <div class="label py-2 px-4">Data Calon Siswa</div>
        <P style="color: red;" class="text-right"><small>*</small> Wajib diisi</P>
        <div class="row mt-5">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="nama_siswa" class="lead">Nama Lengkap Calon Siswa <small style="color: red;">*</small></label>
                    <input class="form-control" style="border-radius: 16px;" name="nama_siswa" type="text" id="nama_siswa" placeholder="Masukkan Nama" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="jenis_kelamin" class="lead">Jeni Kelamin <small style="color: red;">*</small></label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" style="border-radius: 16px;" required>
                        <option value="Laki-laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="tempat_lahir" class="lead">Tempat Lahir <small style="color: red;">*</small></label>
                    <input class="form-control" style="border-radius: 16px;" name="tempat_lahir" type="text" id="tempat_lahir" placeholder="Tempat Lahir" required>
                </div>
            </div>
            
            <div class="col-sm-6">
                 <div class="form-group">
                    <label for="tanggal_lahir" class="lead">Tanggal Lahir <small style="color: red;">*</small></label>
                    <input  class="datepicker form-control" name="tanggal_lahir" id="tanggal_lahir" style="border-radius: 16px !important;" required value="17/07/2020">
                    <img id="img-date" src="<?= base_url()?>assets\images\date.png"  style="position: absolute; margin-top: -32px; right: 25px; border:none; pointer-events: none;" alt=""  class="text-right">
                   
                 </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="cabang" class="lead">Cabang <small style="color: red;">*</small></label>
                    <select class="form-control" id="cabang" name="cabang" style="border-radius: 16px;" required>
                        <option value="SU-II">SU II</option>
                        <option value="Pakjo">Pakjo</option>
                        <option value="Sako">Sako</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group" style="width: 25%;">
                    <label for="jenjang" class="lead">Jenjang <small style="color: red;">*</small></label>
                    <select class="form-control" name="jenjang" id="jenjang" style="border-radius: 16px;" required>
                        <option value="TK">TK</option>
                        <option value="SD">SD</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="dropdown-divider mt-5"></div>

        <!-- Ortu -->
        <div class="label py-2 px-4">Data Orang Tua</div>
        <P style="color: red;" class="text-right"><small>*</small> Wajib diisi</P>
        <div class="row mt-5">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="nama_ortu" class="lead">Nama Ayah <small style="color: red;">*</small></label>
                    <input class="form-control" style="border-radius: 16px;" name="nama_ortu" type="text" id="nama_ortu" placeholder="Masukkan Nama Ayah" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="telepon_ortu" class="lead">No. Telp/Handphone Ayah <small style="color: red;">*</small></label>
                    <input class="form-control" style="border-radius: 16px;" name="telepon_ortu" type="text" id="telepon_ortu" placeholder="Masukkan Nomor Handphone Ayah" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="email" class="lead">Email Ayah</label>
                    <input class="form-control" style="border-radius: 16px;" name="email" type="text" id="email" placeholder="Masukkan Email Ayah">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="pekerjaan" class="lead">Pekerjaan Ayah <small style="color: red;">*</small></label>
                    <input class="form-control" style="border-radius: 16px;" type="text" name="pekerjaan" id="pekerjaan" placeholder="Masukkan Pekerjaan Ayah" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="pendidikan" class="lead">Pendidikan Ayah</label>
                    <select class="form-control" name="pendidikan" id="pendidikan" style="border-radius: 16px;">
                        <option value="SLTA">SLTA</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="nama_ortu" class="lead">Nama Orang Ibu <small style="color: red;">*</small></label>
                    <input class="form-control" style="border-radius: 16px;" name="nama_ortu" type="text" id="nama_ortu" placeholder="Masukkan Nama Ibu" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="telepon_ortu" class="lead">No. Telp/Handphone Ibu <small style="color: red;">*</small></label>
                    <input class="form-control" style="border-radius: 16px;" name="telepon_ortu" type="text" id="telepon_ortu" placeholder="Masukkan Nomor Handphone Ibu" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="email" class="lead">Email Ibu</label>
                    <input class="form-control" style="border-radius: 16px;" name="email" type="text" id="email" placeholder="Masukkan Email Ibu">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="pekerjaan" class="lead">Pekerjaan Ibu <small style="color: red;">*</small></label>
                    <input class="form-control" style="border-radius: 16px;" type="text" name="pekerjaan" id="pekerjaan" placeholder="Masukkan Pekerjaan Ibu" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="pendidikan" class="lead">Pendidikan Ibu</label>
                    <select class="form-control" name="pendidikan" id="pendidikan" style="border-radius: 16px;">
                        <option value="SLTA">SLTA</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="alamat" class="lead">Alamat Orang Tua</label>
                    <textarea id="form10" class="md-textarea form-control" name="alamat" rows="5" id="alamat" placeholder="Masukkan Alamat Orang Tua"></textarea>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-sm-12 text-right">
                <input type="submit" value="Daftar" name="submit" class="btn py-2 px-5 text-white bg-auladi ml-auto d-md-block d-none" style="font-weight: bold; font-size: 20px; border-radius: 16px;" data-toggle="modal" data-target="#myModal">
                <input type="submit" value="Daftar" class="btn py-2 px-5 text-white bg-auladi d-md-none d-block btn-block" style="font-weight: bold; font-size: 20px; border-radius: 16px;" data-toggle="modal" data-target="#myModal">
            </div>
        </div>
    </form>

    
</div>
</div>


<script>
   $('.datepicker').datepicker({
       uiLibrary: 'bootstrap4',
       changeMonth: true,
        changeYear: true,
        yearRange: "-100:+0",
       dateFormat: 'dd/mm/yy'
   });
   $("#tanggal_lahir").datepicker("setDate", new Date());
  
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script type="text/javascript">
var currUrl = window.location.href.split('/');




var globalUrl = currUrl.join('/');

$(document).ready(function(){
$("#form").submit(function(){
    $.ajax({
        url: globalUrl, 
        data: $("#form").serialize(), 
        type: "POST", 
        dataType: 'json',
        success: function (e) {
           
        }
    })
    .done(function(response) {
                            swal('Berita berhasil dihapus', {
                                icon: 'success',
                              });
                            // window.location.href = '<?= base_url('Admin') ?>';
                            location.reload();
                        });
    
});
});

</script>

