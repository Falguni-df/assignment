<?php session_start(); ?>
<html>
	<head>
		<title> Signin </title>
		<link rel="stylesheet" href="H.css">
	</head>
	<body>
		<form method="POST" action="">
			<div class="login-box">
				<h1>Sign in</h1>
				<div class="textbox">
					<i class="fas fa-user"></i>
					<input type="text" placeholder="User Name" name="ID">
				</div>
	
				<div class="textbox">
					<i class="fas fa-lock"></i>
					<input type="password" placeholder="Password" name="password">
				</div>
	
				<input type="submit" class="btn" value="Signin" name="signin">
			</div>
		</form>
		
		<?php
			$p="falguni@2002";
			$x="agent";
			if(isset($_POST['signin']))//signin
			{
				$_SESSION['ID'] = $_POST['ID'];
				$_SESSION['password'] = $_POST['password'];
				$a = $_SESSION['ID'];
				$b = $_SESSION['password'];
				if($x==$a && $p==$b)
				{
					header("Location: employee.php");
				}
			}
			if(isset($_SESSION['ID']))//relod
			{
				$a = $_SESSION['ID'];
				$b = $_SESSION['password'];
				if($x==$a && $p==$b)
				{
					header("Location: employee.php");
				}
			}
		?>
		
	</body>
</html>