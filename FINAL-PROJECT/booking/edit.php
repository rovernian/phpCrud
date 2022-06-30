<?php
session_start();
include("./connect.php");


if(isset($_POST['update']))
{
	$id = $_POST['id'];

	$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $contact_number = $_POST['contact_number'];
    $trip = $_POST['trip'];
    $economy = $_POST['economy'];

	
	$result = mysqli_query($mysqli, "UPDATE  mybook SET firstname='$firstname',lastname='$lastname',address='$address',contact_number='$contact_number',trip='$trip',economy='$economy' WHERE id=$id");
    

	header("Location: table.php");
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM mybook WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$firstname = $user_data['firstname'];
	$lastname = $user_data['lastname'];
	$address = $user_data['address'];
    $contact_number = $user_data['contact_number'];
    $trip = $user_data['trip'];
    $economy = $user_data['economy'];
   
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT DATA</title>
	<link rel="stylesheet" type="text/css" href="./style6.css">
    <link rel="icon" href="../home/bg1.jpg">
    
<body>  
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-1">

           
             
	<form name="update_user" method="POST" action="./edit.php">
                
              
	

                    
                    <h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;UPDATE BOOKINGS </h2> 
                     <label for="">Ticket #</label>
                    <input class="form-control"type="text" name="id" value=<?php echo $id;?> >
								
				    <div class="col-sm-1">
				
				
					<hr class="mb-5">
					<label for="firstname"><b>Firstname</b></label>
					<input class="form-control"  type="text" name="firstname" value=<?php echo $firstname;?> required>
                    
                    <label for="lastname"><b>Lastname</b></label>
					<input class="form-control"  type="text" name="lastname" value=<?php echo $lastname;?> required>

					<label for="username"><b>Address</address></b></label>
					<input class="form-control"   type="text" name="address" value=<?php echo $address;?>required>
                    
					<label for="contact number"><b>Contact number</address></b></label>
					<input class="form-control"   type="text" name="contact_number" maxlength="11" value=<?php echo $contact_number;?>>


						
                     <label for="economy"><b>Economy</b></label> <br>
				
					
                        <select name="economy" required>

                        <option value="">SELECT</option>
                        <option value="Economy A">Economy A</option>
                        <option value="Economy B">Economy B</option>
                        <option value="VIP">VIP</option>

                 
                         </select>
                
                       <br><br><label for="schedule"><b>Destination</b></label> <br>
                       <select name="trip" required> <br><br><br>
                        <option value="">	SELECT</option>  
                        <option value="Cebu to Hilongos Daytrip 10am">Cebu to Hilongos Daytrip 10am</option>
                        <option value="Hilongos to Cebu Nighttrip 10am">Hilongos to Cebu Nighttrip 10am</option>
                        <option value="Cebu to Ormoc Daytrip 1pm">Cebu to Ormoc Daytrip 1pm</option>
                        <option value="Manila to Tokyo 12pm">Manila to Tokyo 12pm</option>
						<option value="Manila to NewYork 10pm">Manila to NewYork 10pm</option>


                      </select>
                


                            </div>
                            </div>
                            <div class="form-group mb-1">
                                <button type="submit" name="update" class="btn btn-primary">Update Data</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>