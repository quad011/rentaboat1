<?php 
    class BoatsId {

     static function getLastId() {
    	     $db = dbConn::getConnection();
             $query=$db->connection->prepare("select * from boats order by boats_id desc limit 1");
             $query->execute();
             $res=$query->fetch(PDO::FETCH_ASSOC);
             $lastid=$res['boats_id'];
    	     return $lastid;
        }
    }   