<!DOCTYPE html>
<html>
<head>
	<title>tambah</title>
</head>
<body>
	<h1>tambah user</h1>
	<form action="<?=base_url('index.php/user/do_tambah')?>" method="post">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>