<?php
include 'database.php';
include 'head.php';
 if(isset($_POST['Submit'])){
          $name = $_POST['name'];
          $email = $_POST['email'];
          $pass = $_POST['pwd1'];
          /* file upload method*/
          $filename = $_FILES["image"]["name"];
          $folder = "images/".$filename;
          $sql = "Insert into users (`name`, `email`, `password`, `image`) values ('$name','$email','$pass','$folder');";
      
          $result = mysqli_query($conn,$sql);
          if($result==true){
            header('location:home.php?login');
          }
          else{
            echo mysqli_error($conn);
          }
        }  
?> 
<body>
   <div class="container-fluid">
       <div class="row">
        <div class="col-lg-6 col-md-6 col-12 ">
            <img  class="img-fluid img" src="images/img0.jpg" alt="hello">
            <div class="up">
                <h1 class="display-1">Hello</h1>
                <h1 >Wanna Dive deeper? </h1>
                <h3 class="display-5" id="SignIn">Then Sign Up!</h3>
            </div>
        </div>

        
          <!-- ////////////////////////Sign Up//////////////////// -->

          
          <form class="m-auto col-lg-4 col-md-4 col-12" name="SignUpform" action="" method="POST" onsubmit="validate()" enctype="multipart/form-data">
                <div class="my-5 text-center">
                    <h1>Register Here</h1>
                    <hr class="bg-dark">
                </div>
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" name="name" id="name" pattern="^[a-zA-Z\s]*$" required  placeholder="Name">
                  </div>
                <div class="form-group">
                  <label for="image">Choose Image:</label>
                  <input type="file" name="image" id="image" required value="">
                  
                </div>
                <div class="form-group">
                  <label for="email">Email address:</label>
                  <input type="email" class="form-control" name="email" required  id="email"  placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" name="pwd1" id="pwd1" required placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="pwd">Retype Password:</label>
                  <input type="password" class="form-control"  id="pwd2" required placeholder="Enter Password again">
                </div>
                
                <button type="submit" name="Submit" class="float-right btn btn-primary">Submit</button>
                <br>
                <hr class="my-4 bg-dark">
                <p>Or Sign Up by using Any of These: </p>
                <!-- ////////////socia media accounts//////////////////// -->
                <div class="row mb-5">
                <button type="submit" class=" pl-1 col-lg-3 col-3 btn btn-primary">
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
                <p>Already have an account?<a href="index.php" id="SignIn button">Sign In</a> </p>
              </form>
            </div>     
        </div>
     
     <script>
     function validate(){
       var x = document.forms["SignUpform"]["pwd1"].value;
       var y = document.forms["SignUpform"]["pwd2"].value;
       if(x != y){
          alert("Password must be matched");
       }
    
     }
     </script>


     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     </body>
     </html>