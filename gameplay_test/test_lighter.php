<html>
<head>
<title>Lighter app Version 0.0000000001</title>
<script language="javascript" src="js/jquery.js"></script>
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

</style>

<script>
	$(document).ready(function() {
		$('#continue_game_button').click(function(){
			$('#player1').attr('src','images/Alex.jpg');
			$('#player2').attr('src','images/Pantelis.jpg');
			$('#player3').attr('src','images/unknown.jpg');
			$('#arrow1').attr('src','images/arrow.jpg');
			$('#arrow2').attr('src','images/arrow.jpg');
		});
	});
</script>

</head>


<body>
<div class="message">
	Alex passed you the lighter and asked you a question!
</div>
</br></br>

<div class="question">
	Who of your friends is the sexiest?
</div>

</br>

<div class="main_container">
	<img class="player_image" id="player1" src="images/unknown.jpg" alt="player1">
	<img class="arrow" id="arrow1" src="images/QuestionMark.jpg" alt="question1">
	<img class="player_image" id="player2" src="images/Alex.jpg" alt="player2">
	<img class="arrow" id="arrow2" src="images/arrow.jpg" alt="question2">
	<img class="player_image" id="player3" src="images/Pantelis.jpg" alt="player3">	
</div>

</br>

 <button type="button" class="button" id="continue_game_button">Pass the lighter!</button> 


</body>
</html>
