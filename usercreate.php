<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JojoeCreate</title>
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
  
    <div class="container my-5">

    <form method="post" action="afterregister.php">
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="address">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone number</label>
    <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="phone">
    <div id="emailHelp" class="form-text">We'll never share your info with anyone else.</div>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>