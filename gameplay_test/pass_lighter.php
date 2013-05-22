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
	border:0.3em solid blue;
	float:left;
}

.interaction {
	float:left;
}

.main_container {
	text-align: center;
	margin-left:auto;
	margin-right:auto;
	padding:10px;
	align:center;
}

.question {
	text-align:center;
	border:0.125em solid black;
	margin-left:auto;
	margin-right:auto;
	font-size:2em;
	font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
}

.button{
	border:1px solid #7d99ca; -webkit-border-radius: 3px; -moz-border-radius: 3px;border-radius: 3px;font-family:arial, helvetica, sans-serif; padding: 10px 10px 10px 10px; text-shadow: -1px -1px 0 rgba(0,0,0,0.3);font-weight:bold; text-align: center; color: #FFFFFF; background-color: #a5b8da;
	background-image: -webkit-gradient(linear, left top, left bottom, from(#a5b8da), to(#7089b3));
	background-image: -webkit-linear-gradient(top, #a5b8da, #7089b3);
	background-image: -moz-linear-gradient(top, #a5b8da, #7089b3);
	background-image: -ms-linear-gradient(top, #a5b8da, #7089b3);
	background-image: -o-linear-gradient(top, #a5b8da, #7089b3);
	background-image: linear-gradient(to bottom, #a5b8da, #7089b3);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#a5b8da, endColorstr=#7089b3);
	display:block;
	margin-left:auto;
	margin-right:auto;
}

.question_form {
	font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
	display:block;
	margin-left:auto;
	margin-right:auto;
	width:470px;
}
</style>
</head>
<body>
<div class="message">
	Pass the lighter to a friend and ask your question!
</div>
</br></br>

<div class="question">
	Who is the sexiest?
</div>

</br>

<div class="main_container">
	<img class="player_image" id="player1" src="images/Alex.jpg" alt="player1">
	<img class="arrow" id="arrow1" src="images/arrow.jpg" alt="question1">
	<img class="player_image" id="player2" src="images/Pantelis.jpg" alt="player2">
	<img class="arrow" id="arrow2" src="images/arrow.jpg" alt="question2">
	<img class="player_image" id="player3" src="images/unknown.jpg" alt="player3">	
</div>

</br>
</br>

<form class="question_form" name="input" action="post_question.php" method="post">
<textarea id="question_textarea" name="my_question" cols="55" rows="4">Enter your question:</textarea>
</br>
</br>
<label for="receiver_name">Enter the name of a friend you want to pass the lighter to</label>
</br>
<input type="text" name="receiver" id="receiver_name" size="72" value="To:"/>
</br>
</br>
<input type="submit" value="Pass the lighter" class="button" id="submit_question" />
</form>
</br>
</body>
</html>
