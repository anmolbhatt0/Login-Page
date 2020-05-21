<?php
$name=$_POST["Username"];
$pass=$_POST["Password"];
$cpass="Admin";
if($name=="Admin" && $pass="Admin")
{
	echo "<link rel='stylesheet' type='text/css' href='style.css'>";
	echo "<div class=login>";
	echo "<ul class='list'>";
	echo "<li><h2>Admin Successfully Registered</h2></li><br><br>";
	echo "<li><p><b>Login Credentials</b></p></li><br>";
	echo "Username=Admin<br>";
	echo "Password=Admin<br>";
	echo "<br><br>";
	echo "<a href='index.php'>Logout</a></li>";


}
else
{
	$message = "Wrong Credentials";
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
