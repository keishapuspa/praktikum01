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

  <h1>Klasemen Sementara (HTML + PHP + CSV File)</h1>
  <table class="styled-table">
  <thead>
  <tr>
  <th>Rank</th>
  <th>Name</th>
  <th>Points</th>
  <th>Team</th>
  </tr>
  </thead>
  <?php
  // database credentials
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "praktikum01";

  // Create connection to database
  $conn = new mysqli($servername, $username, $password, $dbname);

  // check if connection is successful
  // check if connection is successful
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  ?>
  <tbody>
  <?php
    $sql = "SELECT rank, name, points, team
    FROM klasemen";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["name"].
        "</td><td>" . $row["points"]. "</td><td>" . $row['team'] . "</td></tr>";
      }
    } else {
      echo "0 results";
    }
    $conn->close();
    ?>



</body>
</html>
