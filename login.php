<?php
session_start();


$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'tienda');

$id=$_POST['id'];
$password=$_POST['password'];
$email =$_POST['email'];

$s = "select * from usuarios where id='$id' && password ='$password'";

$result= mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1){
   header('location:inicio.html');
}else{
 header('location:index.html');
 echo "La inforamcion que introdujo no es correcta";
}
?>

