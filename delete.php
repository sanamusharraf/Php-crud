<?php
include 'database.php';
include "head.php";
session_start();
$id = $_GET['id'];

$sql = "Delete from users where id='$id';";

$res = mysqli_query($conn,$sql);
if($res){
    echo "<script>alert('Record Deleted')</script>";
?>    
<meta http-equiv="Refresh" content="0; url=http://localhost/login-master/admin.php"> 
<?php
}
else{
    echo "Failed";
}
?>