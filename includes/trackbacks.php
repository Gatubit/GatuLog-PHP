<?php

$queryT  = "SELECT * ";
$queryT .= "FROM `%p_trackbacks` ";
$queryT .= "WHERE `parentid` = '%s' "; # Trackbacks de esta entrada o pagina
$queryT .= "AND `parenttype` = '%s' "; # Trackbacks de entradas o paginas
$queryT .= "ORDER BY `date` ASC, `id` ASC";
$sqlT = $DB->query($queryT, $row[0], PARENT_TYPE);

$c = -1;
$rowsT = array();
while ($rowT = mysqli_fetch_row($sqlT)) {
	$c++;
	$rowsT[$c] = $rowT;
	$rowsT[$c][3] = htmlspecialchars($rowsT[$c][3]);
	$rowsT[$c][4] = htmlspecialchars($rowsT[$c][4]);
	$rowsT[$c][5] = htmlspecialchars($rowsT[$c][5]);
	$rowsT[$c][6] = htmlspecialchars($rowsT[$c][6]);
}
$totalForT = count($rowsT) - 1;

/*
 * rowsT[]		-	Array con los trackbacks
 * 	[0]	id
 * 	[1]	parentid
 * 	[2]	parenttype
 * 	[3]	title
 * 	[4]	url
 * 	[5]	blog_name
 * 	[6]	excerpt
 * 	[7]	date
 * 	[8]	approved
 */
