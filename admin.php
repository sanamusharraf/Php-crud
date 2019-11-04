<html>
<style>
td,th{
    padding:15px;
}
</style>

<?php
include 'database.php';
include "head.php";

session_start();
$user = $_SESSION['s_email'];

if($user == true){
        
}
else{
    header('location:index.php');
}


$sql_1 = "Select * from users;";
$result_1 = mysqli_query($conn,$sql_1);
$row = mysqli_num_rows($result_1);

if($row != 0){
?>
<table >
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Password</th>
<th>Image</th>
<th colspan="2">Operations</th>
</tr>

    <?php
    while($data = mysqli_fetch_assoc($result_1)){
    echo "<tr >
        <td>".$data["id"]."</td>
        <td>".$data["name"]."</td>
        <td>".$data["email"]."</td>
        <td>".$data["password"]."</td>
        <td><img src=".$data["image"]." width=100px ></td>
        <td><a href='edit.php?id=$data[id]&name=$data[name]&email=$data[email]&password=$data[password]&img=$data[image]' onclick='edit()'>Edit</a></td>
        <td><a href='delete.php?id=$data[id]'>Delete</a></td>
    </tr>";

    }

}
else{
    echo "No data found!";
}

echo "<br><a href='logout.php'><input type='button' value='logout'></a>";

?>
</table>

</html>