<div class="container">
    <!-- Foto -->
    <div class="row">
        <div class="col-sm-12">
            <div class="label-cabang-mobile text-center pt-auto d-md-none d-block"><p class="lead text-white" style="font-weight:bold"><?= $sekolah->schoolName ?></p></div>
            <img class="my-5 img-cabang" style="min-width:100%;" src="<?= base_url()?>uploads/fotosekolah/<?= $sekolah->data_sekolah->foto ?>" alt="">       
            <div class="label-cabang text-center pt-auto d-md-block d-none"><p class="lead text-white" style="font-weight:bold"><?= $sekolah->schoolName ?></p></div>
        </div>
    </div>
    <!-- Tabel -->
    <div class="table-responsive my-5"  style="border-radius:15px">
            <table class="table table-inverse table-striped">
                    <tr>
                        <th class="pl-5" style="width:25%; border-right: 1px solid gray;">NSS</th>
                        <td class="pl-5"><?= $sekolah->data_sekolah->nss?></td>
                    </tr>
                    <tr class="bg-light">
                        <th class="pl-5" style="width:25%; border-right: 1px solid gray;">Alamat</th>
                        <td class="pl-5"><?= $sekolah->data_sekolah->alamat?></td>
                    </tr>
                    <tr>
                        <th class="pl-5" style="width:25%; border-right: 1px solid gray;">No. Telp</th>
                        <td class="pl-5"><?= $sekolah->data_sekolah->no_telepon?></td>
                    </tr>
                    <tr class="bg-light">
                        <th class="pl-5" style="width:25%; border-right: 1px solid gray;">Email</th>
                        <td class="pl-5"><?= $sekolah->data_sekolah->email?></td>
                    </tr>
            </table>
     </div>
    

     <!-- Kurikulum -->
     <div class="d-none d-xl-block">
        <ul class="nav nav-pills" id="pills-tab" role="tablist" style="border-top-left-radius: 16px; border-top-right-radius: 16px; background-color:#312651; width:100%;">
            <li class="nav-item mx-auto" style="width: 16.66%; border-right: 3px solid gray; ">
                <a class="nav-link active py-3 text-center text-white" id="kurikulum-tab" data-toggle="pill" href="#kurikulum" role="tab" aria-controls="kurikulum" aria-selected="true">Kurikulum</a>
            </li>
            <li class="nav-item mx-auto" style="width: 16.66%; border-right: 3px solid gray;">
                <a class="nav-link py-3 text-center text-white " id="pelajaran-tab" data-toggle="pill" href="#pelajaran" role="tab" aria-controls="pelajaran" aria-selected="false">Pelajaran</a>
            </li>
            <li class="nav-item mx-auto" style="width: 16.66%; border-right: 3px solid gray;">
                <a class="nav-link py-3 text-center text-white" id="kegiatan-tab" data-toggle="pill" href="#kegiatan" role="tab" aria-controls="kegiatan" aria-selected="false">Kegiatan</a>
            </li>
            <li class="nav-item mx-auto" style="width: 16.66%; border-right: 3px solid gray;">
                <a class="nav-link py-3 text-center text-white" id="ekstrakurikuler-tab" data-toggle="pill" href="#ekstrakurikuler" role="tab" aria-controls="ekstrakurikuler" aria-selected="false">Ekstrakurikuler</a>
            </li>
            <li class="nav-item mx-auto" style="width: 16.66%; border-right: 3px solid gray;">
                <a class="nav-link py-3 text-center text-white" id="kompetensi-tab" data-toggle="pill" href="#kompetensi" role="tab" aria-controls="kompetensi" aria-selected="false">Kompetensi</a>
            </li>
            <li class="nav-item mx-auto" style="width: 16.66%;">
                <a class="nav-link py-3 text-center text-white" id="pengajar-tab" data-toggle="pill" href="#pengajar" role="tab" aria-controls="pengajar" aria-selected="false">Pengajar</a>
            </li>
        </ul>
        
        <div class="tab-content bg-light" id="pills-tabContent">
            <div class="tab-pane fade show active p-5" id="kurikulum" role="tabpanel" aria-labelledby="kurikulum-tab" style="height:700px; overflow-y:scroll"><?= $detailsekolah->kurikulum ?></div>
            <div class="tab-pane fade p-5" id="pelajaran" role="tabpanel" aria-labelledby="pelajaran-tab" style="height:700px; overflow-y:scroll"><?= $detailsekolah->pelajaran ?></div>
            <div class="tab-pane fade p-5" id="kegiatan" role="tabpanel" aria-labelledby="kegiatan-tab" style="height:700px; overflow-y:scroll"><?= $detailsekolah->kegiatan ?></div>
            <div class="tab-pane fade p-5" id="ekstrakurikuler" role="tabpanel" aria-labelledby="ekstrakurikuler-tab" style="height:700px; overflow-y:scroll"><?= $detailsekolah->ekstrakurikuler ?></div>
            <div class="tab-pane fade p-5" id="kompetensi" role="tabpanel" aria-labelledby="kompetensi-tab" style="height:700px; overflow-y:scroll"><?= $detailsekolah->kompetensi ?></div>
            <div class="tab-pane fade p-5" id="pengajar" role="tabpanel" aria-labelledby="pengajar-tab" style="height:700px; overflow-y:scroll"><?= $detailsekolah->pengajar ?></div>
        </div>
    </div>


    <!-- kurikulum mobile -->
    <div  class="d-xl-none d-block">
    <div id="accordion" class="text-center">
      <div class="card">
      <a href="#collapse1" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle" style="border-top-left-radius: 16px; border-top-right-radius: 16px;" aria-expanded='true'>
        <div class="card-header text-white" style="">
          <h5>
            
              Kurikulum
            
          </h5>
        </div>
        </a>
        <div id="collapse1" class="collapse show">
          <div class="card-body bg-light text-left">
            <?= $detailsekolah->kurikulum ?>
          </div>
        </div>
      </div>

      <div class="card">
      <a href="#collapse2" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle" style="" aria-expanded='false'>
        <div class="card-header text-white">
          <h5>
            
              Pelajaran
            
          </h5>
        </div>
        </a>
        <div id="collapse2" class="collapse">
          <div class="card-body bg-light text-left">
            <?= $detailsekolah->pelajaran ?>
          </div>
        </div>
      </div>

      <div class="card">
      <a href="#collapse3" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle" aria-expanded='false'>
        <div class="card-header text-white">
          <h5>
            
              Kegiatan
          </h5>
        </div>
        </a>
        <div id="collapse3" class="collapse">
          <div class="card-body bg-light text-left">
            <?= $detailsekolah->kegiatan ?>
          </div>
        </div>
      </div>
      <div class="card">
      <a href="#collapse4" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle" aria-expanded='false'>
        <div class="card-header text-white">
          <h5>
            
             Ekstrakurikuler
          </h5>
        </div>
        </a>
        <div id="collapse4" class="collapse">
          <div class="card-body bg-light text-left">
           <?= $detailsekolah->ekstrakurikuler ?>
          </div>
        </div>
      </div>
      <div class="card">
      <a href="#collapse5" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle" aria-expanded='false'>
        <div class="card-header text-white">
          <h5>
            
             Kompetensi
          </h5>
        </div>
        </a>
        <div id="collapse5" class="collapse">
          <div class="card-body bg-light text-left">
          <?= $detailsekolah->kompetensi ?>
          </div>
        </div>
      </div>
      <div class="card">
      <a href="#collapse6" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle" aria-expanded='false'>
        <div class="card-header text-white">
          <h5>
            
             Pengajar
          </h5>
        </div>
        </a>
        <div id="collapse6" class="collapse">
          <div class="card-body bg-light text-left">
            <?= $detailsekolah->pengajar ?>
          </div>
        </div>
      </div>
    </div>
    </div>


<!--
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a class="accordion-toggle collapsed show" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
          <span class="question">Q:</span>First Question</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">
          <span class="answer">A:</span> Text 
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
            <span class="question">Q:</span>Second Question
          </a>
        </h4>
      </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
        <span class="answer">A:</span> Text
      </div>
    </div>
    </div>-->
</div>
<script type="text/javascript">



</script>
