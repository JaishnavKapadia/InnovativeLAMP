<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trip for Chopta</title>
</head>

<!---------------------------------------------- Description about trip --------------------------->
<body>
<fieldset style="float:left;height:100%;width:100%;">
<legend> Chopta Package Details</legend>
<p>
<table>
  <tr><th>Camp Duration:</th><td>08 Days 07 Nights</td></tr>
  <tr><th>Camp Type:</th><td>Trekking and Adventure Activities</td></tr>
  <tr><th>Region:</th><td> Uttarakhand, India </td></tr>
  <tr><th>Accommodation:</th><td> Tent/Room on Sharing </td></tr>
  <tr><th>Food:</th><td> Pure Veg</td></tr>
  <tr><th>Transportation:</th><td> Train, Bus and Car.</td></tr>
  <tr><th>PDF:</th><td><a href="Chopta-Details-MS.pdf">Know More</a></td></tr>
</table>
</p><br>
<!------------ Connet to Database for Full Select table --------(First php Script)--------------------->
<p>
  People Intrested and Registered:
<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $con = mysqli_connect('localhost', 'root', '','innovative');
  $result = mysqli_query($con,"SELECT * FROM `chopta` ");

echo "<table border='1'>
<tr>
<th>No.</th>
<th>Full Name</th>
<th>Age</th>
<th>Gender</th>
<th>Phone Number</th>
<th>Email</th>
<th>Aadhar Card</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
  $tem = $row['Number'];
echo "<tr>";
echo "<td>" . $row['Number'] . "</td>";
echo "<td>" . $row['Full Name'] . "</td>";
echo "<td>" . $row['Age'] . "</td>";
echo "<td>" . $row['Gender'] . "</td>";
echo "<td>" . $row['Phone'] . "</td>";
echo "<td>" . $row['Email'] . "</td>";
//----------Check if file exixts in folder first-----------------
if(file_exists("Uploads/2".$row['Number'] .".pdf")){
  echo "<td> <a href ='Uploads/2".$row['Number'] .".pdf' >". $row['Full Name'] ."</a></td>";
}
//-----------if not send link to upload page--------------------
else{
  echo "<td><a href='UploadAadhar.php'>Upload Aadhar pdf</a></td>";
}
echo "</tr>";
}
echo "</table>";


mysqli_close($con);
}
?>
</p>

<!----------------------- Registration Form for user to add into table ------------------------------------>
<p><br>
Please name your Aadhar pdf As '2' + "Your No." Thank You.
<br>
<h3>Register:</h3>
<form name="Register" method="post" action="Trip_Chopta.php">
<table>
<tr>
  <th><label for="number">No.</label></th>
    <td><input type="int" name="number" id="number"></td>
</tr>
<tr>
  <th><label for="name">Full Name</label></th>
  <td><input type="text" name="name" id="name" ><span class="error">* <br></span></td>
</tr>
<tr>
  <th><label for="age">Age</label></th>
  <td><input type="int" name="age" id="age"><span class="error">* <br></span></td></tr>
<tr>
  <th><label for="gender">Gender</label></th>
  <td><input type="text" name="gender" id="gender"><span class="error">* <br></span></td>
</tr>
<tr>
  <th><label for="phone">Phone</label></th>
  <td><input type="text" name="phone" id="phone"><span class="error">* <br></span></td>
</tr>
<tr>
  <th><label for="email">Email</label></th>
  <td><input type="text" name="email" id="email"><span class="error">* <br></span></td>
</tr>

</table>
<input class="button button2" type="submit" name="Submit" id="Submit" value="Submit" >
</form>
<Button class="button button2"  onclick="window.location.href='Travel_Main.php'">Home</Button>
</p>

<style>
.error {color: #FF0000;}
.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button2 {
  background-color: white;
  color: black;
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
</style>
</body>

<!------------------------------Second Php Script (for inserting into table in database) -->
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
  //----------------------------------- Form Validations ----------------------------------------------------
  $data = $_POST;
  if (empty($data['name']) || empty($data['gender']) || empty($data['age']) ||empty($data['email']) || empty($data['phone'])) {
      
      die('Please fill all required fields!');
  }
  //------

  $con = mysqli_connect('localhost', 'root', '','innovative');

  $Number = $_POST['number'];
  $Name = $_POST['name'];
  $Age = $_POST['age'];
  $Gender = $_POST['gender'];
  $Phone = $_POST['phone'];
  $Email = $_POST['email'];



  if (isset($_POST['Submit'])) {
    $sql = "INSERT INTO `chopta` (`Number`, `Full Name`, `Age`, `Gender`, `Phone`, `Email`) VALUES ('$Number', '$Name', '$Age', '$Gender', '$Phone', '$Email')";
  
    $rs = mysqli_query($con, $sql) or die(mysqli_error());
      if($rs)
      {
	      echo "Item Inserted";
      }
  
  }  
  header("Location: Trip_Chopta.php");
}
?>