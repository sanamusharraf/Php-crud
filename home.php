<html>
<?php
include 'database.php';
include 'head.php';
session_start();
$user = $_SESSION['s_email'];

if($user == true){
        
}
else{
    header('location:index.php');
}


$sql_1 = "Select * from users where email='".$user."';";
$result_1 = mysqli_query($conn,$sql_1);
$data = mysqli_fetch_assoc($result_1);
echo "Welcome '".$data['name']."' !";
echo "<br><a href='logout.php'><input type='button' value='logout'></a>";

?>
<body>
    

<div class="row">
<div class="col-lg-4 col-md-4 col-12 " style="height:50vh;">
<img src="<?php echo $data['image'];?>" alt="" class="img-fluid ">
</div>
<div class="col-lg-8 col-md-8 col-12">
<p >
Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim 
ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque 
porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore
et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam,
quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi
ut aliquid ex ea commodi consequatur? Quis autem vel eum iure 
reprehenderit qui in ea voluptate velit esse quam nihil molestiae 
consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
</p>
</div>

</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>