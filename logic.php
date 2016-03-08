<?php
/*
Create an array of words dependent on the password length
The words are pulled up from the array using a random method to form a password
*/

$word_list = array("about", "below", "came", "day", "end", "find", "give", "have", "into", "just", 
"know", "large", "made", "never", "odd", "parcel", "quote", "rate", "think", "umpire", "vex", "wind", 
"xray", "you", "zoom");

$password = '';
$i = 0;
$random_char = array('!', '@', '#', '$', '%', '&', '*', '?');
$num_words = 4;
$invalid = FALSE;

if (isset($_GET["num_words"])){
	if($_GET["num_words"] == "" || $_GET["num_words"] <1 || $_GET["num_words"] > 9){
		$invalid = TRUE;
		$num_words = 4;
	} else {
	$num_words = $_GET["num_words"];
	}
}

$rand_keys = array_rand($word_list, $num_words);

if (isset($_GET['delimeter'])){
	if ($_GET["delimeter"] == "space"){
		while ($i < $num_words){
			$password .= $word_list[$rand_keys[$i]]. " ";
			$i++;
		}
	}
	else if ($_GET["delimeter"] == "camelcase"){
		while ($i < $num_words){
			$password .= ucfirst($word_list[$rand_keys[$i]]);
			$i++;
		}
	}
	else if ($_GET["delimeter"] == "hyphens"){
		$password = $word_list[$rand_keys[0]];
		$i++;
		while ($i < $num_words){
			$password .= "-". $word_list[$rand_keys[$i]];
			$i++;
		}
	}
}
if (array_key_exists("add_number", $_GET )){
	$number = rand( 0 , 9 );
	$password .= $number;
}
if (array_key_exists("add_symbol", $_GET )){
	$index = rand( 0 , 7 );
	$password .= $random_char[$index];
}
?>
