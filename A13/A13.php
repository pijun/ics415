<!DOCTYPE html>
<html>
<body>

<?php
$file=fopen("file.txt","r") or exit("Unable to open file!");
while(!feof($file)){
	echo fgets($file). "<br>";
}
fclose($file);
?>

<br><h3>Enter comments here</h3>
<form action="A13.php" method="post">
Comment: <input type="text" name="comment"><br>
<input type="submit">
</form>

<?php
	if(@$_POST["comment"]==NULL){
		echo "<h2>no comments were entered</h2>";
	}else{
		echo "<h2>comments were ented</h2>";
		echo $_POST["comment"]+ "was appended to file.txt";
		$string= $_POST["comment"];
		$file=fopen("file.txt","a+");
		fwrite($file, $string."\n");
		fclose($file);
	}
?>
</body>
</html>