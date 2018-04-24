<html>
<body>
<head>
<title>
run
</title>
</head>

<form method="post">

<input type="submit" value="GO" name="GO">
</form>
</body>
</html>

<?php
	
	if(isset($_POST['GO']))
	{
		shell_exec("python /var/www/html/lab/mkdir.py");
		echo"success";
	}


?>
