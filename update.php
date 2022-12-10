<?php
include 'connection.php';
$id=$_GET['updateid'];
$sql="SELECT * FROM `crud`where id=$id";
$result = mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$address=$row['address'];
$phone=$row['phone'];


if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $sql = "UPDATE `crud`set id='$id',name='$name',address='$address',phone='$phone'where id=$id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo "Data Inserted!";
        header('location:display.php');
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
    <title>JojoeUpdate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="form2.css"/>
    <style>
      body{
        background-image: url("https://i.postimg.cc/J4mscdv1/photo1670384936-1.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
      }
    </style>
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
                <label for="exampleInputPassword1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name"autocomplete="off"value=<?php echo $name?>>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" aria-describedby="emailHelp"autocomplete="off"value=<?php echo $address?>>
                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" id="myPassword"value=<?php echo $phone?>>
                
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>


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