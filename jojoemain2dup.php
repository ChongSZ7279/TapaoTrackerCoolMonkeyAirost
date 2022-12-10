<?php
include 'searchconnect.php';
?>

<html>
  <html lang="en"></html>
  <head>
    <meta charset="UTF-8" />
    <title>Jojoe Main</title>
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
        <li><a class="active" href="#" style="text-decoration:none">Home</a></li>
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
    <p><br /></p>
    <div class="jojoe">
      <img
        style="border-radius: 15px; border-color: rgb(136, 14, 14)" 
        src="https://i.postimg.cc/B6jdcFxd/IMG-20221209-174300-181.jpg"
        alt="JoJoe UTM"
      />
    </div>
    <div class="text">
      <ul>
        <li style="font-style: italic">
          You can track your food order by entering your ID in the search bar.
        </li>
        <br />
        <li style="font-style: italic">
          If you do not have an ID yet,please register an ID.
          <a href="usercreate.php">
            <button>Register</button>
          </a>
        </li>
      </ul>
    </div>
    <br />
    
    <div class="box">
    <h2 style="font-size: 30px">Track your order</h2>
        <form method="post">
        <input type="text" placeholder="Type your user ID" name="search">
        <input type="submit" name="submit" value="search"></input>
        </form>
<div class="container-5">
    <table class="table">
        <?php 
        if(isset($_POST['submit'])){
            $search=$_POST['search'];

            $sql="select * from `orderformtest` where id='$search'";
            $result=mysqli_query($con,$sql);
            if($result){
              if(  $num=mysqli_num_rows($result)>0){
                echo '<thead>
                <tr>
                <th>ID</th>
                <br>
                <th>Order Code</th>
                <th>Order Status</th>
                </tr>
                
                </thead>
                ';
                $row=mysqli_fetch_assoc($result);
                echo '<tbody>
                <tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['ordercode'].'</td>
                <td>'.$row['orderstatus'].'</td>
                <td>
                <button class="btn btn-primary"><a href="userorderupdate.php?updateid='.$search.'" class="text-light"style="text-decoration:none">Update</a></button>
                
                </td>
                </tr>
                
                </tbody>
                
                ';
            }else{
                echo '<h2 style="font-size: 25px" class=text-danger>No orders found</h2>';
            }
        }
        }
        ?>


</table>

</div>
    </div>
  </body>
</html>
