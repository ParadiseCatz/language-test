<?php
$freq = array_fill(1, 2100, 0);
$rank = array_fill(1, 2100, 0);
$sum = 0;
$rank_now = 1;
$_fp = fopen("php://stdin", "r");
fscanf($_fp, "%d\n", $count);
$numbers = explode(" ", trim(fgets($_fp)));
foreach ($numbers as &$number)
{
    $number = intval($number);
    $freq[$number]++;
}
for ($i=2000; $i > 0; $i--) { 
	$rank[$i] = $rank_now;
	$rank_now += $freq[$i];
}
for ($i=0; $i < $count; $i++) { 
	if ($i != 0) {
		echo " ";
	}
	echo $rank[$numbers[$i]];
}
echo "\n";
?>