<?php
	session_start();
	if(isset($_SESSION['ID']))
	{
	}
	else
	{
		header("Location: Signin.php");
	}
	if(isset($_POST['signout']))
	{
		session_destroy();
		header("Location: Signin.php");
	}
?>

<html>
	<head>
		<title> Employee </title>
	</head>
	<body align="center">
        <form method="post"align="center">
        <h2>LIST OF Employee</h2>
		<?php
			$con=mysqli_connect("localhost","root","","prectical");
			$qury=mysqli_query($con,"SELECT * from employee");
			
			echo"<table align='center' border=1>
					<tr>
						<th>Agent_No</th>
						<th>Agent_Name</th>
						<th>Gender</th>
						<th>DOB</th>
						<th>Salary</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
			";
			
			while($row=mysqli_fetch_array($qury)){
				if($row[2]=="M"){
					$gen="Male";
				}
				else{
					$gen="Female";
				}
				echo"
					<tr>
						<td align='center'>".$row[0]."</td>
						<td>".$row[1]."</td>
						<td>".$gen."</td>
						<td>".$row[3]."</td>
						<td>".$row[4]."</td>
						<td><a href='edit.php?no=".$row[5]."'>Edit</a></td>
						<td><a href='delete.php?no=".$row[5]."'>Delete</a></td>
						</tr>
				";
			}
			echo"</table>";
		?>
		<h3>TO ADD RECORD PLEASE <a href="insert.php"> CLICK HERE</a></h3>
        <input type="submit" class="btn" value="Logout" name="signout">
    </body>
</html>

