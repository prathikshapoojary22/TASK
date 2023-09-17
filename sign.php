


















<!-- <?php
$success=0;
$user=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];

    // $sql="insert into `registration` (username, password)
    // values('$username','$password')";
    // $result=mysqli_query($con,$sql);
    // if($result){
    //     echo "data inserted successfully";
    // }else{
    //     die(mysqli_error($con));
    // }
$sql= "Select * from `registration` where username= '$username'";
$result =mysqli_query($con,$sql);
if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
      //  echo "user already exists";
      $user=1;
    }else{
        $sql="insert into `registration` (username, password,email,contact)
    values('$username','$password','$email','$contact')";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "logged in successfully";
       $success=1;
       header('location:login.php');
    }else
    {
        die(mysqli_error($con));
    }
    }
}
}
?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <title>Login Page</title>
  </head>
  <body>

  <?php
if($user){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>oh no sorry! </strong> user already exists!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div> ';
}

?>
 <?php
if($success){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success </strong> You are successfully registerd
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div> ';
}

?>

    <h1 class="text-center"> Register here</h1>
   <div class="container mt-5">

   <form action="sign.php" method="post">
  <div class="form-group">
    <label for="exampleInputusername">user name</label>
    <input type="text" class="form-control" id="exampleInputusername" placeholder="Enter username" name="username">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" name="password">
  </div>
  <div class="form-group">
    <label for="exampleInputemail">email</label>
    <input type="email" class="form-control" id="exampleInputemail" placeholder="email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputcontact">Contact</label>
    <input type="contact" class="form-control" id="exampleInputcontact" placeholder="contact" name="contact">
  </div>
  <!-- <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Register</button>
  <div class="container">
  if you have already registered <a href="login.php"> click here to login! </a>
</form>
</div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html> 