<!DOCTYPE html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Averia+Libre:700|Marck+Script' rel='stylesheet' type='text/css'>
<title>Lighter</title>
<style>
	* {
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}
	body {
		font-size:170%;
		background-color: rgba(75,179,130,.20);
		font-family: 'Marck Script', cursive;
	}
	.app_container{
		min-width:650px;
		max-width:800px;
		min-height:750px;
		width:80%;
		border:2px solid black;
		background-color:rgba(75,179,130,.10);
		margin-left:auto;
		margin-right:auto;
		border-radius:15px;
		height:900px;
		overflow:hidden;
	}
	.banner{
		max-width:800px;
		width:100%;
	}
	.shop{
		max-width:800px;
		width:100%;
		background-image:radial-gradient(white,rgba(255,234,148,.80));
		border-top:2px solid black;
		border-bottom:2px solid black;
		margin-top:-10px;
		height:42px;
	}
	.coins{
		width:12%;
		background-color:rgb(100,176,137);
		border:2px solid rgb(0,69,20);
		border-radius:10px;
		margin-left:3%;
		height:95%;
		margin-top:0.1%;
		margin-bottom:0.2%
	}
	.coin_image{
		width:20%;
		margin-left:5%;
		margin-top:7%;
		margin-right:20%;
		float:left;
	}
	.coin_amount{
		font-family: 'Averia Libre', cursive;
		font-size:80%;
		display:inline; 
	}
	.add_coins{
		position:relative;
		top:-32px;
		left:16.5%;
	}
	.interface{
		max-width:800px;
		width:100%;
		overflow:auto;
		height:755px;
	}
	#new_game_button{
		font-family: 'Averia Libre', cursive;
		border:1px solid rgb(138,13,13); 
		border-radius:15px;
		width:53%;
		display:block;
		margin-left:auto;
		margin-right:auto;
		text-align:center;
		padding-top:10px;
		padding-bottom:10px;
		background-image:linear-gradient(180deg,rgb(191,79,79),rgb(138,13,13));
		text-decoration:none;
		color:white;
		margin-top:30px;
	}
	.button{
		font-family: 'Averia Libre', cursive;
		border:1px solid rgb(138,13,13); 
		border-radius:15px;
		width:17%;
		display:block;
		text-align:center;
		padding-top:3px;
		padding-bottom:3px;
		font-size:90%;
		background-image:linear-gradient(180deg,rgb(191,79,79),rgb(138,13,13));
		text-decoration:none;
		color:white;
	}
	.game{
		position:relative;
		top:120px;
		width:91.5%;
		height:185px;
		background-color:rgba(0,104,55,.8);
		margin-left:auto;
		margin-right:auto;
		border:2px solid rgb(0,69,20);
		margin-bottom:180px;
	}
	.game_owner{
		position:absolute;
		top:-50px;
		left:20px;
		border:1px solid rgb(82,156,119);
		background-color:rgb(0,69,20);
		color:white;
		width:31%;
		text-align:center;
		box-shadow:0 0 0px 3px rgb(0,66,35);
		border-radius:10px;
		padding-top:2px;
		padding-bottom:2px;
	}
	.your_turn{
		position:absolute;
		top:-50px;
		right:1px;
		border:1px solid rgb(82,156,119);
		background-color:rgb(0,69,20);
		color:white;
		width:23.5%;
		text-align:center;
		box-shadow:0 0 1px 3px rgb(0,66,35);
		padding-top:2px;
		padding-bottom:2px;
	}
	.round_label{
		position:absolute;
		left:18px;
		top:2px;
		font-weight:bold;
	}
	.round{
		position:absolute;
		left:105px;
		top:2px;
		color:rgb(243,182,116);
	}
	.question_label{
		position:absolute;
		left:18px;
		top:35px;
		font-weight:bold;
	}
	.question{
		position:absolute;
		left:125px;
		top:35px;
		color:rgb(243,182,116);
	}
	.answered_label{
		position:absolute;
		left:18px;
		top:68px;
		font-weight:bold;
	}
	.answer{
		position:absolute;
		left:145px;
		top:68px;
		color:rgb(243,182,116);
	}
	#play_button{
		position:absolute;
		bottom:5px;
		right:5px;
	}
	.game_flow_gallery{
		width:43.67%;
		position:absolute;
		bottom:-50px;
		left:28.165%;
		background-color:rgb(82,156,119);
		border:1px solid rgb(100,176,137);
		box-shadow:0 0 1px 2px rgb(0,69,20);
	}
	.first_player{
		width:16.66%;
		flow:left;
		background-color:rgb(204,204,204);
		border:1px solid black;
		padding:2px;
		margin-top:15px;
		margin-bottom:10px;
		margin-left:2.5%;
	}
	.second_player{
		width:23.33%;
		flow:left;
		background-color:rgb(204,204,204);
		border:1px solid black;
		padding:2px;
		margin-top:12px;
		margin-bottom:0;
	}
	.third_player{
		width:16.66%;
		flow:left;
		background-color:rgb(204,204,204);
		border:1px solid black;
		padding:2px;
		margin-top:15px;
		margin-bottom:10px;
		margin-right:2.5%;
	}
	.left_arrow{
		width:6.66%;
		flow:left;
		margin-top:30px;
		margin-bottom:25px;
		margin-left:3%;
	}
	.right_arrow{
		width:6.66%;
		flow:left;
		margin-top:30px;
		margin-bottom:25px;
		margin-right:1%;
	}
	.hidden{
		display:none;
	}
