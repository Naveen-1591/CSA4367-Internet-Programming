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
    $starttime = $_POST['starttime'];
    $endtime = $_POST['endtime'];
    $no_of_stoppings = $_POST['no_of_stoppings'];
    $no_of_ways= $_POST['no_of_ways'];
    
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "route";

 
  $con = mysqli_connect($servername, $username, $password, $database);

  $sql = "INSERT INTO `busroot` (`starttime`, `endtime`, `no_of_stoppings`, `no_of_ways`) VALUES ('$starttime', ' $endtime', '$no_of_stoppings', ' $no_of_ways');";

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
<form action="/project/naveen1.php" method="post">

  starttime:<br>
  <input type="text" id="starttime" name="starttime" ><br>


  endtime:<br>
  <input type="text" id="endtime" name="endtime" ><br><br>

  no_of_stoppings:<br>
  <input type="text" id="no_of_stoppings" name="no_of_stoppings" ><br><br>

  no_of_ways:<br>
  <input type="text" id="no_of_ways" name="no_of_ways" ><br><br>
 

  <input type="submit" value="Submit">
</form> 
</body>
</html>