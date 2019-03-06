<?php 
	$data = $_GET['datavalue'];

	$a = array('Pune', 'Mumai');
	$b = array('Patana', 'Kishanganj');
	$c = array('Agra', 'Mathura');
	$d = array('Bilaspur', 'Raipur');
	$e = array('Indore', 'Bhopal', 'Gawalior');

	if($data=="Maharastra"){
		foreach ($a as $aone) {
			echo "<option> $aone </option>";
		}
	}

	if($data=="Bihar"){
		foreach ($b as $btwo) {
			echo "<option> $btwo </option>";
		}
	}
	if($data=="UP"){
		foreach ($c as $cthree) {
			echo "<option> $cthree </option>";
		}
	}
	if($data=="Chhattisgarh"){
		foreach ($d as $dfour) {
			echo "<option> $dfour </option>";
		}
	}
	if($data=="MP"){
		foreach ($e as $efive) {
			echo "<option> $efive </option>";
		}
	}
?>