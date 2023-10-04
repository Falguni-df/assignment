<html>
	<head></head>
	<body align="center">
		<h2>UPDATE Employee</h2>
		<?php
			$con=mysqli_connect("localhost","root","","prectical");
			if(isset($_GET["no"])){
				$qury=mysqli_query($con,"SELECT * from employee where no=".$_GET["no"]);
				$row=mysqli_fetch_array($qury);
				$name=$row[1];
				$gen=$row[2];
				if($gen=="M"){
					$opt1="Checked";
					$opt2="";
				}
				else{
					$opt2="Checked";
					$opt1="";
				}
				$dob=$row[3];
				$sal=$row[4];
			}
			if(isset($_POST["submit"])){
				$name=$_POST["name"];
				$gen=$_POST["gen"];
				$dob=$_POST["dob"];
				$sal=$_POST["sal"];

				$qury=mysqli_query($con,"UPDATE employee set name='$name' where no=".$_GET["no"]);
				$qury=mysqli_query($con,"UPDATE employee set gender='$gen' where no=".$_GET["no"]);
				$qury=mysqli_query($con,"UPDATE employee set dob='$dob' where no=".$_GET["no"]);
				$qury=mysqli_query($con,"UPDATE employee set salary='$sal' where no=".$_GET["no"]);
				if($qury){
					header("location:employee.php");
				}
				else{
					echo"Something wrong in edit data.......!";
				}
			}
		?>
		<form name="frm1" method="post">
			<table align="center">
				<tr>
					<td>Employee Name:</td> 
					<td><input type="text" name="name" value="<?php echo $name; ?>" required></td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td><input type="radio" name="gen" value="M" <?php echo $opt1; ?>> MALE
						<input type="radio" name="gen" value="F" <?php echo $opt2; ?> required> FEMALE</td>
				</tr>
				<tr>
					<td>Date of Birth:</td>
					<td><input type="date" name="dob" value="<?php echo $dob; ?>" required></td>
				</tr>
				<tr>
					<td>Salary:</td>
					<td><input type="number" min="50000" max="1000000" name="sal" value="<?php echo $sal; ?>" required></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
		</form>
	</body>
</html>