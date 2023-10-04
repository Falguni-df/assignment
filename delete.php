<html>
    <head></head>
    <body>
        <h2>DELETE Employee</h2>
        <?php
            $con=mysqli_connect("localhost","root","","prectical");
            if(isset($_GET["no"])){
                $qury=mysqli_query($con,"SELECT * from employee where no=".$_GET["no"]);
                $row=mysqli_fetch_array($qury);
                $name=$row[1];
                $no=$row[0];
            }
            if(isset($_POST["submit"])){
                $result=mysqli_query($con,"DELETE from employee where no=".$_GET["no"]);
                if($result)
                {
                    header("location:1.php");
                }
                else{
                    echo"Something wrong in delete data.......!";
                }
            }
        ?>
        <form name="frm1" method="post">
            Are you sure to delete the Employee with Name:<b><u><?php echo $name; ?></u></b> and Employee_NO:<b><u><?php echo $no ?></u></b>?<br><br>
            <input type="submit" name="submit" value="Delete">
        </form>
    </body>
</html>