<div class="right_col" role="main">
	<div class="row" style="margin-top: 80px;margin-bottom: 30px ">
		<div class="col-sm-12">
			<h1 style="margin-bottom:30px">Detail Transaksi <?= $trx->id_transaksi ?></h1>
		</div>
	</div>
	<table width="100%" class="table table-responsive table-striped table-bordered table-hover" id="dataTables-example" style="background-color: #fff;margin-bottom: 0px">
		<thead>
			<tr>
				<th>No</th>
				<th>Foto</th>
				<th>Nama Produk</th>
				<th>Kategori</th>
				<th>Harga</th>
				<th>Banyak Barang</th>

			</tr>
		</thead>

		<tbody>
			<?php $i = 1; foreach($detail as $c) {

				?> 
				<input id="sem_id<?= $c->id_cart ?>" type="hidden" name="qty<?= $c->id_cart ?>" class="semm">
				<tr class="odd gradeX">

					<td> <?= $i; ?> </td>
					<td style="width: 30%"><img style="width: 100%" src="<?= base_url().'upload/produk/'.$c->foto_produk ?>"></td>
					<td><?= $c->nama_produk; ?></td>
					<td><?= $c->nama_kategori; ?></td>
					<td>Rp. <span id="hargap_id<?= $c->id_cart ?>" class="hargap"><?= $c->harga_produk; ?></span></td>
					<td><?= $c->qty_cart; ?></td>

				</tr>
				<?php $i++; } ?> 

			</tbody>
		</table>
		<a href="<?php echo base_url('admin/beli/')?>">
			<button class="btn btn-info" style="margin-top:30px"><span class="fa fa-hand-o-left" style="margin-right: 5px"></span>Kembali</button>
</a>
			<br>
			<div class="row" style="margin-top: 80px;margin-bottom: 30px ">
				<div class="col-sm-12">
					<h1 style="margin-bottom:30px">Detail User</h1>
				</div>
			</div>
			<div class="row" style="margin-bottom:50px;padding:20px">
			<?php $i = 1; foreach($users as $c) {

				?> 
				<div class="row" style="margin-bottom:30px">
					<div class="col-sm-4">
						<label>Username : </label>
					</div>
					<div class="col-sm-8">
						<p style="text-transform:capitalize;"><?= $c->username_user?></p>
					</div>
					<br>
					<br>
				</div>
				<div class="row" style="margin-bottom:30px">
					<div class="col-sm-4">
						<label>Nama User : </label>
					</div>
					<div class="col-sm-8">
						<p><?= $c->nama_user?></p>
					</div>
					<br>
					<br>
				</div>
				<div class="row" style="margin-bottom:30px">
					<div class="col-sm-4">
						<label>Email User : </label>
					</div>
					<div class="col-sm-8">
						<p><?= $c->email_user?></p>
					</div>
					<br>
					<br>
				</div>
				<div class="row" style="margin-bottom:30px">
					<div class="col-sm-4">
						<label>Nomor Handphone User : </label>
					</div>
					<div class="col-sm-8">
						<p><?= $c->hp_user?></p>
					</div>
					<br>
					<br>
				</div>
				<div class="row" style="margin-bottom:30px">
					<div class="col-sm-4">
						<label>Alamat Tujuan : </label>
					</div>
					<div class="col-sm-8">
						<p><?= $c->alamat?></p>
					</div>
					<br>
					<br>
				</div>
				<?php $i++; } ?> 
			</div>
		</div>
	</div>
