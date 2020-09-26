
  <body>
	<!-- Nav atas -->
	<nav class="navbar navbar-expand-lg navbar-light bg-white" id="nav-top">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url()?>"><img src="<?= base_url()?>assets\images\logo.png" alt=""></a>
			<?= form_open_multipart('Home/CariBerita', ['class' => 'form-inline my-2 my-lg-0' , 'id' =>'formku']) ?>
				<input class="form-control" type="text" placeholder="Search" aria-label="Search" id="in" name="search">
				<button class="btn bg-dark my-2 my-sm-0 text-white" form="formku" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>			
			<?= form_close() ?>

		</div>
	  </nav>

	<!-- Nav Bawah -->
    <nav class="navbar navbar-expand-xl navbar-light bg-white" id="nav-bot">
		<div class="container">
				
				<h3 class="d-inline d-xl-none color-auladi my-3 font-weight-bold">Menu</h3>
				<button class="navbar-toggler ml-auto my-3" data-toggle="collapse" style="border:none;" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" id="btn-collapse">
					<div id="navbar-hamburger">
						<span ><img src="<?= base_url()?>assets\images\burger.png" alt=""></span>
					</div>
					<div id="navbar-close" class="d-none">
						<span ><i class="fa fa-times color-auladi" aria-hidden="true" style="width:22,4px; height: 19,2px;"></i></span>
					</div>
				</button>
			
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item w-100 pt-2 <?php if($content == 'beranda'){echo "auladi-active";}?>">
					<a class="nav-link" href="<?= base_url()?>">Home <span class="sr-only">(current)</span></a>
					<div class="dropdown-divider d-block d-xl-none" style=""></div>
				</li>
				<li class="nav-item w-100 pt-2 <?php if($content == 'tentang'){echo "auladi-active";}?>">
					<a class="nav-link" href="<?= base_url()?>Home/Tentang">Tentang</a>
					<div class="dropdown-divider d-block d-xl-none"></div>
				</li>
				<li class="nav-item w-100 dropdown pt-2">
				<a class="nav-link dropdown-toggle" href="#' id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Cabang Auladi
					
				</a>
				<div class="dropdown-divider d-block d-xl-none"></div>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<li class="dropdown-submenu">
					<a class="dropdown-item dropdown-toggle" href="#">SU II</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="<?= base_url()?>Home/cabang/2">TK</a></li>
						<div class="dropdown-divider"></div>
						<li><a class="dropdown-item" href="<?= base_url()?>Home/cabang/1">SD</a></li>
					</ul>
					</li>
					<li class="dropdown-submenu">
					<div class="dropdown-divider"></div>
						<a class="dropdown-item dropdown-toggle" href="#">Pakjo</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="<?= base_url()?>Home/cabang/6">TK</a></li>
							<div class="dropdown-divider"></div>
							<li><a class="dropdown-item" href="<?= base_url()?>Home/cabang/5">SD</a></li>
						</ul>
					</li>
					<li class="dropdown-submenu">
					<div class="dropdown-divider"></div>
						<a class="dropdown-item dropdown-toggle" href="#">Sako</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="<?= base_url()?>Home/cabang/4">TK</a></li>
							<div class="dropdown-divider"></div>
							<li><a class="dropdown-item" href="<?= base_url()?>Home/cabang/3">SD</a></li>
						</ul>
					</li>
				</ul>
				<li class="nav-item w-100 pt-2 dropdown <?php if($content == 'berita' || $content =='galeri'){echo "auladi-active";}?>">
					<a class="nav-link dropdown-toggle" href="#' id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Informasi
					</a>
					<div class="dropdown-divider d-block d-xl-none"></div>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<li><a class="dropdown-item" href="<?= base_url()?>Home/Berita">Berita</a></li>
						<div class="dropdown-divider d-block d-xl-none"></div>
						<li><a class="dropdown-item" href="<?= base_url()?>Home/Galeri">Galeri Foto & Video</a></li>
						<div class="dropdown-divider d-block d-xl-none"></div>
						<li><a class="dropdown-item" href="<?= base_url()?>Home/Dataalumni">Data Alumni</a></li>				
					</ul>
				</li>
				<li class="nav-item pt-2 w-100  <?php if($content == 'kontak'){echo "auladi-active";}?>">
					<a class="nav-link" href="<?= base_url()?>Home/Kontak">Kontak</a>
					<div class="dropdown-divider d-block d-xl-none"></div>
				</li>
				<li class="nav-item cp pt-2 w-100 ">
					<a class="nav-link d-xl-block d-none" href="https://www.facebook.com/sitauladipalembang/" target="_blank"><img src="<?= base_url()?>assets\images\fb.png" alt=""></a>
					<a class="nav-link d-xl-none d-inline mx-2" href="https://www.facebook.com/sitauladipalembang/" target="_blank"><img src="<?= base_url()?>assets\images\fb.png" alt=""></a>
					<a class="nav-link d-xl-none d-inline mx-2" href="https://www.instagram.com/auladi_official/" target="_blank"><img src="<?= base_url()?>assets\images\ig.png" alt=""></a>
					<a class="nav-link d-xl-none d-inline mx-2" href="https://www.youtube.com/channel/UCkt85mcWronFYhdQ2YI0taQ" target="_blank"><img src="<?= base_url()?>assets\images\yt.png" alt=""></a>
					<div class="dropdown-divider d-block d-xl-none"></div>
				</li>
				<li class="nav-item cp pt-2 w-100 d-xl-block d-none">
					<a class="nav-link" href="https://www.instagram.com/auladi_official/" target="_blank"><img src="<?= base_url()?>assets\images\ig.png" alt=""></a>
					<div class="dropdown-divider d-block d-xl-none"></div>
				</li>
				<li class="nav-item pt-2 w-100 d-xl-block d-none">
					<a class="nav-link" href="https://www.youtube.com/channel/UCkt85mcWronFYhdQ2YI0taQ" target="_blank"><img src="<?= base_url()?>assets\images\yt.png" alt=""></a>
					<div class="dropdown-divider d-block d-xl-none"></div>
				</li>
				<li class="nav-item pt-2 w-100  <?php if($content == 'pendaftaran'){echo "auladi-active";}?>">
					<a href="<?= base_url()?>Home/Pendaftaran"><button class="btn bg-auladi" style=" color: white;" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Pendaftaran</button></a>
				</li>
				</li>
			</ul>
			</div>
		</div>
	  </nav>
	  <div class="d-xl-none d-block bg-auladi mb-5"  style="margin-top: -8px; width:100%; height:1px;"></div>

	  <!-- WA -->
	  <a class="wa" href="#"><img src="<?= base_url()?>assets\images\wa.png" alt=""></a>
	
	  <script>
		  $(function() {
  
			$('#navbarNavDropdown')
				.on('shown.bs.collapse', function() {
				$('#navbar-hamburger').addClass('d-none');
				$('#navbar-close').removeClass('d-none');    
				})
				.on('hidden.bs.collapse', function() {
				$('#navbar-hamburger').removeClass('d-none');
				$('#navbar-close').addClass('d-none');        
				});
			
			});
	  </script>