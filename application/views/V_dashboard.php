<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>
</head>
<body>
	<h1>jeng jeng<br> ini dashboardmu, <?php echo $this->session->userdata('nama'); ?></h1>
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Username</th>
				<th>Password</th>
				<th colspan="2">Opsi</th>
			</tr>
		</thead>
		<tbody>
	<?php 
		$no = 1;
		foreach ($user as $a) {
			echo '
				<tr>
					<td>'.$no.'</td>
					<td>'.$a->username.'</td>
					<td>'.$a->password.'</td>
					<td><a href="'.base_url('index.php/user/uri_edit/'.$a->id_user).'">Edit</a></td>
					<td><a href="'.base_url('index.php/user/hapus/'.$a->id_user).'" onclick="return confirm(\'anda yakin?\')">Delete</a></td>
				</tr>
			';
			$no++;
		}
	 ?>
	 		<tr><td colspan="5"><center><a href="<?=base_url('index.php/user/tambah')?>">tambah user</a></center></td></tr>
	 	</tbody>
	 </table>
	<a href="<?=base_url('index.php/login/do_logout')?>">logout</a>
</body>
</html>