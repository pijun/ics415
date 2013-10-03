<!DOCTYPE html>
<html>
<body>

<?php
	$mysql= new mysqli("localhost","testuser","dumb","a14");
	if($mysql->connect_errno){
		echo "Failed to connect to MySQL;(".$mysql->connect_errno.")".$mysql->connect_error;
	}

	if(!$mysql->query("INSERT INTO comments(id) VALUES(1)")){
		echo "Table insertion failed";
	}
	
?>

<br><h3>Enter comments here</h3>
<form action="A13.php" method="post">
Comment: <input type="text" name="comment"><br>
<input type="submit">
</form>

<?php
?>
</body>
</html>
