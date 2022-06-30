
<!DOCTYPE html>


<html lang ="en">

    <head>

        <title>BOOKING DATA</title>

        <link rel="stylesheet" type="text/css" href="estayl.css">
		<link rel="icon" href="../home/bg1.jpg">

	

</head>



 <div>
	<form action="" method="post">	
		<div class="container">

			<div class="row">
				<div class="col-sm-3">

				<?php 
    session_start();
    
    if(isset($_SESSION['status']))
    {
        ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong style="color:red;">Success!</strong> <?= $_SESSION['status']; ?>
              
            </div>
        <?php 
        unset($_SESSION['status']);
    }

?>

					<h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  BOOK YOUR TICKET </h2> 
				
					<hr class="mb-3">
					<label for="firstname"><b>Firstname</b></label>
					<input class="form-control"  type="text" name="firstname" placeholder= "Please type your firstname"  required/>
                    
                    <label for="lastname"><b>Lastname</b></label>
					<input class="form-control"   type="text" name="lastname"placeholder="Please type your lastname" required/>

					<label for="username"><b>Address</address></b></label>
					<input class="form-control"   type="text" name="address" placeholder="Please type your address" required/>
                    
					<label for="contactnumber"><b>Contact number</address></b></label>
					<input class="form-control"   type="text" name="contact_number"  maxlength="11" placeholder="Please type your phone number" required>

					<label for="economy"><b>Economy</b></label> <br>
				
					
                    <select name="economy" required>

					        <option value="">SELECT</option>
							<option value="Economy A">Economy A</option>
							<option value="Economy B">Economy B</option>
							<option value="VIP">VIP</option>

                     
					</select>
                    
					<br><br>	<label for="schedule"><b>Destination</b></label> <br>
                    <select name="trip" required>  <br><br><br>
					&nbsp;&nbsp;&nbsp;&nbsp;      <option value="">	SELECT</option>  
							<option value="Cebu to Hilongos Daytrip 10am">Cebu to Hilongos Daytrip 10am</option>
							<option value="Hilongos to Cebu Nighttrip 10am">Hilongos to Cebu Nighttrip 10am</option>
							<option value="Cebu to Ormoc Daytrip 1pm">Cebu to Ormoc Daytrip 1pm</option>
							<option value="Manila to Tokyo 12pm">Manila to Tokyo 12pm</option>
							<option value="Manila to NewYork 10pm">Manila to NewYork 10pm</option>



					</select>
					

					


					<hr class="mb-3">
					<button id="normalalert" type="submit" name="submit">Book</button>
		
				</div>
			</div>
		</div>
	</form>
</div>

</body>

</html>

<?php

include ('./connect.php');
if(isset($_POST['submit']))
{  
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$address=$_POST['address'];
$contact_number=$_POST['contact_number'];
$trip=$_POST['trip'];
$economy=$_POST['economy'];






$result="INSERT into mybook (firstname,lastname,address,contact_number,trip,economy) VALUES('$firstname', '$lastname', '$address', '$contact_number', '$trip', '$economy')";
$result	= mysqli_query($mysqli, $result);

if($result)
{
	$_SESSION['status'] = "BOOKING INSERTED";
	header('location: book.php');
}
else
{
    echo "something wrong";
}

}
 	
 	
  

?>


