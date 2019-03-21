<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<h1>login untuk melanjutkan</h1>
	<form action="<?=base_url('index.php/login/do_login')?>" method="post">
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
				<td><input type="submit" name="" value="Login"></td>
			</tr>
		</table>
	</form>
	<p>belum punya akun? daftar <a href="<?=base_url('index.php/daftar')?>">disini</a></p>
</body>
</html>