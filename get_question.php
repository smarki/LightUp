<?php

$dbconn = pg_connect("host=localhost port=5432 dbname=pg user=postgres password=alex");

//q_text contains the question text
$q_text = $_POST['question'];
//the name of the friend
$f_name = $_POST['friend'];
echo $q_text;

// Prepare a query for execution
$result = pg_prepare($dbconn, "f_query", 'SELECT * FROM users WHERE name = $1');



// Execute the prepared query
$result = pg_execute($dbconn, "f_query", $f_name);  //edo den eimai sigouros an epitrepetai to f_name
?>