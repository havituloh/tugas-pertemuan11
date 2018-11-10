<!DOCTYPE html>
<html>

<head>
	<?php $this->load->view('partials/head'); ?>
</head>

<body>
<div class="container">
	<?php $this->load->view('partials/menu'); ?>

	<h1>Form Artikel Saya</h1>
	<form action="<?php echo site_url('user/process'); ?>" method="POST">
	<div class="form-group">
			
			<label for="nama_depan">Nama Depan</label>
								
				<input type="text" class="form-control" name="nama_depan" placeholder="nama_depan" 
				value="<?php echo isset($user_data) ? $user_data['nama_depan'] : ''; ?> 
				<?php echo set_value('nama_depan'); ?>">

				<!-- supaya apa yg udah diinput tetap ada -->
				<span class="text-danger"><?php echo form_error('nama_depan'); ?></span>
	</div>
	<div class="form-group">
				<label for="nama_belakan">Nama Belakang</label>
				
				<td><input class="form-control" type="text" name="nama_belakang" placeholder="nama_belakang" 
				value="<?php echo isset($user_data) ? $user_data['nama_belakang'] : ''; ?>
				<?php echo set_value('nama_belakang'); ?>">
			
			<!-- supaya apa yg udah diinput tetap ada -->
			<span class="text-danger"><?php echo form_error('nama_belakang'); ?></span>
	</div>
	<div class="form-group">
				<label for="username">Username</label>
				<td>:</td>
				<td><input type="text" class="form-control" name="username" placeholder="username" 
				value="<?php echo isset($user_data) ? $user_data['username'] : ''; ?>
				<?php echo set_value('username'); ?>"></td>
			
			<!-- supaya apa yg udah diinput tetap ada -->
			<span class="text-danger"><?php echo form_error('username'); ?></span>
	</div>
				
					<input type="hidden" name="id_user" value="<?php echo isset($user_data) ? $user_data['id_user'] : ''; ?>">
					
					<button type="submit" class="btn btn-success">Simpeun</button>
					<a href="<?php echo site_url('user'); ?>">Kembali</a>
				
		
	</form>

	<?php $this->load->view('partials/foot'); ?>
	</div>
</body>
</html>