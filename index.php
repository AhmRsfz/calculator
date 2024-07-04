<?php 

function percabangan(){
	while (true) {
		$x = readline("apakah lanjut? [y/n]");

		if ($x == 'y') {
			break;
		}
		else if ($x == 'n') {
			exit();
		}
	}
}

function aritmatika($method, $value1, $value2){
	if ($method=="ditambah") {
		$value = $value1 + $value2;
		echo "$value1 ditambah $value2 adalah $value\n";
	}
	else if ($method=="dikurang") {
		$value = $value1 - $value2;
		echo "$value1 dikurang $value2 adalah $value\n";

	}
	else if ($method=="dikali") {
		$value = $value1 * $value2;
		echo "$value1 dikali $value2 adalah $value\n";
	}
	else if ($method=="dibagi") {
		$value = $value1 / $value2;
		echo "$value1 dibagi $value2 adalah $value\n";
	}
	else {
		throw new Exception("Tidak Valid!\n");
	}
	throw new Exception("Tidak Valid!\n");

}

function main(){
	while (true) {
		
		echo "====================";
		echo "\n\nKALKULATOR MATEMATIKA";
		echo "\n (+)-ditambah\n (-)-dikurang\n (x)-dikali\n (/)-dibagi\n";

		$value1 = readline("first: ");
		$inp = readline("masukan metode: ");
		$value2 = readline("second: ");

		try {
			aritmatika($inp, $value1, $value2);
		}
		catch (Exception $e) {
			echo $e->getMessage();
		}

		percabangan();
	}
}

main();
?>