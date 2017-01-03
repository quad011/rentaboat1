<?php

	require "config.php";

	$db = dbConn::getConnection();


	 if(isset($_POST['btn_login'])){

       		$db = dbConn::getConnection();

        	$username = $_POST['username'];
       	 	//$password = md5($_POST['password']);
		$password = $_POST['password'];
        	
		$q = $db->connection->prepare ("SELECT * FROM users WHERE username=:username AND password=:password LIMIT 1");
        	$q->bindParam (':password', $password);
        	$q->bindParam (':username', $username);
        	$q->execute();
        	$red = array();
		while($res = $q->fetch(PDO::FETCH_ASSOC)){
			$red[] = $res;
		}
        

        	if($red){
           	 	header("Location:4.5.php");
        	}else{
            		header("Location:login.php");
        	}     
    	}



//<a href="logout.php">Log Out </a>

?>
<form method="POST" class="login" action="">
        <input type="text" placeholder="username" name="username"><br />
        <input type="password" placeholder="password" name="password"><br />
        <input type="submit" value="Login" class="submit-btn" name="btn_login">
    </form>


