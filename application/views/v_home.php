<!DOCTYPE html>
<html lang="en">
<head>
  <title>BPKP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
  <!-- this for nvbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin:24px 0;">
    <a href="<?= base_url('home');?>" class="navbar-brand" href="javascript:void(0)">BPKP</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navb">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
      <a class="nav-link disabled" href="javascript:void(0)">Hallo, Selamat Datang <?php echo $this->session->userdata('nama')?></a></li>
         <li class="nav-item"><a class="nav-link" href="<?= base_url('home');?>">Home</a></li>
    </ul>
      <form class="form-inline my-2 my-lg-0">
        <a href="<?php echo site_url('login/logout')?>" class="btn btn-danger my-2 my-sm-0" type="button">Logout</a>
      </form>
    </div>
  </nav>

<div class="container">
  <h2>Data Anggota BPKP</h2> 
<a href="<?= base_url('home/tambah');?>" class="btn btn-success" style="margin-bottom: 10px">Tambah Data</a>
<table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>No.Hp</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
		<?php $no = 1; foreach($anggota as $data):?>
      <tr>
        <td><?= $no?></td>
        <td><?= $data->nama?></td>
        <td><?= $data->hp?></td>
        <td><?= $data->alamat?></td>
        <td><?= $data->email?></td>
        <td>
        	 <a href="<?= base_url('home/edit/').$data->id_anggota;?>" class= "btn btn-warning">Edit</a>
           <a href="<?= base_url('home/hapus/').$data->id_anggota;?>" class= "btn btn-danger">Hapus</a>
        </td>
	  </tr>
	  <?php $no++;?>
	  <?php endforeach?>
    </tbody>
  </table>

<hr style="height:1.5px;border-width:0;color:gray;background-color:gray">
<div class="container">
  <h2>Berita Nasional</h2> 
<a href="<?= base_url('home/tberita');?>" class="btn btn-success" style="margin-bottom: 10px">Tambah Data</a>
<table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul Berita</th>
        <th>Tanggal Berita</th>
        <th>Isi Berita</th>
        <th><center>Option</center></th>
      </tr>
    </thead>
    <tbody>
    <?php $no = 1; foreach($berita as $data):?>
      <tr>
        <td><?= $no?></td>
        <td><?= $data->judul?></td>
        <td><?= $data->tanggal?></td>
        <td><?= $data->isi?></td>
        <td>
           <a href="<?= base_url('home/eberita/').$data->id_berita;?>" class= "btn btn-warning" >Edit</a>
           <a href="<?= base_url('home/hapus_berita/').$data->id_berita;?>" class= "btn btn-danger">Hapus</a>
        </td>
    </tr>
    <?php $no++;?>
    <?php endforeach?>
    </tbody>
  </table>
</div>

</body>
</html>