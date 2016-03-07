<!DOCTYPE html>
<html>
<head>
	<title>xkcd password generator</title>
	<meta charset='utf-8'>
	<link rel='stylesheet' href='style.css'>

	<?php require('logic.php') ?>
</head>

<header class="main-header" role="banner">
	<img src="images/mybannerimage.jpg" alt="Banner Image"/>
</header>
<body>
	<form action='index.php' method='POST'>
		<div>
			<h1>xkcd password generator</h1>
			<p>
				<input type= 'submit' value='Generate Password'>
			</p>
			<p class='password'> <?php echo $password ?> </p>
		</div>
		<div>
			<h3>Enter the number of words</h3>
			<p>
				<input type='text' name='num_words' value=''>  (Max 9)
				<br>
			</p>
		</div>
		<div>
			<h3>Select a delimeter</h3>
			<p>	
				<input type="radio" name="delimeter" value="space" checked> Space<br>
				<input type="radio" name="delimeter" value="camelcase"> CamelCase<br>
				<input type="radio" name="delimeter" value="hyphens"> Hyphens<br>
			</P>
		</div>
		<div>
			<h3>Other Options</h3>
			<p>
				<input type='checkbox' autocomplete="off" name='add_number' value='add_number'> Add a number<br>
				<input type='checkbox' autocomplete="off" name='add_symbol' value='add_symbol'>Add a symbol<br>
			</p>
		</div>
	</form>
	
	<h2>The Comic that Inspired This Tool</h2>
	<p>
        	<img class = "comic" src='http://imgs.xkcd.com/comics/password_strength.png ' alt='xkcd 
password generator comic'>
	</p>

</body>
</html>
