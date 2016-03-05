<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
	<title>xkcd passoword generator</title>
	<meta charset='utf-8'>

	<link rel="stylesheet" media="screen" href="/214/214.css?v=8may2013">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="http://www.csszengarden.com/zengarden.xml">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Dave Shea">
	<meta name="description" content="A demonstration of what can be accomplished visually through CSS-based design.">
	<meta name="robots" content="all">


	<!--[if lt IE 9]>
	<script src="script/html5shiv.js"></script>
	<![endif]-->
</head>

<body>
	Select the number of words (four by default)<br>
	<select>
    <option value="four"> </option>
    <option value="One">One</option>
    <option value="Two">Two</option>
    <option value="Three">Three</option>
	<option value="Four">Four</option>
    <option value="Five">Five</option>
    <option value="Six">Six</option>
    <option value="Seven">Seven</option>
	<option value="Eight">Eight</option>
    <option value="Nine">Nine</option>
    </select> 
	<form>
	<input type="checkbox" name="vehicle1" value="Bike"> Include Special Character<br>
	<input type="checkbox" name="vehicle2" value="Car"> Include a Number
	</form> 

	<p>
        <img class = "comic" src='http://imgs.xkcd.com/comics/password_strength.png ' alt='xkcd 
password generator comic'>
	</p>

</body>
</html>
