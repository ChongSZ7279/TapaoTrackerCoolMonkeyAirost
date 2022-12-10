<?php

include 'searchconnect.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM `orderformtest` where id='$id'";
    $result=mysqli_query($con,$sql);
    if($result){
        echo"Deleted";
        header('location:displayorder.php');

    }else{
        die(mysqli_error($con));
    }
}
?>