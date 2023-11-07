<?php

$negara = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Daftar Negara Asean awal</title>
</head>
<body>
	<?php
		echo "<b> Daftar Negara ASEAN awal </b>";
		for ($i = 0; $i < count($negara); $i++){


	echo "<li>$negara[$i]</li>";
		}
	?>
	<?php
			echo "<b> Daftar Negara ASEAN Baru </b>";
			$baris = array_push($negara, "Laos", "Filiphina", "Myanmar");
			foreach ($negara as $baru){
				echo "<li>$baru</li>";
			}
	?>
</body>
</html>