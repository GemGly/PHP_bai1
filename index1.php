<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style type="text/css">
	.login{
		 height:180px; width:230px;
          margin:0;
          padding:10px;
          border:1px #CCC solid;
	}
	.login input{
		padding: 5px;
		margin: 5px;
	}
</style>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    	$username = $_POST["username"];
    	$password = $_POST["password"];
    	if ($username == "admin" && $password == "admin") {
    		echo "<h2> Welcome $username</h2>";
    	}
    	else {
    		echo "Login error";
    	     }
    	}
    
    ?>
	<form action="" method="post">
		<div class="login">
			<h2>LOGIN</h2>
			<input type="text" name="username" placeholder="Tên truy cập">
			<input type="password" name="password" placeholder="Mật khẩu">
			<input type="submit" value="Sign in">
		</div>

	</form>
</body>
</html>