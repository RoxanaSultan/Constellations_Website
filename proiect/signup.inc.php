<?php
require 'conectare.php';

$username=$_POST['username'];
$nume=$_POST['nume'];
$prenume=$_POST['prenume'];
$email=$_POST['email'];
$parola=$_POST['parola'];

$sql="INSERT INTO utilizatori(username,nume,prenume,email,parola) VALUES(?,?,?,?,?)";
$stmt=mysqli_stmt_init($conectare);
mysqli_stmt_bind_param($stmt,"sssss",$username,$nume,$prenume,$email,$parola);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
$result=mysqli_query($conectare,$sql);

header("Location:pg1.html");
?>