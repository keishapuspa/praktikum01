<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <link rel="stylesheet" href="latihan01a.css">
  <title>Latihan 03 - PHP dan File</title>
</head>
<body>
  <?php
//baca file dr csv
$file = fopen("klasemen.csv" , "r");
while (($data_row = fgetcsv($file, 1000, ",")) !== FALSE) {
	// SIMPAN
	$racer_list[] = $data_row;
}
//debug
// rptnin
fclose($file);
?>
<h1>Klasemen Sementara (HTML + PP + CSV File)</h1>
<table class="styled-table"
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
# tulis arar
foreach ($racer_list as $racer) {
	echo("<tr><td>" . $racer[0] . "</td><td>" . $racer[1] ."</td><td>" . $racer[2] ."</td><td>" . $racer[3] . "</td></tr>");
}

?>
</tbody>
</table>
</body>
</html>
