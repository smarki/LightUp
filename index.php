<?php

session_start();

$dbconn = pg_connect("host=localhost port=5432 dbname=pg user=postgres password=alex");
// store session data
$_SESSION['dbconn'] = $dbconn;
?>

<!DOCTYPE html>

<html>
<head>
<title>The Lighter ver 0.001</title>

</head>
<body>
<p1>Welcome to the Lighter application</p1>
<p2>Unfortunately for the moment you can't do a lot of interesting things</p2>
<!--Parakato tha prepei na ginei elegxos simpliroseis apo tis formes me js-->
<form name="input" action="get_question.php" method="post">
Enter your question: 
<input type="text" name="question"></br>
Enter the name of a friend you want to pass the lighter to:
<input type="text" name="friend"></br>
<input type="submit" value="Submit your question"/></br>
</form>

</body>
</html>