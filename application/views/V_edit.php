<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>
	<h1>edit user</h1>
	<form action="<?=base_url('index.php/user/edit/').$user->id_user?>" method="post">
		<table>
		<tr>
			<td>username</td>
			<td><input type="text" name="username" value="<?php echo $user->username ?>"></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type="text" name="password" value="<?php echo base64_decode($user->password); ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="" value="Edit"></td>
		</tr>
	</table>
	</form>
</body>
</html>