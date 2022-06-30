<?php

$host="localhost";
$user="root";
$password="";
$db="user";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];


	$sql="select * from admin where username='".$username."' AND password='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="user")
	{	

		$_SESSION["username"]=$username;

		header("location:table.php");
	}

	elseif($row["usertype"]=="admin")
	{

		$_SESSION["username"]=$username;
		
		header("location:table.php");
	}

	else
	{
		echo "username or password incorrect";
	}

     
}




?>





<!DOCTYPE html>

<html lang ="en">

    <head>

        <title>ADMIN</title>

        <link rel="stylesheet" type="text/css" href="../booking/style5.css">
		<link rel="icon" href="../home/bg1.jpg">

</head>

<body>

<form action="#" method="POST"> 

        <h2>ADMIN</h2>

       

        <label><strong>Username</strong></label>

        <input type="text" name="username" placeholder="please type your username" required><br>



        <label><strong>Password</strong></label>

        <input type="password" name="password" placeholder="please type your password" required><br>



        <button type="submit" name="submit"> Login </button>
        
</form>

</body>

</html>


