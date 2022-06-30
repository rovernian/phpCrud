<?php
session_start();


if(!isset($_SESSION["username"]))
{
	header("location: table.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
  <title>DATA</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
    <link rel="icon" href="../home/bg1.jpg">

    <title>Final PRoject</title>
</head>
<body>
<!-- <center> <label class="text muted-light-1"><a href="../home/index.html"> Homepage </a></label></center>   <br> -->
<div class="button">
<a href="../home/index.html" class="button">HOMEPAGE</a>
					</div>
    <br>  <br>  <br>                                                          
    
    <label class="text muted-light1"> <a href="../booking/logout.php"> LOGOUT </a></label>
  
  
   
 <form action="" method="POST"> 



               <h2 style="color:Blue;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;BOOKING LIST</h2>
  
    
    <br> </br>
  
    <table style="width: 100%"  >
      
        <tr>
          <th>Ticket #</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Address</th>
          <th>Contact number</th>
          <th>Economy</th>
          <th>Trip</th>
          <th>Fillup Time/Date</th>
         <th>Action</th>
        </tr>    
        <?php
          $id = 0;
					include('.//connect.php');
					$result=mysqli_query($mysqli,"SELECT * from mybook ");
					while($user_data=mysqli_fetch_array($result)){
              
            
						?>
						<tr>
              <td><?php echo $user_data['id'];?></td>
							<td><?php echo $user_data['firstname']; ?></td>
							<td><?php echo $user_data['lastname']; ?></td>
              <td><?php echo $user_data['address']; ?></td>
              <td><?php echo $user_data['contact_number']; ?></td>
              <td><?php echo $user_data['economy']; ?></td> 
              <td><?php echo $user_data['trip']; ?></td> 
              <td><?php echo $user_data['fillup_date']; ?></td>
              
              
              
							<td>
                
								<a href="edit.php?id=<?php echo $user_data['id']; ?>"  class="edit1">Edit</a>
								<a href="delete.php?id=<?php echo $user_data['id']; ?>"onclick="return confirm('sure na gyud ka imo e  delete')">Delete</a>
							</td>
						</tr>
						<?php
            $id++;
					}
				?>
  

        
    </table>

</body>

</html>