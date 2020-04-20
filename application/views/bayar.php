<section id="bayar" class="video-sec-area pb-100 pt-40" id="about">
	<div class="container">
		
		<div class="row justify-content-start align-items-center">
			<div class="col-sm-12" id="bayar_p">

				<h2 ><i class="fa fa-money" style="margin-right:5px;margin-bottom: 40px;margin-top:40px"></i>Pembayaran</h2>
				<h3 style="margin-bottom:30px"><b>Nomor ID Transaksi :</b> <?= $trx->id_transaksi ?></h3>
				<h3><b>Jumlah Yang Harus Anda Bayar : </b> Rp. <?= $trx->jumlah_trx ?></h3>
				<p style="margin-bottom:50px">( Jumlah Yang Anda Bayar Harus Sesuai Dengan Jumlah Diatas Sampai Digit Terakhir. Karena 3 Digit Terakhir Digunakan Sebagai Kode Transaksi Anda )</p>
				<?php if($trx->metode_trx == "Transfer Bank"){ ?>
					<p style="margin-bottom:30px;font-size:1.4em;"><b style="color:#34b656 !important">Silahkan Transfer Ke : </b></p>
					<h3 style="margin-bottom:30px"><b>Nomor Rekenening :</b> <?= $tentang->no_rek ?></h3>
					<h3 style="margin-bottom:30px"><b>Bank :</b> <?= $tentang->bank ?></h3>
					<h3 style="margin-bottom:40px"><b>Atas Nama :</b> <?= $tentang->atas_nama ?></h3>
					<p style="margin-bottom:50px">( Jika Dalam Waktu 1 X 24 Jam Anda Tidak Melakukan Konfirmasi Pembayaran, Maka Transaksi Kami Nyatakan Dibatalkan )</p>
					<div id="konf" data-toggle="modal" data-target="#myModal" class="btn btn-success"><i class="fa fa-money" style="margin-right:5px;"></i>Konfirmasi Transaksi</div>
					<a href="<?php echo base_url('user/status/'.$_SESSION['id_user']).'#status' ?>">
					<button id="lihat" class="btn btn-info"><i class="fa fa-eye" style="margin-right:5px;"></i>Lihat Status Transaksi</button>
				</a>
				<?php }else if($trx->metode_trx == "COD (Cash On Delivery)"){ ?>
					<p style="margin-bottom:30px;margin-top:50px;font-size:1.4em;"><b style="color:#34b656 !important">Silahkan Hubungi Kami Ke : </b></p>
					<h3 style="margin-bottom:30px"><b>Nomor Handphone :</b> <?= $tentang->hp_tentang ?></h3>
					<p style="margin-bottom:50px">( Kirim WA atau SMS ke nomor diatas. Dengan Format TRANSAKSI#(nomor id transaksi Anda)#(jumlah uang yang harus dibayarkan, sesuai yang diatas). )</p>
					<p style="margin-bottom:50px">( Jika Dalam Waktu 1 X 24 Jam Anda Tidak Melakukan Konfirmasi Pembayaran Ke Nomor Handphone Kami, Maka Transaksi Kami Nyatakan Dibatalkan )</p>
					<a href="<?php echo base_url('user/status/'.$_SESSION['id_user']).'#status' ?>">
					<button id="lihat" class="btn btn-info"><i class="fa fa-eye" style="margin-right:5px;"></i>Lihat Status Transaksi</button>
				</a>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: none">
				<h2 style="text-align: center;"><span class="fa fa-handshake-o" style="margin-right:5px;"></span>Konfirmasi Transaksi</h2>
				<button type="button" class="close" data-dismiss="modal">&times;</button>

			</div>
			<?= form_open_multipart('user/konfirmasi/'.$trx->id_transaksi) ?>
			<div class="modal-body" style="padding-top: 25px">


				<div class="row" style="margin-bottom:30px">
					<div class="col-sm-4">
						<label>Upload Bukti Pembayaran : </label>
					</div>
					<div class="col-sm-8">
						<input type="file" name="bukti">
					</div>
					<br>
					<br>
				</div>
				<div class="row" style="margin-bottom:30px">
					<div class="col-sm-4">
						<label>No Rekening Anda : </label>
					</div>
					<div class="col-sm-8">
						<input type="text" name="rek-buk">
					</div>
					<br>
					<br>
				</div>
				<div class="row" style="margin-bottom:30px">
					<div class="col-sm-4">
						<label>Bank Anda : </label>
					</div>
					<div class="col-sm-8">
						<input type="text" name="bank-buk">
					</div>
					<br>
					<br>
				</div>
				<div class="row" style="margin-bottom:30px">
					<div class="col-sm-4">
						<label>Atas Nama Rekening Anda : </label>
					</div>
					<div class="col-sm-8">
						<input type="text" name="an-buk">
					</div>
					<br>
					<br>
				</div>
				<?php if($trx->status_trx == 0){ ?>
				<div class="row" style="margin-bottom:30px">
					<div class="col-sm-12">
						<button id="checkout_s" class="btn btn-success" style="margin-left:auto;margin-right:auto;"><i class="fa fa-handshake-o" style="margin-right:5px;"></i>Konfirmasi</button>
					</div>
				</div>
				<?php } ?>
				
			</div>
			<?= form_close() ?>
			<div class="modal-footer" style="border-top: none">
			</div>
		</div>

	</div>
</div> 