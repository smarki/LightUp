<?php 
$_POST["question"];
$_POST["sender"];
$_POST["recipient"];

$cleanQuestion = pg_escape_string($_POST["question"]);
$result = pg_query("INSERT INTO questions (text, game_id, 
?>