<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms get</title>
</head>
<body>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
 {
    $bustype = $_POST['bustype'];
    $srv = $_POST['srv'];
    $drivername = $_POST['drivername'];
    $drivercontact= $_POST['drivercontact'];
    
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "buspass";

 
  $con = mysqli_connect($servername, $username, $password, $database);

  $sql = "INSERT INTO `bus` (`bustype`, `srv`, `drivername`, `drivercontact`) VALUES (' $bustype', '$srv', '$drivername', '$drivercontact');";

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
<form action="/project/naveen.php" method="post">

  bustype:<br>
  <input type="text" id="bustype" name="bustype" ><br>


  srv:<br>
  <input type="text" id="srv" name="srv" ><br><br>

  drivername:<br>
  <input type="text" id="drivername" name="drivername" ><br><br>

  drivercontact:<br>
  <input type="text" id="drivercontact" name="drivercontact" ><br><br>
 

  <input type="submit" value="Submit">
</form> 
</body>
</html>