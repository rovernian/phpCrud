<?php
session_start();
require_once ('./connect.php');

if(isset($_POST['update']))
{
    $id = $_POST['id'];

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $departure_date = $_POST['departure_date'];
    $economy = $_POST['economy'];
    
   
    $query = "UPDATE mybook SET firstname='$firstname', lastname='$lastname', address='$address', departure_date='$departure_date', economy='$economy' WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

  
    if($query_run)
    {
        $_SESSION['update'] = "";
        header("Location: table.php");
    }
    else
    {
        $_SESSION['update'] = "Not Updated";
        header("Location: table.php");
    }
}

?>
