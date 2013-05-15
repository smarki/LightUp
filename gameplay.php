<html>
<head>
<title>Lighter app Version 0.0000000001</title>
<style>
.message {
	background-color:#e0ffff;
	background-image:url('images/lighter.jpg');
	background-repeat:no-repeat;
	text-align:center;
	font-size:2em;
	font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
	border:0.125em solid black;
	height:77px;
}

.player_frame {
	width:160px;
	border:0.3em solid blue;
	float:left;
}

.interaction {
	float:left;
	vertical-align:middle;
}

.main_container {
	align: center;
	margin-left:auto;
	margin-right:auto;
	width: 70%;
}

</style>
</head>


<body>
<div class="message">
You have just started a new lighter game!
</div>
</br></br>
<div class="main_container">

	<div class="player_frame">
		<img class="player_image" id="player1" src="images/Aris.jpg" alt="player1">
	</div>

	<div class="interaction">
		<a id="question_link_1" href="show_question.php">
			<img class="arrow" id="arrow1" src="images/arrow.jpg" alt="question1">
		</a>
	</div>

	<div class="player_frame">
		<img class="player_image" id="player2" src="images/Alex.jpg" alt="player2">
	</div>

	<div class="interaction">
		<img class="arrow" id="arrow2" src="images/arrow.jpg" alt="question2">
	</div>

	<div class="player_frame">
		<img class="player_image" id="player3" src="images/Pantelis.jpg" alt="player3">
	</div>
	
</div>


</body>
</html>
