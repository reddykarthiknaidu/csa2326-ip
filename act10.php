<form method= "post">
Username<input type ="text" name ="us"><br>
Password<input type ="password" name ="pw"><br>
<input type ="submit" name ="su" value="Signup"><br>
</form>
<?php
$c = mysqli_connect("localhost","root","");
mysqli_query($c,"CREATE DATABASE IF NOT EXISTS IP");
mysqli_query($c,"USE IP");
mysqli_query($c,"CREATE TABLE IF NOT EXISTS users (NAME VARCHAR(50),PASSWORD VARCHAR(50))");
if(isset($_POST['su'])){
mysqli_query($c,"INSERT INTO users (NAME, PASSWORD) VALUES ('$_POST[us]','$_POST[pw]')");}
?>