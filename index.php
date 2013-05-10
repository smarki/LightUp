<?php



$dbconn = pg_connect("host=localhost port=5432 dbname=pg user=postgres password=alex");

?>

<!DOCTYPE html>

<html>
<head>
<title>The Lighter ver 0.001</title>
    <style>
      body { font-family: Arial, Helvetica, sans-serif; font-size: 13px }
      li, td { font-family: Arial, Helvetica, sans-serif; font-size: 13px }
      hr { color: #3333cc; width=300; text-align=left}
      a { color: #000000 }
    </style>
  </head>
  <body>
  <img src="lighter.jpg" alt="Lighter logo" border="0"
       align="left" valign="bottom" height="70" width="300" />
  
  <hr />
  
 

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