
<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">

  <!-- /top tiles -->
  <div class="row" style="margin-bottom: 30px ">
  <div class="col-sm-6">
  <h1 style="margin-bottom:30px">Kategori Produk</h1>
</div>
<div class="col-sm-6" style="text-align: right;padding-top: 10px">
  <button class="btn btn-success" data-toggle="modal" data-target="#myModalkat"><span class="glyphicon glyphicon-plus"></span>Tambah Kategori</button>
</div>
</div>
  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" style="background-color: #fff">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Kategori</th>
        <th>Action</th>
      </tr>
    </thead>

    <tbody>
         <?php $i = 1; foreach($kategori as $kat) {
            
           ?>
        <tr class="odd gradeX">
       
           <td><?= $i; ?></td>
          <td style="width: 70%"><?= $kat->nama_kategori; ?></td>
          
          <td>
           <button class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $kat->id_kategori; ?>"><span class="glyphicon glyphicon-pencil" style="margin-right:5px"></span>Edit</button>
           <a href="<?php echo base_url('admin/hapus_kategori/'.$kat->id_kategori) ?>">
           <button class="btn btn-danger"><span class="glyphicon glyphicon-trash" style="margin-right:5px"></span>Hapus</button>
         </a>
          </td>
       
        </tr>
 <?php $i++; } ?>
    </tbody>
  </table>
</div>
</div>
<?php $i = 1; foreach($kategori as $k) { ?>
<div id="myModal<?php echo $k->id_kategori; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Kategori</h4>
      </div>
      <div class="modal-body" style="padding-top: 50px;padding-bottom: 50px;overflow: auto;">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-10">
        <?php echo form_open('admin/edit_kategori/'.$k->id_kategori); ?>
        <label>Nama Kategori</label>
        
        <span style="visibility: hidden;">Rp. </span><input type="text" name="kategorieditp" value="<?php echo $k->nama_kategori ?>">
        <br>
        <br>
        <br>
        
        <button class="btn btn-success"><span class="glyphicon glyphicon-pencil" style="margin-right: 5px"></span>Edit Kategori</button>
      <?php echo form_close(); ?>
        </div>
      </div>
      <div class="modal-footer" style="border:none">

      </div>
    </div>

  </div>
</div>
 <?php $i++; } ?>
<div id="myModalkat" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       
        <h4 class="modal-title">Tambah Kategori</h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body" style="padding-top: 50px;padding-bottom: 50px;overflow: auto;">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-10">
        <?php echo form_open('admin/tambah_kategori'); ?>
        <label>Nama Kategori</label>
        
        <span style="visibility: hidden;">Rp. </span><input type="text" name="kategorip" placeholder="Contoh : Kopi Arabica">
        <br>
        <br>
        <br>
        
        <button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span>Tambah Kategori</button>
      <?php echo form_close(); ?>
        </div>
      </div>
      <div class="modal-footer" style="border:none">

      </div>
    </div>

  </div>
</div>
<!-- /page content -->

<!-- footer content -->
