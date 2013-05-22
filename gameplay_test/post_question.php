<?php
	$question=pg_escape_literal($_POST("my_question"));
	$receiver=pg_escape_literal($_POST("receiver"));
	
?>