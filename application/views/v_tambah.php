<!DOCTYPE html>
<html lang="en">
<head>
  <title>BPKP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<form method="post" action="<?= base_url('home/tambah_data');?>">
<div class="container">
  <h2>Tambah Data Anggota</h2>
  <hr style="height:1.5px;border-width:0;color:gray;background-color:gray">
  <form>
    <div class="form-group">
      <label>Nama</label>
      <input type="text" name="nama" class="form-control" value="<?= set_value('nama');?>">
      <small><span class="text-danger"><i><?= form_error('nama');?></i></span></small>
    </div>
    <div class="form-group">
      <label>No.Hp</label>
      <input type="text" name="hp" class="form-control" value="<?= set_value('hp');?>">
      <small><span class="text-danger"><i><?= form_error('hp');?></i></span></small>
    </div>
    <div class="form-group">
      <label>Alamat</label>
      <input type="text" name="alamat" class="form-control" value="<?= set_value('alamat');?>">
      <small><span class="text-danger"><i><?= form_error('alamat');?></i></span></small>
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="text" name="email" class="form-control" value="<?= set_value('email');?>">
      <small><span class="text-danger"><i><?= form_error('email');?></i></span></small>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?= base_url('home');?>" class="btn btn-warning">Batal</a>
  </form>
</div>

</body>
</html>
