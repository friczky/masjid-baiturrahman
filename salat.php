<?php

$url = "https://api.pray.zone/v2/times/today.json?city=sleman";
$data = file_get_contents($url);
# parsing variabel $data ke dalam array
$jadwal = json_decode($data);

if ($jadwal->status === "OK") {
    # tampilkan menggunakan perulangan
    foreach ($jadwal->results->datetime as $s) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=
	, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<p>Imsak : <?= $s->times->Imsak?></p>
	<p>Subuh : <?= $s->times->Fajr?></p>
	<p>Dzuhur : <?= $s->times->Dhuhr?></p>
	<p>Ashar : <?= $s->times->Asr?></p>
	<p>Magrib : <?= $s->times->Maghrib?></p>
	<p>Isya : <?= $s->times->Isha?></p>
	<?php
	date_default_timezone_set("Asia/Jakarta");
	$date = date("H");
	echo $date ?>
	<p>Sekarang : 
		<?php
	$subuh = $s->times->Fajr ;
	$dzuhur	= $s->times->Dhuhr ;
	$asar	= $s->times->Asr;
	$magrib	= $s->times->Maghrib ;
	$isya	= $s->times->Isha ;
	date_default_timezone_set("Asia/Jakarta");
	$jam = date("H");
	if ($jam < 05) {
		echo "$subuh (SUBUH)" ;
	} elseif ($jam < 13 ) {
		echo "$dzuhur (DZUHUR)" ;
	} elseif ($jam < 16 ) {
		echo "$asar (ASAR)" ;
	} elseif ($jam < 18 ) {
		echo "$magrib (MAGRIB)" ;
	} else {
		echo "$isya (ISYA)" ;
	}
	?>
	</p>
	
</body>
</html>
<?php
}
}

?>
