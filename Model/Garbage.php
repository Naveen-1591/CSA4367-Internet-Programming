<!DOCTYPE html>
<html lang="en">
<head>
    <title>forms get</title>
</head>
<body>
<h1>ENTER DETAILS TO CREATE GARBAGE BIN</h1>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
 {
    $name = $_POST['name'];
    $id = $_POST['id'];
    $garbagebin = $_POST['garbagebin'];
    $bestroute= $_POST['bestroute'];
    $report= $_POST['report'];
    
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "garbage";

  $con = mysqli_connect($servername, $username, $password, $database);

  $sql = "INSERT INTO `details` (`name`, `id`, `garbagebin`, `bestroute`, `report`) VALUES ('$name', '$id', '$garbagebin', '$bestroute', '$report');";

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
<form action="/Aeroplane/Garbage.php" method="post">

  Name:<br>
  <input type="text" id="name" name="name" ><br><br>

  id:<br>
  <input type="text" id="ph_no" name="ph_no" ><br><br>

  Garbage bin:<br>
  <input type="text" id="depart_loc" name="depart_loc" ><br><br>

  Best route:<br>
  <input type="text" id="desti_loc" name="desti_loc" ><br><br>

  Report:<br>
  <input type="text" id="flight_category" name="flight_category" ><br><br>

  
  <input type="submit" value="Submit">
</form> 
</body>
</html>