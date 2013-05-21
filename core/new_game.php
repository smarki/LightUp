/*
 * Ti tha kanei auto to arxeio
 * 		- Pernei tin erwtisi kai to id tou paralipti
 *		- Ftiaxnei new game ston pinaka games, vazei erwtisi ston pinaka questions, susxetizei ton paikti me to game ston pinaka users_games
 * 		- Stelnei FB message ston neo paikti
 * Ara 3 insertion queries,  
 */

/* Otan kaneis eisagwges sql, borei kapoia na apotuxei. An apotuxei opoiadipote apo tis 3s tha prepei na petame error kai oxi na sunexizoume san 
*na min egine tpt.. I methodos legete sql transactions. Praktika me aples entoles enimerwneis tin vasi dedomenwn na perimenei pote tha tis peis
*na xekinisei na eisagei. Etsi me enan aplo elegxo boreis na deis an ola pigan kala, an oxi apla kaneis rollback.
*Transactions can be accomplished using the following syntax: 
* http://www.php.net/manual/en/function.pg-query.php
*/
<?php
if(!defined('RemoteAccess')){die('Direct access not premitted');}
include '/core/connectors/database.php';

pg_query($dbconn, "BEGIN WORK");

$gm = pg_query($dbconn,"INSERT INTO games");
$game = pg_fetch_assoc($gm);
$qs = pg_query($dbconn,"INSERT INTO question (question, user_id, second_player, game_id) VALUES ('".$question."','".$userId."','".$receiver."','".$game['id']."')");
$ug = pg_query($dbconn,"INSERT INTO users_games (game_id, user_id) VALUES ('".$game['id']."','".$userId."')");

if(!$gm | !$gs | !$ug ){
	pg_query($dbconn, "ROLLBACK");
}else{
	pg_query($dbconn, "COMMIT");
}
?>