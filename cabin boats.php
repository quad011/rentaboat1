<?php 
	require "config.php";
	include 'head.php'; 
	include 'header.php';
	include 'navbar.php';
	include 'flexslider.php';
?>

	<div class="list">

			<?php
					$db = dbConn::getConnection();
					    $q = $db->connection->prepare("select * from category where category_status=1");
				        $q->execute();
				        $q->setFetchMode(PDO::FETCH_OBJ);
				        $rows=$q->fetchAll();
				        foreach ($rows as $row) {
				        	echo "<ul><li><a href='{$row->category_name}.php'>{$row->category_name}</a></li></ul>";
				        }
			?>	

		</div>



		<div id="gallery">
		
			<?php
				$db = dbConn::getConnection();
				    $q = $db->connection->prepare("select * from boats where category_id=2");
					$q->execute();
					$q->setFetchMode(PDO::FETCH_OBJ);
					$rows=$q->fetchAll();
						foreach($rows as $row) {
							 echo "
							 <div class='img'>
							 
							 <h2>{$row->name}</h2>
							 <img src='./image/{$row->boats_id}.jpg' alt='' style='width:270px; height:200px;'>
							 <p>{$row->description}</p>
							 <p>{$row->price}&euro; per day</p>
							 <p>Phone:{$row->phone}</p>
							 
							 </div>";
			    
						}
			?>

		</div>




<?php include 'footer.php'; ?>