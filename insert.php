<html>
    <head></head>
    <body align="center">
        <h2>Employee REGISTRATION</h2>
        <form name="frm1" method="post">
            <table align="center">
                <tr>
					<td>Employee Name:</td> 
					<td><input type="text" name="name" required></td>
				</tr>
                <tr>
					<td>Gender:</td> 
					<td><input type="radio" name="gen" value="M">MALE
                    <input type="radio" name="gen" value="F" required>FEMALE</td>
				</tr>
                <tr>
					<td>Date of Birth:</td> 
					<td><input type="date" name="dob" required></td>
				</tr>
                <tr>
					<td>Salary:</td> 
					<td><input type="number" min="50000" max="1000000" name="sal" required></td>
				</tr>
			    <tr>
					<td align="center" colspan="2"><input type="submit" name="submit" value="Insert"></td>
				</tr>
            </table>
		</form>
        <?php
            $con=mysqli_connect("localhost","root","","prectical");
            if(isset($_POST["submit"])){
                $name=$_POST["name"];
                $gen=$_POST["gen"];
                $dob=$_POST["dob"];
                $sal=$_POST["sal"];
                $qury=mysqli_query($con,"INSERT into employee (`name`,`gender`,`dob`,`salary`)
                    values('$name','$gen','$dob','$sal') ");
                if($qury){
                    header("location:1.php");
                }
                else{
                    echo"Something wrong in insert data";
                }
            }
        ?>
    </body>
</html>