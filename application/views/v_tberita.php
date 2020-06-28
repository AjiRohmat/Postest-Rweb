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

<form method="post" action="<?= base_url('home/tambah_berita');?>">
<div class="container">
  <h2>Tambah Berita</h2>
  <hr style="height:1.5px;border-width:0;color:gray;background-color:gray">
  <form>
    <div class="form-group">
      <label>Judul Berita</label>
      <input type="text" name="judul" class="form-control" value="<?= set_value('judul');?>">
      <small><span class="text-danger"><i><?= form_error('judul');?></i></span></small>
    </div>
    <div class="form-group">
      <label>Tanggal Berita</label>
      <input type="date" name="tanggal" class="form-control" value="<?= set_value('tanggal');?>">
      <small><span class="text-danger"><i><?= form_error('tanggal');?></i></span></small>
    </div>
    <div class="form-group">
      <label>Isi Berita</label>
      <input type="komentar" name="isi" class="form-control" value="<?= set_value('isi');?>">
      <small><span class="text-danger"><i><?= form_error('isi');?></i></span></small>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?= base_url('home');?>" class="btn btn-warning">Batal</a>
  </form>
</div>

</body>
</html>
