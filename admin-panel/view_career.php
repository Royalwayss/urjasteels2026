<?php
include('include/db_config.php');
//if(!empty($_SESSION['admin_id']) && !empty($_SESSION['admin_name'])){
	if(!empty($_GET['id'])){
		 $query="update careers set view_status = '1' where id = ".$_GET['id']."";
	     $conn->query($query);
		 echo true;
	}
//}



?>