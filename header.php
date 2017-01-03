<?php	
	session_start();
?>		
<header>
<div class-"container">
    <div class="row">
        <a class="logo" href="index.php"><img src="img/logo.png" alt="logo"></a>
            <div id="register">	
            	<?php
                     if(isset($_SESSION['username'])){
                ?>
                <div class="welcome">
                    <?php        
                        echo "Welcome<br>", $_SESSION['username'];
                    ?>    
                </div>
                    <?php     
                        echo "<br/><a href='admin.php'>Admin</a><br>";
                        echo "<a href='logout.php'>logout</a>";
                    } else {
                        echo '<a class="log-in" href="login.php">Login</a>';
                        echo '<a class="sign-up" href="register.php">Sign Up</a>';
                    }
            		
            	?>	
            </div>    
    </div>
</div>				
</header>