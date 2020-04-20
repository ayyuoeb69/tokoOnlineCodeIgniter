 <div class="right_col" role="main">
 	<div class="row" style="margin-bottom: 30px ">
 		<div class="col-sm-6">
 			<h1 style="margin-bottom:30px">Transaksi</h1>
 		</div>
 	</div>
 		<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" style="background-color: #fff;margin-bottom: 0px">
				<thead>
					<tr>
						<th>No</th>
						<th>ID Transaksi</th>
						<th>Waktu Transaksi</th>
						<th>Total Harga</th>
						<th>Metode Pembayaran</th>
						<th>Status</th>
						<th>Batalkan</th>
					</tr>
				</thead>

				<tbody>
					<?php $i=1; foreach ($status as $s) {
						if($s->user_trx != 0){
						?>
						
						<tr class="odd gradeX">

							<td> <?= $i; ?> </td>
							<td><a class="tran" href="<?php echo base_url('admin/detail/'.$s->id_transaksi) ?>"><?= $s->id_transaksi; ?></a></td>
							<td><?= $s->waktu_trx; ?></td>
							<td>Rp. <?= $s->jumlah_trx; ?></td>
							<td><?= $s->metode_trx; ?></td>
							<td><?php if($s->status_trx == 0){
								echo "User Belum Konfirmasi Transaksi";
								if($s->metode_trx == "COD (Cash On Delivery)"){
									?>
									<br>
								<a href="<?php echo base_url('admin/beli_setuju/'.$s->id_transaksi) ?>">
								<button class="btn btn-success">Konfirmasi</button>
								</a>
								<?php
								}
							}else if($s->status_trx == 1){
								echo "Menunggu Konfirmasi Admin";
								?>
								<a href="<?= base_url('admin/konfirmasi/'.$s->id_transaksi) ?>">
								<button class="btn btn-info">Lihat Konfirmasi</button>
								</a>
								<?php
							}else if($s->status_trx == 2 && $s->metode_trx != "COD (Cash On Delivery)"){
								echo "Proses Pengiriman Barang";?>
								<a href="#" data-toggle="modal" data-target="#myModal<?= $s->id_transaksi ?> ">
								<button class="btn btn-warning">Input Nomor Resi</button>
								</a>
								<?php
							}else if($s->status_trx == 2 && $s->metode_trx == "COD (Cash On Delivery)"){
								echo "Proses Pengiriman Barang";
							}
							else if($s->status_trx == 3){
								echo "Barang Telah Dikirm";?>
								<a href="#" data-toggle="modal" data-target="#myModal<?= $s->id_transaksi ?> "><br>
								<button class="btn btn-default">Edit Nomor Resi</button>
								</a>
								<?php
							}else if($s->status_trx == 4){
								echo "Transaksi Ditolak";
							}else if($s->status_trx == 5){
								echo "Transaksi Selesai";
							}?></td>
							<td>
								<?php
								if($s->status_trx == 5){
								echo "Transaksi Selesai";
							}
								if($s->status_trx != 4 && $s->status_trx != 3  && $s->status_trx != 5 && $s->metode_trx != "COD (Cash On Delivery)"){
							
								 ?>
								 <a href="<?php echo base_url('admin/beli_batal/'.$s->id_transaksi) ?>">
								<button class="btn btn-danger"><span class="fa fa-close" style="margin-right:5px"></span>Batal</button>
							</a>
							<?php }else if($s->status_trx == 4){
								echo "Ditolak";
							}
							if($s->status_trx == 3 && $s->metode_trx != "COD (Cash On Delivery)"){
								?>
								<a href="<?php echo base_url('admin/sukses/'.$s->id_transaksi) ?>">
								<button class="btn btn-success">Selesai</button>
								</a>
								<?php
							}
							if($s->status_trx == 2 && $s->metode_trx == "COD (Cash On Delivery)"){
								?>
								<a href="<?php echo base_url('admin/sukses/'.$s->id_transaksi) ?>">
								<button class="btn btn-success">Selesai</button>
								</a>
								<?php
							}
								if($s->status_trx != 4 && $s->status_trx != 2  && $s->status_trx != 5 && $s->metode_trx == "COD (Cash On Delivery)"){
							
								 ?>
								 <a href="<?php echo base_url('admin/beli_batal/'.$s->id_transaksi) ?>">
								<button class="btn btn-danger"><span class="fa fa-close" style="margin-right:5px"></span>Batal</button>
							</a>
							<?php } ?>
							</td>
						</tr>
						<?php } $i++; } ?>
					</tbody>
				</table>
 
 </div>
</div>
<?php $i = 1; foreach($status as $s) { ?>
<div id="myModal<?php echo $s->id_transaksi; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">No Resi JNE | <?= $s->id_transaksi ?></h4>
      </div>
      <div class="modal-body" style="padding-top: 50px;padding-bottom: 50px;overflow: auto;">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-10">
        <?php echo form_open('admin/resi/'.$s->id_transaksi); ?>
        <label>Nomor Resi JNE</label>
        
        <span style="visibility: hidden;">Rp. </span><input type="text" name="resi" value="<?= $s->resi ?>">
        <br>
        <br>
        <button class="btn btn-success">Submit</button>
      <?php echo form_close(); ?>
        </div>
      </div>
      <div class="modal-footer" style="border:none">

      </div>
    </div>

  </div>
</div>
 <?php $i++; } ?>