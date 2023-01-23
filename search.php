<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Table</title>
</head>
<style type="text/css">
	table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #04AA6D;
  color: white;
}
</style>
<body style="text-align: center;">
	<table border="1" cellpadding="2" align="center">
		<tr>
		<th>Name</th>
		<th>Nationality</th>
		<th>Current Club</th>
        <th>Goals</th>
		</tr>
		<?php
include 'connection.php';
   $a = $_POST['NAME'];
	$sql= "select * from players where NAME LIKE %$a%;";
	$row=mysqli_query($con,$sql);
	while($data=mysqli_fetch_array($row)){
		echo "<tr>"."<td>".$data['NAME']."</td>"."<td>".$data['Nationality']."</td>"."<td>".$data['Current_Club']."</td>".$data['Goals']."</td>"."</tr>";

	}


?>
	</table>

</body>
</html>