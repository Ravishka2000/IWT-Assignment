<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/tables.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales</title>
</head>
<body>
    <?php

include("config.php");

//to calculate and to display total profit 

$result=mysqli_query($conn,"SELECT SUM(payment) as total from sales");
$data=mysqli_fetch_assoc($result);
echo "<div class='displayT'>";
echo "<h2 class='user'> Profit: </h2>";
echo $data['total'];
echo "</div>";


$sql = "SELECT  order_id,payment FROM sales";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  
  // output data of each row
  echo "<table class= 'userT'>";
    echo "<tr class='userR'>";
      echo "<th class='userh'>order_id</th>";
      echo "<th class = 'userh'>payment</th>";
    echo "</tr>";

  while($row = mysqli_fetch_assoc($result)) {

  echo "<tr class='userR'>";
    echo "<td class='userd'>" . $row['order_id'] . "</td>";
    echo "<td class='userd'>" . $row['payment'] . "</td>";
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