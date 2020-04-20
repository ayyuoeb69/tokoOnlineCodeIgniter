		<footer id="footer" class="footer-area section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>About Us</h6>
							<p>
								<?php echo $tentang->isi_tentang; ?>
							</p>
							<p class="footer-text">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">me</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</p>								
						</div>
					</div>
					<div class="col-lg-5  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>Alamat</h6>
							<p>
								<?php echo $tentang->alamat_tentang; ?>
							</p>
							<p> <b> Nomor HP : </b>
								<?php echo $tentang->hp_tentang; ?>
							</p>
							<p> <b>Email :  </b>
								<?php echo $tentang->email_tentang; ?>
							</p>
							
						</div>
					</div>						
					<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
						<div class="single-footer-widget">
							<h6>Follow Us</h6>
							<p>Let us be social</p>
							<div class="footer-social d-flex align-items-center">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div>							
				</div>
			</div>
		</footer>	
		<script src="<?php echo base_url('assets/js/vendor/jquery-2.2.4.min.js') ?>"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="<?php echo base_url('assets/js/vendor/bootstrap.min.js') ?>"></script>			
		
		<script src="<?php echo base_url('assets/js/easing.min.js') ?>"></script>			
		<script src="<?php echo base_url('assets/js/hoverIntent.js') ?>"></script>
		<script src="<?php echo base_url('assets/js/superfish.min.js') ?>"></script>	
		<script src="<?php echo base_url('assets/js/jquery.ajaxchimp.min.js') ?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>	
		<script src="<?php echo base_url('assets/js/owl.carousel.min.js') ?>"></script>			
		<script src="<?php echo base_url('assets/js/jquery.sticky.js') ?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.nice-select.min.js') ?>"></script>			
		<script src="<?php echo base_url('assets/js/parallax.min.js') ?>"></script>	
		<script src="<?php echo base_url('assets/js/waypoints.min.js') ?>') ?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.counterup.min.js') ?>"></script>		
		<script src="<?php echo base_url('assets/js/main.js') ?>"></script>	
		<script>

			$(document).ready(function(){

				$(".filter-button").click(function(){
					var value = $(this).attr('data-filter');

					if(value == "all")
					{
						$('.filter').show('1000');
					}
					else
					{
						$(".filter").not('.'+value).hide('3000');
						$('.filter').filter('.'+value).show('3000');

					}

					if ($(".filter-button").removeClass("active")) {
						$(this).removeClass("active");
					}
					$(this).addClass("active");
				});
			});
			/*	end gallery */

			$(document).ready(function(){
				$(".fancybox").fancybox({
					openEffect: "none",
					closeEffect: "none"
				});
			});


		</script>
		<script src="<?php echo base_url('admin_assets/datatables/js/jquery.dataTables.min.js') ?>"></script>
		<script src="<?php echo base_url('admin_assets/datatables-plugins/dataTables.bootstrap.min.js') ?>"></script>
		<script src="<?php echo base_url('admin_assets/datatables-responsive/dataTables.responsive.js') ?>"></script>

		<script>
			$(document).ready(function() {
				$('#dataTables-example').DataTable({
					responsive: true
				});
			});
		</script>
	</body>
	</html>