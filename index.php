<!DOCTYPE html>
<html>

<head>
	<title>LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Bootstrap CSS -->
   
</head>

<body>
	<form action="login.php" method="post">
		<h2>LOGIN</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error">
				<?php echo $_GET['error']; ?>
			</p>
		<?php } ?>
		<label>User Name</label>
		<input type="text" name="uname" placeholder="User Name"><br>

		<label>Password</label>
		<input type="password" name="password" placeholder="Password"><br>

		<button type="submit" class="btn">Login</button>
		
		<a href="signup.php" class="ca" id="hi">Create an account</a>
		<style>
			/* Internal CSS starts here */

			.ca:link,
			.ca:visited {
				background-color: #f44336;
				color: white;
				padding: 14px 25px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				border-radius: 20px;
			}

			.ca:hover,
			.ca:active {
				background-color: red;
			}

			/* Internal CSS ends here */
		</style>
	</form>
</body>

</html>