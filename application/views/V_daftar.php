<!DOCTYPE html>
<html>
<head>
	<title>daftar</title>
</head>
<body>
	<h1>daftar untuk melanjutkan</h1>
	<form action="<?=base_url('index.php/daftar/do_daftar')?>" method="post">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="" value="Daftar"></td>
			</tr>
		</table>
	</form>
</body>
</html>
