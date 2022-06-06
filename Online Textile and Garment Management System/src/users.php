
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="styles/tables.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>
</head>
<body>

<?php


include("config.php");

//calculate and output total number of users

$result=mysqli_query($conn,"SELECT count(*) as total from registered_customer");
$data=mysqli_fetch_assoc($result);
echo "<div class='displayT'>";
echo "<h2 class='user'> Total Users </h2>";
echo $data['total'];
echo "</div>";

//query to get the information
$sql = "SELECT  id,firstName,lastName,email,phoneNo FROM registered_customer";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo "<table class= 'userT'>";
    echo "<tr class='userR'>";
      echo "<th class='userh'>id</th>";
      echo "<th class = 'userh'>first Name</th>";
      echo "<th class = 'userh'>last Name</th>";
      echo "<th class= 'userh'>Email</th>";
      echo "<th class = 'userh' >Phone number</th>";
  echo "</tr>";


  while($row = mysqli_fetch_assoc($result)) {

  echo "<tr class='userR'>";
    echo "<td class='userd'>" . $row['id'] . "</td>";
      echo "<td class='userd'>" . $row['firstName'] . "</td>";
      echo "<td class='userd'>" . $row['lastName'] . "</td>";
      echo "<td class='userd'>" . $row['email'] . "</td>";
      echo "<td class='userd'>" . $row['phoneNo'] . "</td>";
  echo "</tr>";


  }

  echo "</table>";

} else {

  echo "0 results";

}


mysqli_close($conn);


?>

  
</body>
</html>

