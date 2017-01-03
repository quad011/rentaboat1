<?php
	
	require "config.php";

	include 'head.php';
	include 'header.php';
	include 'navbar.php';
	include 'flexslider.php';
?>
	<div id="allusers">
<?php
		$db = dbConn::getConnection();
		    $q = $db->connection->prepare("select * from users");
			$q->execute();
			$q->setFetchMode(PDO::FETCH_OBJ);
			$rows=$q->fetchAll();
				foreach($rows as $row) {
					 echo "
					 <div class='img'>
					 
					 <h2>{$row->id}</h2>
					 <p>{$row->username}</p>
					 <p>Email:{$row->email}</p>
					 
					 </div>";
	    
		}
?>
	</div>	

<div class="nav-back">
	<a href="admin.php">Back</a>
</div>

<?php
	include 'footer.php';

?>	