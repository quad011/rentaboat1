<?php
	require "config.php";
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

<div class="container">
	<div class="col-sm-12 col-xs-12">
		<div id="gallery">
			<?php
					$db = dbConn::getConnection();
					    $q = $db->connection->prepare("select * from boats where product_status=1 ORDER BY rand() LIMIT 5");
						$q->execute();
						$q->setFetchMode(PDO::FETCH_OBJ);
						$rows=$q->fetchAll();
							foreach($rows as $row) {
								 echo "
								 					 
									 	<div class='img'>
									 		<h2>{$row->name}</h2>
											 <img class='img-responsive' src='./image/{$row->boats_id}.jpg' alt='' style='width:250px; height:200px;'>
											 <p>{$row->description}</p>
											 <p>{$row->price}&euro; per day</p>
											 <p>Phone:{$row->phone}</p>

								</div>";
				    
					}
			?>
		</div>	
	</div>
</div>



			