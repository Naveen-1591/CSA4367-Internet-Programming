<!DOCTYPE html>
<html lang="en">
<head>
    <title>forms get</title>
</head>
<body>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
 {
    $name = $_POST['name'];
    $ph_no = $_POST['ph_no'];
    $depart_loc = $_POST['depart_loc'];
    $desti_loc = $_POST['desti_loc'];
    $flight_category= $_POST['flight_category'];
    $DOJ = $_POST['DOJ'];
    $payment= $_POST['payment'];
    
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "aeroplane";

  $con = mysqli_connect($servername, $username, $password, $database);

  $sql = "INSERT INTO `passenger_details` (`name`, `ph_no`, `depart_loc`, `desti_loc`, `flight_category`, `DOJ`, `payment`) VALUES ('$name', '$ph_no', '$depart_loc', '$desti_loc', '$flight_category', '$DOJ', '$payment');";

  $result = mysqli_query($con, $sql);

  if ($result)
 {
    echo "Data inserted successfully";

  } 
else
 {
    echo "Data not inserted successfully";
  }
}
?>
<form action="/Aeroplane/06)Details.php" method="post">

  Name:<br>
  <input type="text" id="name" name="name" ><br><br>

  phone number:<br>
  <input type="text" id="ph_no" name="ph_no" ><br><br>

  Departure location:<br>
  <input type="text" id="depart_loc" name="depart_loc" ><br><br>

  Destination location:<br>
  <input type="text" id="desti_loc" name="desti_loc" ><br><br>

  flight category:<br>
  <input type="text" id="flight_category" name="flight_category" ><br><br>

  DOJ:<br>
  <input type="text" id="DOJ" name="DOJ" ><br><br>

  payment:<br>
  <input type="text" id="payment" name="payment" ><br><br>
 
  <input type="submit" value="Submit">
</form> 
</body>
</html>