<!DOCTYPE html>
<html>
<head>
<?php
	if (isset($_COOKIE["user"]))
  		echo "Welcome " . $_COOKIE["user"] . "!<br>";
	else{
	 		echo "Please enter a name.<br>";
 			//creating form where user enters name
 			echo "<br><h3>Enter name here</h3>" .
 					"<form action='A15.php' method='POST'>" .
 					"name: <input type='text' name='name'><br>" .
 					"<input type='submit'>" .
 					"</form>";
			$user=($_POST['name']);
			setcookie("user", $user, time()+3600);	
	}

?>
</head>
<body>

<?php
	//this connects to the database a14 at local host as testuser.
	$mysql= new mysqli("localhost","testuser","dumb","a14");
	if($mysql->connect_errno){
		echo "Failed to connect to MySQL;(".$mysql->connect_errno.")".$mysql->connect_error;
	}
	
?>

<br><h3>Enter comments here</h3>
<form action="A15.php" method="POST">
Comment: <input type="text" name="comment"><br>
<input type="submit">
</form>

<?php
	//retrieves data from user and stores it in a variable
	$string= (isset($_POST['comment']) ? $_POST['comment'] : null);
	$user= $_COOKIE["user"];
	
	//checks if the comments table exist, if not creates a comments table	
	$val="SELECT id FROM comments";
	$result = $mysql->query($val);
	if(!empty($result)){
   		//form sql query to insert comment into database
   		if(!$mysql->query("INSERT INTO comments(name,comment) VALUES('$user','$string')")){
			echo "Table insertion failed";
			if(isset($_COOKIE["user]"])){
				echo"<h1>yay</h1>";
				setcookie("user","",time-3600);
			}
		}
	}else{
    	//I can't find it...CREATE IT
    	echo"cant fine table comments, creating table comments";
    	$mysql->query("CREATE TABLE comments(id INT,coment VARCHAR(50))");
	}

	
	//function that prints comments from database
	echo"<ul>";
	$stuff = $mysql->query("SELECT * FROM comments WHERE name = '$user'");
	while($row = mysqli_fetch_array($stuff)){
		echo "<li>";
		echo $row[2];
		echo "</li>";
	}
	echo"</ul>";
?>
</body>
</html>