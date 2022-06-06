<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/tables.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
</head>
<body>

<?php


  include("config.php");

$sql = "SELECT  id,c_name,review FROM reviews";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row

  echo "<table class= 'userT'>";
    echo "<tr class='userR'>";
      echo "<th class='userh'>id</th>";
      echo "<th class = 'userh'>Customer name</th>";
      echo "<th class = 'userh'>Review</th>";  
    echo "</tr>";

  
  while($row = mysqli_fetch_assoc($result)) {
  echo "<tr class='userR'>";
    echo "<td class='userd'>" . $row['id'] . "</td>";
    echo "<td class='userd'>" . $row['c_name'] . "</td>";
    echo "<td class='userd'>" . $row['review'] . "</td>";
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