<?php
//den virker
//trigger_error('øv-fejl' , E_USER_ERROR);

function hello() {
	echo "Hello function!";
}

hello();
echo "<br>";
hello();
echo "<br>";
hello();
echo "<br>";

//min anden funktion
//jeg deklarer funktionen
function hello_navn($navn) {
	echo "Hello $navn!<br>";
}
//jeg kalder funktionen 3 gange
echo "<br>";
hello_navn('Pernille');

hello_navn('Lonnie');

hello_navn('Michella');
echo "<br>";

//"Charlie bit me" øvelsen
/* pseudo kode */

// udskriv (echo) charlie bit me
// udskriv (echo) charlie didn't bite me

//vælg tilfældigt tal mellem 0 & 1
// 0 = Charlie bider
// 1 = charlie bider ikke


$randombite = rand(1, 2);
if ($randombite==1) {echo "Charlie bit me!";}
else {echo "Charlie did not bite me!";} 

//lodtrækning
echo "<br>";

function lodtræk() {
	$lod = rand(1, 5);
if ($lod==5) {echo "Du har vundet!";}
else {echo "Du har tabt, prøv igen!";}
}

lodtræk();
echo "<br>";echo "<br>";

function lotto() {
	$rigtig = 0;
	$vinder = array (3, 8, 19, 15, 33, 26, 11);
	$udtrukket = array ();
	//
for ($x = 0; $x <=6; $x++) {
	$tal = rand (1 , 35);
	while (in_array($tal , $udtrukket)) {
	$tal = rand (1 , 35);
	}
	array_push($udtrukket, $tal);
	if (in_array($tal , $vinder)) {
		echo $tal . " er et vinder tal!<br>";
		$rigtig++;
	
	}
	else {
		echo $tal . " er ikke et vinder tal<br>";
	}
}
echo "<br>";
echo "Antal af rigtige tal: " . $rigtig;
}
echo "<br>";
echo "<br>";
lotto();

?>