<?php
/*
 * Edw exoume tin exis duskolia, pws tha xeroume se pio game anaferete to call?
 * An to fb sou epitrepei na stelneis kai ena id, eimaste ok.. an oxi, tote mallon tha prepei
 * na valoume ena message center, opou tha tou dixnei ola ta game kai tha tou vgazei se pio einai i seira tou.
 * 
 * Ta Request tou facebook exoun ena monadiko id. Ara boroume na to pasaroume sto question(?) gia na vriskoume
 * se pia anaferete to request.
 * 
 * AUTO POU KANW EDW: uparxei kai mia akoma lusi. Tou dromologoume kateuthian stin lista me ta paixnidia. Auto apaitei mallon na 
 * prosthetoume kai tous paiktes oi opoioi den paizoune akoma, stin lista games_users. Me to pou tha kanoune subscribe
 * tha benoun kai ston pianaka table. Etsi den xreiazete na xeroume to request id.
 * Episeis kalo einai na ftiaxoume mia sxesi questions_users. Mas aplopoiei polu tin diadiksia na vriskoume tin teleutai erwtisi tou
 * Isos prepei na kratame kai to onoma tou paikti? I na to kanoume meso fb kathe fora kai na psaxnoume to id meso Graph?
 * 
 * TODO: H logiki tou programmatos prepei na trexei se php ara provlimatizome kata poso tha prepei na dosoume dikeomata sto javascript
 */
session_start();
include ($_SESSION['baseURI'] .'/core/connectors/database.php');

$userId = 1; //debuggin value needs to be taken from the session
$requestId= null;
$gms = pg_query($dbconn,"SELECT (game_id) FROM games_users WHERE user_id='".$userId."'"); //Fetching games he belongs too
$i=0;
//Running through all the results 
while($game = pg_fetch_assoc($gms)){
	$gm = pg_fetch_assoc(pg_query($dbconn,"SELECT * FROM games WHERE id='".$game['game_id']."'")); //Picking Up the Game's info.
	$latestQs = pg_fetch_assoc(pg_query($dbconn, "SELECT * FROM questions WHERE id='".$gm['last_question_id']."'")); //Picking up the latest question for print
	//Pack it beatifully in an array to pass it over to our good friend json
	//print_r($gm);
	//print_r($latestQs);
	$games[$i]['name'] = 'A Game'; //Needs to be changed to take the name of the player and append a "\'s Game" 
	//$gm[$i]['round'] = $gm['round'];
	$games[$i]['question'] = $latestQs['text'];
	$games[$i]['player1'] = $latestQs['player1_id'];
	$games[$i]['player2'] = $latestQs['player2_id'];
	$games[$i]['player3'] = $latestQs['player3_id'];  
	$i++;
}
//print_r($games);
echo '{"games":'.json_encode($games).'}';
?>