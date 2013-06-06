<?php
session_start();
define('RemoteAccess', 1);
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__));
$_SESSION['baseURI'] = __DIR__;
//echo $_SESSION['baseURI'];
include ($_SESSION['baseURI'] . '/core/connectors/database.php');
?>

<!DOCTYPE html>

<html>
	<head>
		<title>The Lighter ver 0.001</title>
		<script language="javascript" src="js/jquery.js"></script>
		<script language="javascript" src="core/ui.js"></script>
		<script language="javascript" src="core/core.js"></script>
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
				color: #3333cc;width=300;
				text-align=left
			}
			a {
				color: #000000
			}
			.wizardsInputs {
				margin-top: 0.2em;
			}
			label {
				width: 100px;
			}
			textarea {
				overflow: hidden;
				resize: none;
			}
			.popup {
				position: absolute;
				margin-left: auto;
				margin-right: auto;
				top: 125px;
				left: 33%;
				width: 500px;
				min-height: 150px;
				border: 10px solid rgba(82, 82, 82, .7);
				-webkit-border-radius: 8px;
				background-color: #e7ebf2;
			}

			#newGameWizzard {

			}
			.button {
				border: 1px solid #999;
				border-bottom-color: #666;
				padding: 6px;
				color: #FFF;
				font-weight: bold;
				-moz-box-shadow: 0 1 0px rgba(0, 0, 0, .1);
				-webkit-box-shadow: 0 1 0px rgba(0, 0, 0, .1);
				box-shadow: 0 1px 0 rgba(0, 0, 0, .1);
			}

			#newGameWizzardLogo {
				padding-left: 1em;
				padding-top: 5px;
			}
			#newGameButton {
				position: relative;
				top: 20px;
				background: #6d84b4;
				width: 80px;
			}
			.popupHeader {
				background-color: #6d84b4;
				height: 25px;
				font-size: 14px;
				color: #FFF;
				font-weight: bold;
			}
			#createGameButton {
				background: #6d84b4;
				width: 80px;
			}
			#closePopupButton {
				background: #F5F5F5;
				width: 100px;
				height: 60px;
				color: #333;
			}
			#popupButtonsWrapper {
				padding: 1em;
			}
			#formArea {
				padding: 1em;
				background: #FFF;
			}
			#gameWrapper {
				width: 735px;
				margin-left: auto;
				margin-right: auto;
			}
			#mainFrameWrapper {
				min-height: 200px;
			}
			.errorSuccess {
				background: rgba(154,205,50,.5);
			}
			.errorFail {
				background: rgba(200,54,54,.5);
			}
			#errorMessage {
				text-align: center;
			}
			#header{
				height:150px;
			}
			.activeGameWrapper{
				display:none;
				height: 100px;
				background:url(core/template/img/question_back.gif)	;
				background-repeat: no-repeat;
				margin-bottom:10px;
			}
			#activeGameInfoWrapper{
				width: 715px;
				margin-left: auto;
				margin-right: auto;
				height:90px;
				padding-top: 2px;
			}
		</style>
		<script></script>
		<meta charset="utf-8">
	</head>

	<body>
		<div id="stage">
			<div id="gameWrapper">
				<div id="header">
					<div id="logo"><img src="lighter.jpg" alt="Lighter logo" border="0" align="left" valign="bottom" height="70" width="300" />
					</div>
					<a id="newGameButton" href="#" class="button" >Start a new Game</a>
				</div>
				<div id="mainFrameWrapper"></div>
			</div>
		</div>

	</body>
</html>