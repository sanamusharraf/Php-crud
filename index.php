<?php
session_start();
include 'database.php';
include 'head.php';
?>
<html>
<head>
    <title>SignIn Page</title>
</head>
</html>

<body>
   <div class="container-fluid">
       <div class="row">
        <div class="col-lg-6 col-md-6 col-12 ">
            <img  class="img-fluid img" src="images/img0.jpg" alt="hello">
            <div class="up">
                <h1 class="display-1">Hello</h1>
                <h1 >Wanna Dive deeper? </h1>
                <h3 class="display-5" id="SignIn">Then Sign In!</h3>
            </div>
        </div>
        
       
              <!-- ////////////////////////Sign In//////////////////// -->
         
          <form class="m-auto col-lg-4 col-md-4 col-12" name="SignInform" action="" method="POST">
            <div class="my-4 text-center">
                <h1>Login Here</h1>
                <hr class="bg-dark">
                <div class="text-center text-danger">
                
                <?php
                  if(isset($_GET['error'])){
                    $err=$_GET['error'];
                    echo $err;
                  };
                ?>
                </div>
                
            </div>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control"  required name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" required name="pwd" placeholder="Password">
            </div>
            <div class="form-group form-check">
              <label class="form-check-label float-left">
                <input class="form-check-input " type="checkbox"> Remember me
              </label>
            </div>
            <button type="submit" name="Submit" class="float-right btn btn-primary">Submit</button>
            <br>
            <hr class="my-5 bg-dark">
            <p>Or Sign In by using Any of These: </p>
            <!-- ////////////socia media accounts//////////////////// -->
            <div class="row mb-5 ">
            <button type="submit" class="pl-1 col-lg-3 col-3 btn btn-primary">
                <i class="fab fa-facebook-square "></i>
              Facebook
            </button>
            <button type="submit" class="ml-2 col-lg-3 col-3 btn btn-success">
                <i class="fab fa-twitter-square "></i>
              Twitter
            </button>
            <button type="submit" class="ml-2 col-lg-3 col-3 btn btn-danger">
                <i class="fas fa-envelope-square"></i>
              Gmail</button>
            </div>
            <p>Don't have an account yet?<a href="signup.php">Sign Up</a> </p>

          </form>
        
   
        </div>     
   </div>

<?php

$errMsg = "";

if(isset($_POST['Submit'])){
    $email = $_POST['email'];
    $pass = $_POST['pwd'];

    $sql = "select * from users where email='".$email."' AND password='".$pass."' limit 1;";

    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck==1){
      $_SESSION['s_email']=$email;
      if($email == "admin@gmail.com"){
        header('location:admin.php');
      }
      else{
        header('location:home.php');

      }
    }
    else{
      $errMsg = "Invalid Credentials!";
      header('location:index.php?error='.$errMsg);
    }
  }
?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>