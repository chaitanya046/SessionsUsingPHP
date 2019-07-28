<!doctype html>
<?php
if (session_status() !== PHP_SESSION_ACTIVE)
{
	session_start();
	$_SESSION['Name'] = "";
}

if ($_POST)
{
	$_SESSION['Name'] = $_POST['Name'];
	header('Location: mains.php');
}
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Assignment 5</title>

		<link href="css/main.css" rel="stylesheet">
		<script type="text/javascript" src="./js/main.js"></script>
	</head>
	<body>
		<div class="container">
			<header class="header">
				<h3>Web Design - Assignment 5</h3>
			</header>
			<main>
				<div class="formdivIndex">
					<form action="" id="orderForm" class="form" method="post" onsubmit="return form_validation_function();">
						<div class="imgcontainer">
							<img src="./img/avataricon.png" alt="Avatar" class="avatar">
						
						<br>
							<input type="text" class="text_field" id="txtName" name="Name" size="20" placeholder="Name" />
                            <br>
							<p><span id="error-name"></span></p>
                             <button id="btn">Sign in</button>
						</div>
                           
					
					</form>
				</div>
			</main>
            
			<footer class="footer">
				<p>Aparna Tomar, Chaitanya Uttarwar &copy; 2019</p>
                <div>All Icons used on this site are made by <a href="https://www.flaticon.com/authors/monkik" title="monkik">monkik</a> and are  licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
			</footer>
		</div>
	</body>
</html>
