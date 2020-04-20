<section id="info" class="video-sec-area pb-100 pt-40" id="about">
	<div class="container">
		
		<div class="row justify-content-start align-items-center">
			<div class="col-sm-12" id="info_p">
				<?php echo form_open('user/info_user'); ?>
				<h2 ><i class="fa fa-info-circle" style="margin-right:5px;margin-bottom: 40px;margin-top:40px"></i>Info Account</h2>
				<div class="row">
					<div class="col-sm-3">
						<label style="text-align: left !important;margin-left:40px">Nama Lengkap : </label>
					</div>
					<div class="col-sm-9">
						<input type="text" name="nama-us" value="<?= $users->nama_user ?>" style="text-transform:capitalize;" required>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-3">
						<label style="text-align: left !important;margin-left:40px">Email : </label>
					</div>
					<div class="col-sm-9">
						<input type="email" name="email-us" value="<?= $users->email_user ?>" required>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-3">
						<label style="text-align: left !important;margin-left:40px">Nomor Handphone : </label>
					</div>
					<div class="col-sm-9">
						<input type="text" name="hp-us" value="<?= $users->hp_user ?>" required>
					</div>
					<br>
				</div>

				<br>
				<div class="row">
					<div class="col-sm-3">
						<label style="text-align: left !important;margin-left:40px; ">Alamat Lengkap : </label>
					</div>
					<div class="col-sm-9">
						<textarea style="height: 200px;width: 70%" name="alamat-us" required><?= $users->alamat ?></textarea>
					</div>
				</div>
				<br>
				<br>
				<button class="btn btn-success" style="margin-left:40px;"><span class="fa fa-save" style="margin-right:5px; "></span>SIMPAN</button>
				<?= form_close(); ?>
			</div>

		</div>
	</div>
</section>