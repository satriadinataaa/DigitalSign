
	  <!-- Footer -->
	  <footer class="text-center mt-5 p-4 bg-light">
		<div class="container">
		  <div class="row text-justify">
			<div class="col-sm-4 my-4 foottxt">
			  <h5 class="my-4">TKIT-SDIT Auladi Pusat</h5>
			  <p class="lead my-4" style="font-size:17px;">Jl. KH. Azhari No.1 A. Kelurahan Tangga Takat, Kecamatan Seberang Ulu II - Palembang</p>
			  <p class="lead my-4" style="font-weight: bold; font-size:17px;"><i class="fa fa-phone" aria-hidden="true"  style="color: black; font-weight: bold;"></i>&nbsp;0711-510978,&nbsp;0711-510385</p>
			</div>
			<div class="col-sm-4 my-4 foottxt">
			  <h5 class="my-4">TKIT-SDIT Auladi Cabang Sako</h5>
			  <p class="lead my-4" style="font-size:17px;">Jl. Payo Durian RT 01 RW 01 No 94. Kelurahan Sialang. Kecamatan Sako - Palembang</p>
			  <p class="lead my-4" style="font-weight: bold; font-size:17px;"><i class="fa fa-phone" aria-hidden="true"  style="color: black; font-weight: bold;"></i>&nbsp;0711-810023</p>
			</div>
			<div class="col-sm-4 my-4 foottxt">
			  <h5 class="my-4">TKIT-SDIT Auladi Cabang Pakjo</h5>
			  <p class="lead my-4" style="font-size:17px;">Jl. Inspektur Marzuki No 834 Pakjo. Kelurahan Siring Agung. Kecamatan Ilir Barat 1 - Palembang</p>
			  <p class="lead my-4" style="font-weight: bold; font-size:17px;"><i class="fa fa-phone" aria-hidden="true"  style="color: black; font-weight: bold;"></i>&nbsp;0711-420600</p>
				
			</div>
		  </div>
		  <div class="text-center my-3">
			  
				<p class="lead" style="font-weight: bold;">Temukan Kami</p>
				<span>
					<a class="mx-4" style="font-size: 2rem;" href="https://www.facebook.com/sitauladipalembang/" target="_blank"><img src="<?= base_url()?>assets\images\fb.png" alt=""></a>  
					<a class="mx-4" style="font-size: 2rem;" href="https://www.instagram.com/auladi_official/" target="_blank"><img src="<?= base_url()?>assets\images\ig.png" alt=""></a>  
					<a class="mx-4" style="font-size: 2rem;" href="https://www.youtube.com/channel/UCkt85mcWronFYhdQ2YI0taQ" target="_blank"><img src="<?= base_url()?>assets\images\yt.png" alt=""></a>
				</span>
				<p class="text-muted lead my-4">&copy; 2020 Musi Teknologi Nusa</p>
			  
		  </div>
		</div>
	  </footer>
	
	<!-- Optional JavaScript -->
	<script>
		$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
			if (!$(this).next().hasClass('show')) {
				$(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
			}
			var $subMenu = $(this).next('.dropdown-menu');
			$subMenu.toggleClass('show');


			$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
				$('.dropdown-submenu .show').removeClass('show');
			});


			return false;
		});
		</script>
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>