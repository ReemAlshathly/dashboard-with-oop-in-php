<?php
 require_once('db.php');
 $id = $_GET['id'];
 
 $res = $database->delete($id);
 if($res){
 	header('location: viewp.php');
 }else{
 	echo "Failed to Delete Record";
 }
?>