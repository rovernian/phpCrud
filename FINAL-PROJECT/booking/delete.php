<?php

 

	$id=$_GET['id'];
	include('./connect.php');
	mysqli_query($mysqli,"DELETE from `mybook` where id='$id'");

	

	header('location:table.php');
?>