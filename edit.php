<style>
body{
    padding:100px;
}
p{
    
    color: Red;
    text-align:center;
}
</style>

<?php
include 'database.php';
include 'head.php';
session_start();

$id = $_GET['id'];

?>

<body>
    <form class="m-auto col-lg-6 col-md-4 col-12" action="#" method="post" enctype="multipart/form-data">
    <h3>Update Form</h3>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" value="<?php echo $_GET['name']?>" id="name" pattern="^[a-zA-Z\s]*$" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="image">Choose Image:</label>
        <input type="file" name="image"  value="<?php echo $_GET['image']?>" >
    </div>
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" name="email" value="<?php echo $_GET['email']?>"   id="email"  placeholder="Email">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" name="pwd1" id="pwd1" value="<?php echo $_GET['password']?>"placeholder="Password">
    </div>
    <div class="form-group">
        <label for="pwd">Retype Password:</label>
        <input type="password" class="form-control" value="<?php echo $_GET['password']?>" id="pwd2" placeholder="Enter Password again">
    </div> 
    <button type="submit" name="Submit" class="float-right btn btn-primary">Update</button>
    <button type="submit" name="" class="float-left  btn btn-success"><a href="admin.php" class="text-white">Go Back</a></button>            
    
    </form>

    <script>
     function validate(){
       var x = document.forms["SignUpform"]["pwd1"].value;
       var y = document.forms["SignUpform"]["pwd2"].value;
       if(x != y){
          alert("Password must be matched");
       }
    
     }
     </script>
</body>
<?php
 if(isset($_POST['Submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pwd1'];
    /* file upload method*/
    $filename = $_FILES["image"]["name"];
    $folder = "images/".$filename;
    $sql = "Update users set `name`='$name', `email`='$email', `password`='$pass', `image`='$folder' 
    where id='$id';";
      
    $result = mysqli_query($conn,$sql);
    if($result==true){
        echo "<br/><br/><p>Record updated successfully</p>";

    }
    else{
      echo "No Update";
    }
}

?>
