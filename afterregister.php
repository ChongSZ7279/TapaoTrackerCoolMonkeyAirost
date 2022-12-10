

<html>
  <html lang="en"></html>
  <head>
    <meta charset="UTF-8" />
    <title>Jojoe Order success</title>
    <link rel="stylesheet" href="main2.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
    <script
      src="https://kit.fontawesome.com/a076d05399.js"
      crossorigin="anonymous"
      ></script>
      <style>
      body{
        background-image: url("https://i.postimg.cc/J4mscdv1/photo1670384936-1.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
      }
    </style>
    </head>

    <style>
h1{
    width: 90%;
    color: black;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
    font-size: 50px;
}


    </style>
<body>

<nav>
      <img
        width="73px"
        height="73px"
        style="float: left; margin-left: 45px; margin-top:3px;"
        src="https://i.postimg.cc/HkjMR5D6/My-project.png"
        alt="logo"
       
  
      />
      <label class="logo" style="font-size: 50px " >TaPao Tracker</label>
      <ul>
        <li><a class="active" href="jojoemain2dup.php" style="text-decoration:none">Home</a></li>
        <li><a href="jojoeabout2.php" style="text-decoration:none">About</a></li>
        <li><a href="menusz.php" style="text-decoration:none">Menu</a></li>
        <li>
          <a href="orderformtest.php" style="text-decoration:none">Order</a>
        </li>
        <li>
          <a href="mailto:kwekjiacong@gmail.com" target="_blank" style="text-decoration:none">Email</a>
        </li>
        
      </ul>
    </nav>



      
  <div class="afterregister">
      <?php

include 'connection.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO `crud` (name,address,phone) VALUES ('$name', '$address','$phone')";


    $result = mysqli_query($con,$sql);

    if($result) {
        $last_id = mysqli_insert_id($con);
        echo "<h1>New user registered successfully. Your user ID is : " .$last_id ."</h1>";
    }else{
        echo "Error" . $sql . "<br>" . mysqli_error($con);
    }

}
mysqli_close($con);

?>
    </div>

  
</body>
</html>

