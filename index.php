<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
	<title>xkcd password generator</title>
	<meta charset='utf-8'>
	<link rel='stylesheet' href='style.css'>
</head>

<header class="main-header" role="banner">
	<img src="images/mybannerimage.jpg" alt="Banner Image"/>
</header>
<body>
	<h1>xkcd password generator</h1>
	<p><input type="button" id="generate_password" name="generate_password" value="Generate Password" />
	
	<p class='password'> onto-job-shade-hunt </p>
	<p>
	Select the number of words to make up the password<br>
		<select>
    		<option value="One">One</option>
    		<option value="Two">Two</option>
    		<option value="Three">Three</option>
			<option value="Four" selected='selected'>Four</option>
			<option value="Five">Five</option>
    		<option value="Six">Six</option>
    		<option value="Seven">Seven</option>
			<option value="Eight">Eight</option>
    		<option value="Nine">Nine</option>
    	</select>
	</p> 
	<form>
	<p>
		<input type="checkbox" name="vehicle1" value="Bike"> Include Special Character<br>
		<input type="checkbox" name="vehicle2" value="Car"> Include a Number
	</p>	
	</form> 
	<h2>The Comic that Inspired This Tool</h2>
	<p>
        <img class = "comic" src='http://imgs.xkcd.com/comics/password_strength.png ' alt='xkcd 
password generator comic'>
	</p>

</body>
</html>
