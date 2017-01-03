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
		    $q = $db->connection->prepare("select * from boats where product_status=1");
			$q->execute();
			$q->setFetchMode(PDO::FETCH_OBJ);
			$rows=$q->fetchAll();
				foreach($rows as $row) {
					 echo "
					 <div class='img'>
					 
					 <h2>{$row->name}</h2>
					 <img src='./image/{$row->boats_id}.jpg' alt='' style='width:250px; height:200px;'>
					 <p>{$row->description}</p>
					 <p>{$row->price}&euro; per day</p>
					 <p>Phone:{$row->phone}</p>
					 
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