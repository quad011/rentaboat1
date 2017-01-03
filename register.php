<?php 
    require "config.php";

	include 'head.php';
    include 'header.php';
    include 'navbar.php';
    include 'flexslider.php'; 
?>

<h3>Sign up</h3>
<form class="register" method="POST">
    <input type="text" placeholder="username" name="username"><br />
    <input type="password" data-validate="require,max(32)" placeholder="password" name="password"><br />
    <input data-validate="required,email" placeholder="Email" name="email"><br />
    <input type="submit" value="Sign Up" class="submit-btn">
</form>

<?php
   

    if(isset($_POST['username'], $_POST['password'])){
                 
        $db=dbConn::getConnection();
        
        $password = md5($_POST['password']);
        
        $q = $db->connection->prepare("INSERT INTO users (username, password,email) VALUES (:username, :password, :email)");

        $q->bindParam(':username', $_POST['username']);
        $q->bindParam(':password', $password);
        $q->bindParam(':email', $_POST['email']);

        if($q->execute()){
            header("Location:index.php");
            echo "<p>successful registration</p>";
        } else{
            echo '<p>Sorry, there has been a problem inserting your details. Please contact admin.</p>';
        }
    }
?>

<?php include 'footer.php'; ?>