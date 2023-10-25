<?php
require 'conectare.php';
?>
<!DOCTYPE html>  
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="style.css">
</head>

<body>
<style>
body {
  background-image: url('stele.jpg');
size: 300%;
}
</style>
<div class="loader">
<h1 style="font-size:1200%;"><font face='Georgia'>CONSTELAȚII</font></h1>
</div>
<a href="index.php">
<div class="logo">
  <img src="logo.png" height="110">
  </div></a>
  <div class="formular">
  <form action="signup.inc.php" methode="POST">
    <input type='text' name="username" placeholder="Username" class="hm">
    <input type='text' name="nume" placeholder="Nume" class="hm">
    <input type='text' name="prenume" placeholder="Prenume" class="hm">
    <input type='text' name="email" placeholder="Email" class="hm">
    <input type='password' name="parola" placeholder="Parola" class="hm">
    <br>
    <input type='submit' name="trimite" placeholder="Trimite" class="buton">
    <br><br>
    </form>
</div>

</body>
</html>