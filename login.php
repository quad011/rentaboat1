<?php 
    require "config.php";

	 include 'head.php'; 
	 include 'header.php'; 
	 include 'navbar.php'; 
	 include 'flexslider.php'; 
 ?>

<h3>Login</h3>
    
    <form method="POST" class="login" action="">
        <input type="text" placeholder="username" data-validate="required" name="username"><br />
        <input type="password" placeholder="password" data-validate="required" name="password"><br />
        <input type="submit" value="Login" class="submit-btn" name="btn_login">
    </form>

<?php  

    if(isset($_POST['btn_login'])){

       $db = dbConn::getConnection();

        $username = $_POST['username'];
        $password = md5($_POST['password']);
        //$password = $_POST['password'];
        $q = $db->connection->prepare ("SELECT * FROM users WHERE username=:username AND password=:password LIMIT 1");
        $q->bindParam (':password', $password);
        $q->bindParam (':username', $username);
        $q->execute();
        $res = $q->fetch(PDO::FETCH_ASSOC);
		if(!empty ($res)){
			$_SESSION['username'] = $res['username'];
            header("Location:index.php");
		}
    }
        
?>


<?php include 'footer.php'; ?>