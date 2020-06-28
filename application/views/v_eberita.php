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

<div class="container">
	<?php foreach ($berita as $data) { ?>
		<form method=" post" action="<?= base_url('home/update_berita');?>">
		<input type="hidden" name="id" value="<?= $data->id_berita; ?>">
  <h2>Edit Berita</h2>
  <hr style="height:1.5px;border-width:0;color:gray;background-color:gray">
  <form>
    <div class="form-group">
      <label>Judul Berita</label>
      <input type="text" name="judul" class="form-control" value="<?= $data->judul;?>">
    </div>
    <div class="form-group">
      <label>Tanggal Berita</label>
      <input type="date" name="tanggal" class="form-control" value="<?= $data->tanggal;?>">
    </div>
    <div class="form-group">
      <label>Isi Berita</label>
      <input type="text" name="isi" class="form-control" value="<?= $data->isi;?>">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="<?= base_url('home');?>" class="btn btn-warning">Batal</a>
  </form>
<?php }?>

</div>
</body>
</html>
