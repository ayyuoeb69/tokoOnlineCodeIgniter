


<!-- End banner Area -->	

<!-- Start video-sec Area -->
<section class="video-sec-area pb-100 pt-40" id="about">
	<div class="container">
		<div class="row justify-content-start align-items-center">
			<div class="col-lg-6 video-right justify-content-center align-items-center d-flex" style="background-image: none">

				<a class="play-btn" href="<?php echo base_url('upload/tentang/'.$tentang->foto_tentang); ?>"><img class="img-fluid" src="<?php echo base_url('upload/tentang/'.$tentang->foto_tentang); ?>" alt=""></a>
			</div>						
			<div class="col-lg-6 video-left">
				<h6><?php echo $tentang->judul_tentang; ?></h6>
				<h1>Tentang Kami</h1>
				<p>
					<?php echo $tentang->isi_tentang; ?>
				</p>
			</div>
		</div>
	</div>	
</section>
<!-- End video-sec Area -->

<!-- Start menu Area -->
<section class="menu-area section-gap" id="coffee">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10" style="margin-top:40px;margin-bottom:20px">Produk Kami</h1>
				</div>
			</div>
		</div>	
		<div align="center">
			<button class="filter-button" data-filter="all" onclick="semua()">All</button>
			<?php foreach ($kategori as $p) {
							# code...
				?>
				<button class="filter-button" data-filter="<?= $p->id_kategori ?>" onclick="klik(<?= $p->id_kategori ?>)"><?= $p->nama_kategori ?></button>
			<?php } ?>
		</div>					
		<div id="postsList" style="overflow: auto;display: block;">
					<!-- <div class="row">
						<div class="col-lg-4">
							<div class="single-menu" >
								<div class="title-div justify-content-between d-flex">
									<h4>Cappuccino</h4>
									
								</div>
								<img src="img/ff.jpg" style="width: 100%;margin-bottom: 20px">
								<p class="price" style="margin-bottom: 20px">
									Rp. 40.000
								</p>
								<p>Banyak Order : </p><input type="number" name="banyak">
								<br><br>
								<button class="btn" style="background-color: #ffe48c">Checkout</button>							
							</div>
						</div>											
					</div> -->
				</div>
				<div style="margin-top: 10px;text-align: center;" id="pagination">
					<ul class="pagination"></ul>
				</div>
			</div>	
		</section>
		<!-- End menu Area -->

		<!-- Start gallery Area -->
		<section class="gallery-area section-gap" id="gallery">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-60 col-lg-10">
						<div class="title text-center">
							<h1 class="mb-10">Gallery</h1>

						</div>
					</div>
				</div>						
				<div class="row">
					<div class="col-lg-4">
						<a href="<?= base_url('assets/img/g1.jpg') ?>" class="img-pop-home">
							<img class="img-fluid" src="<?= base_url('assets/img/g1.jpg') ?>" alt="">
						</a>	
						<a href="<?= base_url('assets/img/g2.jpg') ?>" class="img-pop-home">
							<img class="img-fluid" src="<?= base_url('assets/img/g2.jpg') ?>" alt="">
						</a>	
					</div>
					<div class="col-lg-8">
						<a href="<?= base_url('assets/img/g3.jpg') ?>" class="img-pop-home">
							<img class="img-fluid" src="<?= base_url('assets/img/g3.jpg') ?>" alt="">
						</a>	
						<div class="row">
							<div class="col-lg-6">
								<a href="<?= base_url('assets/img/g4.jpg') ?>" class="img-pop-home">
									<img class="img-fluid" src="<?= base_url('assets/img/g4.jpg') ?>" alt="">
								</a>	
							</div>
							<div class="col-lg-6">
								<a href="<?= base_url('assets/img/g5.jpg') ?>" class="img-pop-home">
									<img class="img-fluid" src="<?= base_url('assets/img/g5.jpg') ?>" alt="">
								</a>	
							</div>
						</div>
					</div>
				</div>
			</div>	
		</section>
		<!-- End gallery Area -->

		<!-- Start review Area -->
		<section class="review-area section-gap" id="review">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-60 col-lg-10">
						<div class="title text-center">
							<h1 class="mb-10" style="margin-top: 40px">Testimoni</h1>
						</div>
					</div>
				</div>						
				<div class="row">
					<div class="col-lg-6 col-md-6 single-review">

						<div class="title d-flex flex-row">
							<h4>lorem ipusm</h4>

						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
					</div>	
					<div class="col-lg-6 col-md-6 single-review">

						<div class="title d-flex flex-row">
							<h4>lorem ipusm</h4>

						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
					</div>	
					<div class="col-lg-6 col-md-6 single-review">

						<div class="title d-flex flex-row">
							<h4>lorem ipusm</h4>

						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
					</div>	
					<div class="col-lg-6 col-md-6 single-review">

						<div class="title d-flex flex-row">
							<h4>lorem ipusm</h4>

						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
					</div>	
				</div>

			</div>	
		</section>
		<!-- End review Area -->

		<!-- Start blog Area -->
		<section class="blog-area section-gap" id="blog">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-60 col-lg-10">
						<div class="title text-center">
							<h1 class="mb-10" style="margin-top:40px">Quotes for you</h1>
						</div>
					</div>
				</div>						
				<div class="row">

					<div class="col-lg-12 col-md-12 single-blog">
						<center>
							<img class="img-fluid" src="<?= base_url('assets/img/b2.jpg') ?>" alt="" style="margin-bottom: 50px">

							<h3 style="color: #b68834;font-weight: 600;font-family: 'Poppins';"> " <?php echo $tentang->quote_tentang; ?>  "</h3>

						</center>
					</div>						
				</div>
			</div>	
		</section>
		<!-- End blog Area -->


		<!-- start footer Area -->		

		<!-- End footer Area -->	

		<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog modal-lg">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header" style="border-bottom: none">
						<button type="button" class="close" data-dismiss="modal">&times;</button>

					</div>
					<div class="modal-body">

						<div class="row">
							<div class="col-sm-6">
								<?php echo form_open('auth/login_user'); ?>
								<center>
									<h3>Login Form</h3>
									<br>
									<br>
								</center>
								<label style="text-align: left !important;margin-left:40px">Username : </label>
								<br>
								<center>
									<input type="text" name="username-log" placeholder="Input Your Username" style="text-transform:capitalize;">
								</center>
								<br>
								<label style="text-align: left !important;margin-left:40px">Password : </label>
								<br>
								<center>
									<input type="password" name="pass-log" placeholder="Input Your Password">
									<br>
									<br>
									<br>
									<br>
									<p><?= $img_capt_log; ?></p>
									
								</center>
								<label style="text-align: left !important;margin-left:40px">Input Captcha : </label>
								<center>
									
									<input type="text" name="capt-log" placeholder="Input The Captcha">
									<br>
									<br>
									<button class="btn btn-success" style="margin-top:25px;background-color:#413333;border:none"><i class="fa fa-sign-in" style="margin-right:5px"></i>Login</button>
								</center>
								<?php echo form_close(); ?>
							</div>
							
							<div class="col-sm-6" style="border-left: 1px solid #ffe48c">
								<?php echo form_open('auth/register'); ?>
								<center>
									<h3>Register Form</h3>
								</center>
								<br>
								<br>
								<label style="text-align: left !important;margin-left:40px; ">Username : </label>
								<br>
								<center>
									<input type="text" name="username-reg" placeholder="Input Your Username" style="text-transform:capitalize;" required>
								</center>
								<br>
								<label style="text-align: left !important;margin-left:40px">Nama Lengkap : </label>
								<br>
								<center>
									<input type="text" name="nama-reg" placeholder="Input Your Nama Lengkap" style="text-transform:capitalize;" required>
								</center>
								<br>
								<label style="text-align: left !important;margin-left:40px">Email : </label>
								<br>
								<center>
									<input type="email" name="email-reg" placeholder="Input Your Email" required>
								</center>
								<br>
								<label style="text-align: left !important;margin-left:40px">Nomor Handphone : </label>
								<br>
								<center>
									<input type="text" name="hp-reg" placeholder="Input Your Handphone" required>
								</center>

								<br>
								<label style="text-align: left !important;margin-left:40px">Password : </label>
								<br>
								<center>
									<input type="password" name="pass-reg" placeholder="Input Your Password" required>
								</center>

								<br>
								<label style="text-align: left !important;margin-left:40px">Confirm Password : </label>
								<br>
								

								<center>
									<input type="password" name="con-pass-reg" placeholder="Input Your Confirm Password" required>
									<br>
									<br>
									<br>
									<br>
									<p><?= $img_capt_reg; ?></p>
									
								</center>
								<label style="text-align: left !important;margin-left:40px">Input Captcha : </label>
								<center>
									
									<input type="text" name="capt-reg" placeholder="Input The Captcha" required>
									<br>
									<br>
									<button class="btn btn-success" style="margin-top:25px;background-color:#413333;border:none"><i class="fa fa-user" style="margin-right:5px"></i>Register</button>

								</center>
								<?php echo form_close(); ?>
							</div>
							
						</div>

					</div>
					<div class="modal-footer" style="border-top: none">
					</div>
				</div>

			</div>
		</div> 
		

		
		<script type='text/javascript'>
			function klik(as) {
				$('#pagination').on('click','.pagination li a',function(e){

					e.preventDefault(); 
					var pageno = $(this).attr('data-ci-pagination-page');
					loadProduk(pageno, as);
				});
				loadProduk(0, as);
				function loadProduk(pagno, as){

					$.ajax({
						url: '<?=base_url()?>halaman/loadRecordP/'+pagno+'/'+as,
						type: 'get',
						dataType: 'json',
						success: function(response){
							$('#pagination').html(response.pagination);
							createTable(response.result,response.row);
						}

					});
				}
			

}
	$(document).ready(function(){

     // Detect pagination click
     $('#pagination').on('click','.pagination li a',function(e){
     	e.preventDefault(); 
     	var pageno = $(this).attr('data-ci-pagination-page');
     	loadPagination(pageno);
     });

     loadPagination(0);

     // Load pagination
     function loadPagination(pagno){
     	$.ajax({
     		url: '<?=base_url()?>halaman/loadRecord/'+pagno,
     		type: 'get',
     		dataType: 'json',
     		success: function(response){
     			$('#pagination').html(response.pagination);
     			createTable(response.result,response.row);
     		}

     	});
     }

     // Create table list
    
});
	function createTable(result,sno){
					sno = Number(sno);
					$('#postsList').empty();
					for(index in result){
						var id = result[index].id_produk;
						var nama = result[index].nama_produk;
						var harga = result[index].harga_produk;
						var foto = result[index].foto_produk;
						var stok = result[index].stok_produk;
						var kat = result[index].kategori_produk; 
						var kate = result[index].nama_kategori;
						var ket = result[index].keterangan_produk;
						sno+=1;

						var tr = "<div class='gallery_product col-lg-4 filter "+ kat +"' style='float:left'>";
						// tr += "<form action='<?= base_url() ?>user/proses_cart/"+id+"' method='post' >";
						tr += "<div class=' single-menu ' id='postsList'>";
						tr += "<div class='title-div justify-content-between d-flex'>";
						tr += "<h4>"+nama+"</h4>";
						tr += "</div><div class='img-cover'>";
						tr += "<img onload='tit(" + id + ")' class='img-produk img" + id + "' src='<?= base_url() ?>upload/produk/" + foto + " ' style='width: 100%;margin-bottom: 30px;'>";
						tr += "</div><p class='price' style='margin-bottom: 10px;margin-top:20px'>Rp. " + harga +"</p>";
						tr += "<p style='margin-bottom: 10px'> Stok Barang : <b>"+stok+"</b></p>";
						tr += "<br>";
						tr += "<a <?php if(isset($_SESSION['id_user'])){ ?>href='<?= base_url() ?>user/proses_cart/"+id+"' <?php } else if(!isset($_SESSION['id_user'])) { ?> href='#' data-toggle='modal' data-target='#myModal' <?php } ?>";
						tr += "<button class='btn' style='background-color: #ffe48c'><span class='fa fa-shopping-cart' style='margin-right:5px'></span>Checkout</button>";
						tr += "</a>";
						tr += "<p style='margin-top:20px'><a href='#' data-toggle='modal' data-target='#myModal"+id+"'><b><i class='fa fa-info-circle' style='margin-right:5px'></i>Detail Product...</b></a></p></div>";
						// tr += "</form>";
						tr += "</div>";
						tr += "<div id='myModal"+id+"' class='modal fade' role='dialog'>";
						tr += "<div class='modal-dialog modal-lg'>";
						tr += "<div class='modal-content'>";
						tr += "<div class='modal-header' style='border-bottom: none'>";
						tr += "<h2><b><i class='fa fa-info-circle' style='margin-right:5px'></i>Info Product</b></h2>";
						tr += "<button type='button' class='close' data-dismiss='modal'>&times;</button>";
						tr += "</div>";
						tr += "<div class='modal-body'>";

						tr += "<div class='row'>";


						tr += "<div class='col-sm-6'>";
						tr += "<img style='width:100%' src='<?= base_url() ?>upload/produk/" + foto + "' alt=''>";
						tr += "</div>";

						tr += "<div class='col-sm-6'";
						tr += "<p><b>Nama Produk : </b>"+nama+"</p>";
						tr += "<p><b>Harga Produk : </b>Rp. "+harga+"</p>";
						tr += "<p><b>Kategori Produk : </b>"+kate+"</p>";
						tr += "<p><b>Stok Produk : </b>"+stok+"</p>";
						tr += "<p><b>Keterangan Produk : </b><br>"+ket+"</p>";
						tr += "</div>";


						tr += "</div>";

						tr += "</div>";
						tr += "<div class='modal-footer' style='border-top: none'>";

						tr += "</div>";
						tr += "</div>";

						tr += "</div>";
						tr += "</div>";
						// tr += "<div id='myModal"+id+"' class='modal fade' role='dialog'>";
						// tr += "<div class='modal-dialog modal-lg'>";
						// tr += "<div class='modal-content'>";
						// tr += "<div class='modal-header' style='border-bottom: none'>";
						// tr += "<button type='button' class='close' data-dismiss='modal'>&times;</button>";
						// tr += "</div>";
						// tr += "<div class='modal-body'>";

						// tr += "<div class='row'>";


						// tr += "<div class='col-sm-6'>";
						// tr += "<p>"+nama+"</p>"
						// tr += "</div>";

						// tr += "<div class='col-sm-6' style='border-left: 1px solid #ffe48c'>";

						// tr += "</div>";


						// tr += "</div>";

						// tr += "</div>";
						// tr += "<div class='modal-footer' style='border-top: none'>";

						// tr += "</div>";
						// tr += "</div>";

						// tr += "</div>";
						// tr += "</div>";
          // tr += "<td><a href='"+ link +"' target='_blank' >"+ title +"</a></td>";
          // tr += "<td>"+ content +"</td>";
          // tr += "</tr>";															

          $('#postsList').append(tr);

      }
  }
	function semua() {

     // Detect pagination click
     $('#pagination').on('click','.pagination li a',function(e){
     	e.preventDefault(); 
     	var pageno = $(this).attr('data-ci-pagination-page');
     	loadPagination(pageno);
     });

     loadPagination(0);

     // Load pagination
     function loadPagination(pagno){
     	$.ajax({
     		url: '<?=base_url()?>halaman/loadRecord/'+pagno,
     		type: 'get',
     		dataType: 'json',
     		success: function(response){
     			$('#pagination').html(response.pagination);
     			createTable(response.result,response.row);
     		}

     	});
     }

    
}
</script>
<script type='text/javascript'>
	function tit(id){
		var tinggi;
		var panjang;
		var box;
		 // tinggi = document.getElementsByClassName("img-produk");
		 var logoHeight = $('.img'+id).height();
		 box = $('.img-cover').height();
		 if(logoHeight < box)
		 	$('.img'+id).css('height', '100%');

		}
	</script>

