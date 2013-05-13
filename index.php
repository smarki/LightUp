<?php
define('RemoteAccess',1);
include '/core/connectors/database.php';

?>

<!DOCTYPE html>

<html>
<head>
<title>The Lighter ver 0.001</title>
<script language="javascript" src="js/jquery.js"></script>
<style>
body {
	font-family: 'lucida grande', tahoma, verdana, arial, sans-serif;
	font-size: 13px;
	background-color: #e7ebf2;
}
li, td {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px
}
hr {
	color: #3333cc;
width=300;
text-align=left
}
a {
	color: #000000
}
.wizardsInputs {
	margin-top: 0.2em;
	margin-left: 1em;
}
label {
	width: 100px;
}
textarea {
	overflow: hidden;
	resize: none;
}
.popup {
	position: relative;
	margin-left: auto;
	margin-right: auto;
	top: 125px;
	width: 500px;
	min-height: 150px;
	border: 10px solid rgba(82, 82, 82, .7);
	-webkit-border-radius: 8px;
	background-color: #e7ebf2;
}

#newGameWizzard {
	display: none;
}
.button {
	background-color:#F5F5F5;
	border: 1px solid #999;
	border-bottom-color:#666;
	width:80px;
	height:30px;
	padding:2px;
	color:#FFF
	-moz-box-shadow: 0 1 0px rgba(0, 0, 0, .1);
	-webkit-box-shadow: 0 1 0px rgba(0, 0, 0, .1);
	box-shadow: 0 1px 0 rgba(0, 0, 0, .1);
}

#newGameWizzardLogo {
	padding-left: 1em;
	padding-top: 5px;
}
.popupHeader {
	background-color: #3B5998;
	height: 25px;
	font-size: 14px;
	color: #FFF;
	font-weight: bold;

}
</style>
<script>
$(document).ready(function() {
	function setCss(){
		$('.popupLogo').css('width',$('.popup').width());
	}
    $('#newGameButton').click(function(){
		setCss();
		$('#newGameWizzard').css({display:'block'});
		$('#closePopupButton').click(function(){
			$(this).closest('.popup').css({display:'none'});
		});
	});
});
</script>
<meta charset="utf-8">
</head>

<body>
<div id="header">
  <div id="logo"><img src="lighter.jpg" alt="Lighter logo" border="0" align="left" valign="bottom" height="70" width="300" /></div>
  <a id="newGameButton" class="button">Start a new Game</a> </div>

<!--Parakato tha prepei na ginei elegxos simpliroseis apo tis formes me js-->
<div class="popup" id="newGameWizzard">
  <div>
    <div class="popupHeader">
      <div id="newGameWizzardLogo">NEW GAME</div>
    </div>
    <form name="input" type=" action="get_question.php" method="post" >
      <p>
        <label class="wizardsInputs label" for="questionTextarea">Enter your question:</label>
        <textarea class="wizardsInputs" id="questionTextarea" name="question" cols="55" rows="4"></textarea>
        <br>
        <label class="wizardsInputs label" for="receiverName">Enter the name of a friend you want to pass the lighter to:</label>
        <br>
        <input class="wizardsInputs"type="text" name="receiver" id="receiverName" size="72">
        </br>
        <input class="wizardsInputs" type="submit" value="Submit your question" class="button"/>
        <a id="closePopupButton" class="button">Cancel</a> </p>
      </br>
    </form>
  </div>
</div>
</body>
</html>