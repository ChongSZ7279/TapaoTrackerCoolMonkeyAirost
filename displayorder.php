<?php
include 'searchconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="main2.css" />
    <title>JojoeOrderDisplay</title>
</head>

<body>
<nav >
      <img
        width="73px"
        height="73px"
        style="float: left; margin-left: 45px; margin-top:3px;"
        src="https://i.postimg.cc/HkjMR5D6/My-project.png"
        alt="logo"
      />
      <label class="logo" style="font-size: 50px">TaPao Tracker Admin</label>
      <ul>
        <li><a class="active" href="displayorder.php" style="text-decoration:none">Order-List</a></li>
        <li><a href="display.php" style="text-decoration:none">User-List</a></li>
    
   
      </ul>
    </nav>
<div class="container" >
    <button class="btn btn-primary my-5"><a href="selleraddorder.php"class="text-light"style="text-decoration:none">Add order</a></button>



<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Order code</th>
      <th scope="col">Order status</th>
 
    </tr>
  </thead>
  <tbody>
  <?php
$sql="SELECT * FROM `orderformtest`";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $ordercode=$row['ordercode'];
        $orderstatus=$row['orderstatus'];

        echo'<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$ordercode.'</td>
        <td>'.$orderstatus.'</td>

        <td>
        <button class="btn btn-primary"><a href="updateorder.php?updateid='.$id.'" class="text-light"style="text-decoration:none">Update</a></button>
        <button class="btn btn-danger"><a href="deleteorder.php?deleteid='.$id.'" class="text-light"style="text-decoration:none">Delete</a></button>
        </td>

        </tr>';
    }
}
?>
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