</style>
</head>
<body>
	<div class="app_container">
		<img class="banner" src="images/banner.png" alt="banner">
		<div class="shop">
			<div class="coins">
				<img class="coin_image" src="images/coin.png" alt="coin">
				<p class="coin_amount">250</p>
			</div>
			<a href="#####" class="add_coins"><img src="images/plus.png"></a>
		</div>
		<div class="interface">
		<a href="#" class="button" id="new_game_button">New Game</a>
		<div id="game_list">
			<div class="game">
				<p class="round_label">Round:</p>
				<p class="round">355</p>
				<p class="game_owner">Alex's Game</p>
				<p class="your_turn">Your Turn!</p>
				<p class="question_label">Question:</p>
				<p class="question">Who of your friends is the sexiest?</p>
				<p class="hidden">Answered:</p>
				<p class="hidden">Not answered yet</p>
				<a href="##" class="button" id="play_button">Play</a>
				<div class="game_flow_gallery">
					<a href="###"><img class="left_arrow" src="images/left_arrow.png"></a>
					<img class="first_player" src="images/Alex.jpg" alt="Alex">
					<img class="second_player" src="images/Pantelis.jpg" alt="Pantelis">
					<img class="third_player" src="images/QuestionMark.jpg" alt="qmark">
					<a href="###"><img class="right_arrow" src="images/right_arrow.png"></a>
				</div>
			</div>
			<div class="game">
				<p class="round_label">Round:</p>
				<p class="round">23</p>
				<p class="game_owner">Stefanos' Game</p>
				<p class="hidden">Your Turn!</p>
				<p class="question_label">Question:</p>
				<p class="question">Who of your friends would you punch?</p>
				<p class="answered_label">Answered:</p>
				<p class="answer">El Dimious</p>
				<a href="##" class="hidden" id="play_button">Play</a>
				<div class="game_flow_gallery">
					<a href="###"><img class="left_arrow" src="images/left_arrow.png"></a>
					<img class="first_player" src="images/Stefanos.jpg" alt="Alex">
					<img class="second_player" src="images/Pantelis.jpg" alt="Pantelis">
					<img class="third_player" src="images/Dimos.jpg" alt="qmark">
					<a href="###"><img class="right_arrow" src="images/right_arrow.png"></a>
				</div>
			</div>
			<div class="game">
				<p class="round_label">Round:</p>
				<p class="round">24</p>
				<p class="game_owner">Stefanos' Game</p>
				<p class="hidden">Your Turn!</p>
				<p class="question_label">Question:</p>
				<p class="question">Who of your friends is the best in football?</p>
				<p class="answered_label">Answered:</p>
				<p class="answer">Alex</p>
				<a href="##" class="hidden" id="play_button">Play</a>
				<div class="game_flow_gallery">
					<a href="###"><img class="left_arrow" src="images/left_arrow.png"></a>
					<img class="first_player" src="images/Pantelis.jpg" alt="Alex">
					<img class="second_player" src="images/Dimos.jpg" alt="Pantelis">
					<img class="third_player" src="images/Alex.jpg" alt="qmark">
					<a href="###"><img class="right_arrow" src="images/right_arrow.png"></a>
				</div>
			</div>
			<div class="game">
				<p class="round_label">Round:</p>
				<p class="round">102</p>
				<p class="game_owner">Aris' Game</p>
				<p class="your_turn">Your Turn!</p>
				<p class="question_label">Question:</p>
				<p class="question">Who of your friends is the tallest?</p>
				<p class="hidden">Answered:</p>
				<p class="hidden">Not answered yet</p>
				<a href="##" class="button" id="play_button">Play</a>
				<div class="game_flow_gallery">
					<a href="###"><img class="left_arrow" src="images/left_arrow.png"></a>
					<img class="first_player" src="images/Aris.jpg" alt="Alex">
					<img class="second_player" src="images/Pantelis.jpg" alt="Pantelis">
					<img class="third_player" src="images/QuestionMark.jpg" alt="qmark">
					<a href="###"><img class="right_arrow" src="images/right_arrow.png"></a>
				</div>
			</div>
		</div>
		</div>
	</div>
</body>
</html>
