<!DOCTYPE html>
<html lang="en">

<head>
	<title>LOGIN ADMIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {
			background-color: #b5c2ca;
		}

		.container {
			width: 100vw;
			height: 100vh;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			font-family: Arial, Helvetica, sans-serif;
		}

		.login-card {
			width: 400px;
			height: 400px;
			background-color: #fff;
			padding: 40px;
			display: flex;
			/* justify-content: center; */
			align-items: center;
		}

		.inp {
			width: 400px;
			display: block;
			height: 40px;
			margin-bottom: 20px;
			padding: 5px;
		}

		.submit {
			background-color: #b5c2ca;
			width: 400px;
			padding: 20px;
			border: none;
			font-weight: bold;
		}
	</style>
</head>

<body>

	<div class="container">
		<h3>TSL LOGIN</h3>
		<p style="font-weight: bold;color:red;"><?php if (isset($err)) echo $err; ?></p>
		<div class="login-card">
			<form action="<?php echo base_url() ?>admin/submit_login_data" method="POST" class="form-d">
				<label for="">USERNAME</label>
				<input type="text" name="userid" id="" placeholder="USER ID" class="inp">
				<label for="">PASSWORD</label>
				<input type="password" name="pass" id="" placeholder="PASSWORD" class="inp">
				<input type="submit" name="submit" value="SUBMIT" class="submit">
			</form>
		</div>
	</div>
</body>

</html>