<?php
include 'connection.php';
$id=$_GET['updateid'];
$sql="SELECT * FROM `orderformtest`where id=$id";
$result = mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($result);

$ordercode=$row['ordercode'];
$orderstatus=$row['orderstatus'];


if(isset($_POST['submit'])) {
  
    $ordercode = $_POST['ordercode'];
    $orderstatus = $_POST['orderstatus'];
    

    $sql = "UPDATE `orderformtest`set id='$id',ordercode='$ordercode' ,orderstatus='$orderstatus'where id=$id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo "Data Inserted!";
        header('location:displayorder.php');
    } else {
        die(mysqli_error($con));
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JojoeUpdateOrder</title>
    <link rel="stylesheet" href="form2.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">ID</label>
                <input type="text" class="form-control" name="name"autocomplete="off"value=<?php echo $id?>>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Order Code</label>
                <input type="text" class="form-control" name="ordercode"autocomplete="off"value=<?php echo $ordercode?>>
                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Order status</label>
                <input type="text" class="form-control" name="orderstatus"autocomplete="off"value=<?php echo $orderstatus?>>
                <div id="emailHelp" class="form-text">Please update as "received".</div>
            </div>


            <button type="submit" class="btn btn-primary" name="submit">Update</button>

            <p><br><br><br><br><br><br></p>
            <script>
                function myFunction() {
                    var x = document.getElementById("myPassword");
                    if (x.type === "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                    }
                }
            </script>
        </form>
    </div>
</body>

</html>