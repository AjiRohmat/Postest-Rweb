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
	<div class="row justify-content-md-center">
		<div class="col-sm-6">
		<h1 style="margin-bottom: 150px"></h1>
		<h2 style="margin-bottom: 25px" align="center">Login Admin</h2>
			<form action="<?php echo site_url('login/aksi')?>" method="post">
				<div class="form-group">
				<label for="username" id="username">Username</label>
				<input type="text" class="form-control" id="usr" name="username" value="<?= set_value('username');?>">
				<small><span class="text-danger"><i><?= form_error('username');?></i></span></small>
				</div>
				<div class="form-group">
				<label for="password" id="password">Password</label>
				<input type="password" class="form-control" id="pwd" name="password" value="<?= set_value('password');?>">
				<small><span class="text-danger"><i><?= form_error('password');?></i></span></small>
				<small><span class="text-danger"><i><?php echo $this->session->flashdata('pesan_flash');?></i></span></small>
				</div>

				<button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>
