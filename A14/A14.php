<!DOCTYPE html>
<html>
<body>

<?php
	//this connects to the database a14 at local host as testuser.
	$mysql= new mysqli("localhost","testuser","dumb","a14");
	if($mysql->connect_errno){
		echo "Failed to connect to MySQL;(".$mysql->connect_errno.")".$mysql->connect_error;
	}
	
?>

<br><h3>Enter comments here</h3>
<form action="A14.php" method="POST">
Comment: <input type="text" name="comment"><br>
<input type="submit">
</form>

<?php

	//retrieves data from user and stores it in a variable
	$string= (isset($_POST['comment']) ? $_POST['comment'] : null);
	
	//checks if the comments table exist, if not creates a comments table	
	$val="SELECT id FROM comments";
	$result = $mysql->query($val);
	if(!empty($result)){
   		//form sql query to insert comment into database
   		if(!$mysql->query("INSERT INTO comments(coment) VALUES('$string')")){
			echo "Table insertion failed";
		}
	}else{
    	//I can't find it...CREATE IT
    	echo"cant fine table comments, creating table comments";
    	$mysql->query("CREATE TABLE comments(id INT,coment VARCHAR(50))");
	}

	
	//function that prints comments from database
	echo"<ul>";
	$stuff = $mysql->query("SELECT * FROM comments");
	while($row = mysqli_fetch_array($stuff)){
		echo "<li>";
		echo $row[1];
		echo "</li>";
	}
	echo"</ul>";
?>
</body>
</html>