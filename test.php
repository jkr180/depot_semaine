<?php
/*
	Formation de la table de multiplication
*/
$m = 12;
echo '<p>Table de multiplication modulo '.$m.'</p>';
$tm = array();
for ($i=0; $i<$m; $i++) {
	for ($j=0; $j<$m; $j++) {
		$tm[$i][$j]=($i*$j)%$m;
	}
}
/*
	Affichage de la table
*/
echo '<table><tbody>';
for ($i=0; $i<$m; $i++) {
	echo '<tr>';
	for ($j=0; $j<$m; $j++) {
	    echo '<td style="text-align:center">'
                 .$tm[$i][$j]
                 .'</td>';
	}
	echo '</tr>';
}
echo '</tbody></table>';
?>