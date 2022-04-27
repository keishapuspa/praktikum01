<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <link rel="stylesheet" href="latihan01a.css">
  <title>Query ke Database</title>
</head>
<body>
  <h1>Klasemen Sementara (HTML + PHP + MySQL)</h1>
<?php
// database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "praktikum01";

// Create connection to database
$conn = new mysqli($servername, $username, $password, $dbname);

// check if connection is successful
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT rank, name, points, team
FROM klasemen";
$result = $conn->query($sql);

if($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "rank: " . $row["rank"]. " - Name: " . $row["name"].
    " " . $row["points"]. " - Team: " . $row['team'] . "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>


<h1>Klasemen Sementara (HTML + PHP Array)</h1>
<table class="styled-table">
  <thead>
    <tr>
      <th>Rank</th>
      <th>Name</th>
      <th>Points</th>
      <th>Team</th>
    </tr>
  </thead>
<tbody>
  <?php




# tulis array ke page

foreach ($racer_list as $racer) {
  echo("<tr><td>" . $racer[0] . "</td><td>" . $racer[1] ."</td><td>" . $racer[2] ."</td><td>" . $racer[3] . "</td></tr>");
}
?>

  </tbody>
</table>
</body>
</html>
