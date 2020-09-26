	  <!-- Kontak -->
      <div class="container my-5">
          <div class="row my-5">
              <div class="col text-center">
                  <h1 class="color-auladi" style="">Pengumuman</h1>
                  <p class="lead" style="font-weight: bold;">Informasi Pengumuman TKIT-SDIT SIT Auladi Palembang</p>
              </div>
          </div>
          <div class="row my-5">
              <div class="col-12">
              <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Pengumuman</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;?>
                <?php foreach($pengumuman as $b):?>
                    <tr>
                    <td scope="row"><?= $no ?></td>
                    <td><?= $b['nama_pengumuman'] ?></td>
                    <td><a class="btn btn-primary" href="<?= base_url()?>assets/pengumuman/<?= $b['file_pengumuman']?>" target="_blank">Download</a></td>
                    <?php $no++;?>
                    </tr>
                    <?php endforeach;?>
                </tbody>
                </table>
                <?php echo $pagination; ?>
              </div>
          </div>
      </div>
  
	