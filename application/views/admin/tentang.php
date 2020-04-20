
<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">

  <!-- /top tiles -->
  <div class="row" style="margin-bottom: 30px ">
    <div class="col-sm-6">
      <h1 style="margin-bottom:30px">Menu Tentang</h1>
    </div>

  </div>
  <?php echo form_open_multipart(base_url('admin/edit_tentang')); ?> 
  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" style="background-color: #fff">



    <tbody>
      <tr class="odd gradeX">
        <th style="width: 30%">Judul Toko Website</th>
        <td style="width: 70%"><input type="text" name="jdl-ttg" value="<?php echo $tentang->judul_tentang ?>" style="width: 100%"></td>
      </td>
    </tr>
    <tr class="odd gradeX">
      <th style="width: 30%">Logo Website</th>
      <td style="width: 70%">
        <img src="<?php echo base_url('upload/tentang/'.$tentang->logo) ?>">
        <input type="hidden" name="logo-sem-ttg" value="<?php echo $tentang->logo ?>">
        <input type="file" name="logo-ttg" style="margin-top: 30px"> 
      </td>
      
    </tr>
    <tr class="odd gradeX">
      <th style="width: 30%">Alamat Toko</th>
      <td style="width: 70%"><input type="text" name="alamat-ttg" value="<?php echo $tentang->alamat_tentang ?>" style="width: 100%"></td>

    </tr>
    <tr class="odd gradeX">
      <th style="width: 30%">Nomor Handphone Toko</th>
      <td style="width: 70%"><input type="text" name="hp-ttg" value="<?php echo $tentang->hp_tentang ?>" style="width: 100%"></td>

    </tr>
    <tr class="odd gradeX">
      <th style="width: 30%">Email Toko</th>
      <td style="width: 70%"><input type="email" name="email-ttg" value="<?php echo $tentang->email_tentang ?>" style="width: 100%"></td>
    </tr>
    <tr class="odd gradeX">
      <th style="width: 30%">Tagline " Header " Website
        <br>
        <h6 style="color: red">Maksimal 27 Karakter</h6>
      </th>

      <td style="width: 70%"><input type="text" name="tag-ttg" value="<?php echo $tentang->tagline_tentang ?>" style="width: 100%"></td>
    </tr>
    <tr class="odd gradeX">
      <th style="width: 30%">Isi Halaman " Tentang Kami " Website</th>
      <td style="width: 70%"><input type="text" name="isi-ttg" value="<?php echo $tentang->isi_tentang ?>" style="width: 100%"></td>
    </tr>
    <tr class="odd gradeX">
      <th style="width: 30%">Foto Halaman " Tentang Kami " Website</th>
      <td style="width: 70%">
        <img src="<?php echo base_url('upload/tentang/'.$tentang->foto_tentang) ?>">
        <input type="hidden" name="sementara-ttg" value="<?php echo $tentang->foto_tentang ?>">
        <input type="file" name="foto-ttg" style="margin-top: 30px"> 
      </td>
      
    </tr>
    <tr class="odd gradeX">
      <th style="width: 30%">Quote Halaman " Quote For You " Website</th>
      <td style="width: 70%"><input type="text" name="quo-ttg" value="<?php echo $tentang->quote_tentang ?>" style="width: 100%"></td>

    </tr>
    <tr class="odd gradeX">
      <th style="width: 30%">Nomor Rekening</th>
      <td style="width: 70%"><input type="text" name="rek-ttg" value="<?php echo $tentang->no_rek ?>" style="width: 100%"></td>
      
    </tr>
    <tr class="odd gradeX">
      <th style="width: 30%">Nama Bank</th>
      <td style="width: 70%"><input type="text" name="bank-ttg" value="<?php echo $tentang->bank ?>" style="width: 100%"></td>

    </tr>
    <tr class="odd gradeX">
      <th style="width: 30%">Atas Nama Nomor Rekening</th>
      <td style="width: 70%"><input type="text" name="an-ttg" value="<?php echo $tentang->atas_nama ?>" style="width: 100%"></td>

    </tr>

  </tbody>


