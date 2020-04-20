
<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">

  <!-- /top tiles -->
  <div class="row" style="margin-bottom: 30px ">
  <div class="col-sm-6">
  <h1 style="margin-bottom:30px">Menu Produk</h1>
</div>
<div class="col-sm-6" style="text-align: right;padding-top: 10px">
  <button class="btn btn-success" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span>Tambah Produk</button>
</div>
</div>
  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" style="background-color: #fff">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Product</th>
        <th>Harga</th>
        <th>Stock</th>
        <th>Kategori</th>
        <th>Tanggal Upload</th>
        <th>Gambar</th>
        <th>Keterangan</th>
        <th>Action</th>
      </tr>
    </thead>

    <tbody>
      <?php $i = 1; foreach ($produk as $k) {
        ?>
    
        <tr class="odd gradeX">

          <td><?= $i ?></td>
          <td><?= $k->nama_produk ?></td>
          <td>Rp. <?= $k->harga_produk ?></td>
          <td><?= $k->stok_produk ?></td>
          <td><?= $k->nama_kategori ?></td>
          <td><?= $k->tanggal_upload ?></td>
          <td>
            <a href="<?php echo base_url('upload/produk/'.$k->foto_produk)?>"><img src="<?php echo base_url('upload/produk/'.$k->foto_produk)?>" style="width: 100%"></a>
          </td>
          <td><?= $k->keterangan_produk ?></td>
          <td>
           <button class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $k->id_produk; ?>"><span class="glyphicon glyphicon-pencil" style="margin-right:5px"></span>Edit</button>
           <a href="<?php echo base_url('admin/hapus_produk/'.$k->id_produk) ?>">
           <button class="btn btn-danger"><span class="glyphicon glyphicon-trash" style="margin-right:5px"></span>Hapus</button>
         </a>
          </td>
        </tr>
        <?php $i++; } ?>
    </tbody>
  </table>
</div>
</div>
<?php foreach ($produk as $k) {
        ?>
<div id="myModal<?php echo $k->id_produk; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Produk</h4>
      </div>
      <div class="modal-body" style="padding-top: 50px;padding-bottom: 50px;overflow: auto;">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
        <?php echo form_open_multipart('admin/edit_produk/'.$k->id_produk); ?>
        <label>Nama Produk</label>
        <br>
        <span style="visibility: hidden;">Rp. </span><input type="text" name="namaeditp" value="<?php echo $k->nama_produk ?>">
        <br>
        <br>
        <br>
        <label>Harga Produk</label>
        <br>
        Rp. <input id="inputku" type="text" name="hargaeditp" value="<?php echo $k->harga_produk ?>" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);">
        <br>
        <br>
        <br>
        <label>Stok Produk</label>
        <br>
        <span style="visibility: hidden;">Rp.</span> <input type="text" name="qtyeditp" value="<?php echo $k->stok_produk ?>" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);">
        <br>
        <br>
        <br>
         <label>Kategori Produk</label>
        <br>
       <span style="visibility: hidden;"> Rp.</span> <select class="form-control" id="katp" name="kateditp">
    <option value="<?php echo $k->id_kategori ?>"><?php echo $k->nama_kategori ?></option>
    <?php foreach ($kategori as $kat) {
      if($kat->id_kategori != $k->id_kategori){
        ?>

        <option value="<?php echo $kat->id_kategori ?>"><?php echo $kat->nama_kategori ?></option>
    <?php
      }
     ?>
     <?php 
    } ?>
  </select>
        <br>
        <br>
        <br>
         <label>Foto Produk</label>
        <br>
        <input type="file" name="fotoeditp" style="margin-left: 25px">
        <input type="hidden" name="sementara" value="<?php echo $k->foto_produk ?>">
        <br>
        <br>
        <br>
        <label>Keterangan Produk</label>
        <br>
        <span style="visibility: hidden;">Rp.</span> <textarea style="width: 400px; height: 200px" cols="150" name="keteditp"><?php echo $k->keterangan_produk ?></textarea>
        <br>
        <br>
        <br>
        <button class="btn btn-success" style="margin-left:25px"><span class="glyphicon glyphicon-pencil" style="margin-right: 5px"></span>Edit Produk</button>
      <?php echo form_close(); ?>
        </div>
        <div class="col-sm-3">
        </div>
      </div>
      <div class="modal-footer" style="border:none">

      </div>
    </div>

  </div>
</div>
<?php } ?>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Tambah Produk</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body" style="padding-top: 50px;padding-bottom: 50px;overflow: auto;">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
        <?php echo form_open_multipart('admin/tambah_produk'); ?>
        <label>Nama Produk</label>
        <br>
        <span style="visibility: hidden;">Rp. </span><input type="text" name="namap" placeholder="Contoh : Bubuk Kopi">
        <br>
        <br>
        <br>
        <label>Harga Produk</label>
        <br>
        Rp. <input id="inputku" type="text" name="hargap" placeholder="Contoh : 20000" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);">
        <br>
        <br>
        <br>
        <label>Stok Produk</label>
        <br>
        <span style="visibility: hidden;">Rp.</span> <input type="text" name="qtyp" placeholder="Contoh : 5" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);">
        <br>
        <br>
        <br>
         <label>Kategori Produk</label>
        <br>
       <span style="visibility: hidden;"> Rp.</span> <select class="form-control" id="katp" name="katp">
    <option>-- Pilih Kategori --</option>
    <?php foreach ($kategori as $k) {
     ?>
     <option value="<?php echo $k->id_kategori ?>"><?php echo $k->nama_kategori ?></option>
     <?php 
    } ?>
  </select>
        <br>
        <br>
        <br>
         <label>Foto Produk</label>
        <br>
        <input type="file" name="fotop" style="margin-left: 25px">
        
        <br>
        <br>
        <br>
        <label>Keterangan Produk</label>
        <br>
        <span style="visibility: hidden;">Rp.</span> <textarea style="width: 400px; height: 200px" cols="150" name="ketp"></textarea>
        <br>
        <br>
        <br>
        <button class="btn btn-success" style="margin-left:25px"><span class="glyphicon glyphicon-plus"></span>Tambah Produk</button>
      <?php echo form_close(); ?>
        </div>
        <div class="col-sm-3">
        </div>
      </div>
      <div class="modal-footer" style="border:none">

      </div>
    </div>

  </div>
</div>
<!-- /page content -->

<!-- footer content -->
