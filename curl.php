<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">

		<?php
	shell_exec("testt.sh");
	header('Location: http://localhost/curl.php?success=true');
	?>
	</div>
		
</body>
</html>