</table>
<button class="btn btn-primary" style="margin-top: 30px"><span class="glyphicon glyphicon-pencil" style="margin-right: 5px"></span> Edit</button>
<br>
<hr style="border-color: #6195ae">
<?php echo form_close(); ?>
<div class="col-sm-6" style="margin-top:50px">
  <h1 style="margin-bottom:30px">Edit User</h1>
</div>


<!-- ?php echo form_open_multipart(base_url('admin/edit_user_tentang')); ?>  -->
<form id="forms" action='<?= base_url() ?>admin/edit_user_tentang' method='post'>
  <table width="100%" class="table table-striped table-bordered" id="dataTables-example" style="background-color: #fff">

    <tbody>
      <tr class="odd gradeX">
        <th style="width: 30%">Username</th>
        <td style="width: 70%"><input type="text" name="user-ttg" value="<?php echo $_SESSION['admin'] ?>" style="width: 100%">
        </td>
      </tr>
      <tr class="odd gradeX">
        <th style="width: 30%">Password</th>
        <td style="width: 70%">
          <input id="pass_id" type="password" name="pass-ttg" style="width: 100%" disabled><br>
          <div class="checkbox">
            <label><input id="cek" onclick="cekk()" type="checkbox" name="pass-edit" style="position: relative;top:4px;margin-right:5px">Edit Password ?</label>
          </div>
        </td>

      </tr>
      <tr class="odd gradeX">
        <th style="width: 30%">Konfirmasi Password</th>
        <td style="width: 70%"><input id="pass_kon_id" type="password" name="kon-pass-ttg" style="width: 100%" disabled></td>

      </tr>

    </tbody>


  </table>
  <button class="btn btn-primary" style="margin-top: 30px"><span class="glyphicon glyphicon-pencil" style="margin-right: 5px"></span> Edit</button>
</form>
<!-- <?php echo form_close(); ?> -->
<div class="col-sm-6" style="margin-top:50px">
  <h1 style="margin-bottom:30px">Edit Header</h1>
</div>

<!-- ?php echo form_open_multipart(base_url('admin/edit_user_tentang')); ?>  -->
  <?php echo form_open_multipart(base_url('admin/edit_head')); ?> 
  <table width="100%" class="table table-striped table-bordered" id="dataTables-example" style="background-color: #fff">
    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" style="background-color: #fff">
      <tbody>
        <tr class="odd gradeX">
          <th style="width: 30%">Header Website</th>
          <td style="width: 70%">
            <img src="<?php echo base_url('assets/img/header-bg.jpg') ?>" class="img-responsive">
            <input type="file" name="header" style="margin-top: 30px"> 
          </td>
        </tr>
      </table>
      <button class="btn btn-primary" style="margin-top: 30px"><span class="glyphicon glyphicon-pencil" style="margin-right: 5px"></span> Edit</button>
<?= form_close(); ?>
<hr>
  <?php echo form_open_multipart(base_url('admin/edit_foot')); ?> 
  <table width="100%" class="table table-striped table-bordered" id="dataTables-example" style="background-color: #fff">
    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" style="background-color: #fff">
      <tbody>
        <tr class="odd gradeX">
          <th style="width: 30%">Footer Website</th>
          <td style="width: 70%">
            <img src="<?php echo base_url('assets/img/footer-bg.jpg') ?>" class="img-responsive">
            <input type="file" name="footer" style="margin-top: 30px"> 
          </td>
        </tr>
      </table>
      <button class="btn btn-primary" style="margin-top: 30px"><span class="glyphicon glyphicon-pencil" style="margin-right: 5px"></span> Edit</button>
<?= form_close(); ?>
  </div>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Produk</h4>
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
<script type="text/javascript">
  function cekk(){
    var x = document.getElementById('pass_id');
    var y = document.getElementById('pass_kon_id');
    var z = document.getElementById('cek');
    var a = document.getElementById('forms');
    if(z.checked == true){
      x.disabled = false;
      y.disabled = false;
      a.action = "<?= base_url() ?>admin/pass_user_tentang";

    }else if(z.checked == false){
      x.disabled = true;
      y.disabled = true;
      a.action = "<?= base_url() ?>admin/edit_user_tentang";
    }
  }
</script>