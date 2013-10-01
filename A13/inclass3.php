<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
<form name="exampleform" action="inclass3.php" method="post">
<p>Username: <input type="text" name="username"></p>
<p>Password: <input type="password" name="pwd"></p>
<input type="radio" name="sex" value="male">Male<br />
<input type="radio" name="sex" value="female">Female<br />
<input type="submit"><input type="button" value="jquery" onclick="stuff()">
</form>
 <?php
	echo $_POST["username"];
	echo $_POST["pwd"];
	echo $_POST["sex"];
 ?>
<script>src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 

<script>
function stuff(){

}

</script>
 </body>
</html>