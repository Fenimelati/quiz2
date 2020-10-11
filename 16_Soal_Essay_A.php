<?php
	$operator = ["*", "+", "%", ":", "-"];

	function hitung($str){
		$panjang = strlen($pecah_angka[0]);
		$opr = substr($str, $panjang,1);

		$pecah_angka = explode($opr,$str);
		print_r($pecah_angka)
	}

	$tulis = "2+3";
	hitung($tulis);
?>