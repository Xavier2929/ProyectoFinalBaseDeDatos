<?php
session_start();
header('location:index.html');

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'tienda');

$id=$_POST['id'];
$password=$_POST['password'];
$email =$_POST['email'];

$s = "select * from usuarios where id='$id'";

$result= mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1){
    echo "Este usuario ya existe";
}else{
    $reg="insert into usuarios(id,email,password) values('$id','$email','$password')";
    mysqli_query($con,$reg);
    echo "El Usuario ha sido registrado de manera exitosa";
}
?>

