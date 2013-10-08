<!DOCTYPE html>
<html>
<body>

<?php
	$mysql= new mysqli("localhost","testuser","dumb","a15");
	if($mysql->connect_errno){
		echo "Failed to connect to MySQL;(".$mysql->connect_errno.")".$mysql->connect_error;
	}	
?>

<?php
	function createT(){
        global $mysql;
		$mysql->query("CREATE TABLE clients(client_id INT, name varchar(50))");
		$mysql->query("CREATE TABLE orders(id INT, order_number INT,description varchar(50), id INT)");
	}

	function createO(){
        global $mysql;
        $mysql->query("");
	}

	function display(){
        global $mysql;
	}

	function displayAll(){
        global $mysql;
	}
?>
<br><h3>Enter comments here</h3>
<form action="A13.php" method="post">
Comment: <input type="text" name="comment"><br>
<input type="submit">
<input type="submit" name="table" value="create table">
<input type="submit" name="orders" value="create orders">
    <input type="submit" name="display" value="display">
    <input type="submit" name="displayall" value="displayall">
</form>

<?php
    if(isset($_POST['table'])){
        createT();
    }
    if(isset($_POST['orders'])){
        createO();
    }
    if(isset($_POST['display'])){
        display();
    }
    if(isset($_POST['displayall'])){
        displayAll();
    }
?>
</body>
</html>