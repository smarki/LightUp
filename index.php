<?php 
$dbconn = pg_connect("host=localhost port=5432 dbname=pg user=postgres password=bob12345");
?>
<!DOCTYPE html>
<html>
<head>
<title>Gamiete o Dias</title>
<script src="js/jquery.js"></script>
</head>
<body>
<h1>Hello World!</h1>
<?php  $rs = pg_query($dbconn,"SELECT * FROM users WHERE name='Stefanos'");
echo '<table>';
while($row = pg_fetch_assoc($rs))
{
	echo '<t>';
	echo '<td align="center" width="50">'.$row['id'].'</td>';	
	echo '<td align="center" width="50">'.$row['joned'].'</td>';
	echo '<td align="center" width="50">'.$row['name'].'</td>';
	echo '</tr>';	
}
echo '</table>';
?>
</body>
</html>
