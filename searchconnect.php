

<?php
//try{
 //   $db=new PDO("mysql:host=localhost;dbname=searchtest;charset=utf8","root","");

//}catch(PDOException $e){
 //   echo $e->getMessage();
//}




$con=new mysqli('localhost','root','','workshop');
if(!$con){
  die(mysqli_error($con));
}
//if($con){
 //  echo"connectedd";
//}


?>