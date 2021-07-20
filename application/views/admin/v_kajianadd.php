<?php 
   $this->load->view('admin/komponen/header');
   $this->load->view('admin/komponen/navbar');
   $this->load->view('admin/komponen/sidebar');

   ?>
   <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    Kajian
    <small>Tambah Kajian</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Kajian</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-sm-12">
      	<div align="right"><a href="<?= base_url('admin/kajian')?>" class="btn btn-primary" >Kembali</a></div><br>
      	<div class="box box-primary">
      		<div class="box-header">
      			<div class="box-title">Tambah Kajian</div>
      		</div>
      		<div class="box-body">
					<form action="<?= base_url()?>admin/kajian/store" method="post" enctype="multipart/form-data">
      				<div class="form-group">
      					<label for="">Judul</label>
      					<input type="text" name="nama" class="form-control" required="">
      				</div>
      				<div class="form-group">
      					<label for="">Poster</label>
      					<input type="file" name="foto" class="form-control" >
      				</div>
      				<div class="form-group">
      					<label for="">Kategori</label>
      					<select name="kategori" id="editor" class="form-control">
						<option value="Sejarah">Sejarah</option>
						<option value="Fiqih">Fiqih</option>
						<option value="Hadits">Hadits</option>
						<option value="Tafsir">Tafsir</option>
						<option value="Tahsin">Tahsin</option>
						<option value="Sejarah">Sejarah</option>
						<option value="Pranikah">Pranikah</option>
      					</select>
      				</div>
					  <div class="form-group">
      					<label for="">Pemateri</label>
      					<input type="text" name="ustadz" class="form-control" required="">
      				</div>
					  <div class="form-group">
      					<label for="">Tanggal</label>
      					<input type="date" name="tanggal" class="form-control" required="">
      				</div>
					  <div class="form-group">
      					<label for="">Jam</label>
      					<input type="time" name="jam" class="form-control" required="">
      				</div> 
					  <div class="form-group">
      					<label for="">Tempat</label>
      					<input type="text" name="tempat" class="form-control" required="" value="Masjid Baiturrahman Sukoharjo 01">
      				</div>
					  <div class="form-group">
      					<label for="">Peserta</label>
      					<select name="peserta" id="editor" class="form-control">
						<option value="Umum">Umum</option>
						<option value="Ikhwan">Ikhwan</option>
						<option value="Akhwat">Akhwat</option>
      					</select>
      				</div>
      				<div class="form-group">
      					<label for="">Deskripsi</label>
      					<textarea name="deskripsi" id="" cols="30" rows="3" class="form-control"></textarea>
      				</div>
      				<div class="form-group">
      					<input type="submit" class="btn btn-primary" value="Simpan">
      					<input type="reset" class="btn btn-light" value="Reset">
      				</div>
      			</form>
      		</div>
      	</div>
      </div>
  </div>
</section>
</div>
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'deskripsi' );
</script>
   <?php 
   $this->load->view('admin/komponen/footer');
   $this->load->view('admin/komponen/js');

   ?>
