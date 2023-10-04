<?php
    $e = 0;
    $con=mysqli_connect("localhost","root","","prectical");
    $qury=mysqli_query($con,"SELECT * from employee");
    while($row=mysqli_fetch_array($qury)){
        $e = $e + 1;
        mysqli_query($con,"UPDATE employee set en='$e' where no=".$row[5]);
    }
    if($qury){
        header("location:employee.php");
    }
    else{
        echo"Something wrong";
    }
?>