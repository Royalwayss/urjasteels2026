<?php
include('include/db_config.php');
if(empty($_SESSION['admin_id']) || empty($_SESSION['admin_name'])){
	echo '<script>window.location.href="index.php"; </script>'; die;
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="col-sm-10">
				<ul class="navbar-nav mr-auto">
				   <li class="nav-item">
					  
					  <img src="../images/urja/urja-logo.png" style="width:100px; height:50px"> 
					  
				   </li>
				   <li class="nav-item ">
					  <a class="nav-link header-menu" href="dashboard.php">Dashboard</a>
				   </li>
				   <li class="nav-item">
					  <a class="nav-link header-menu" href="contacts.php">Contacts</a>
				   </li>
				    <li class="nav-item">
					  <a class="nav-link header-menu" href="enquiries.php">Enquiries</a>
				   </li>
				   
				    <li class="nav-item">
					  <a class="nav-link header-menu" href="careers.php">Careers</a>
				   </li>
				   
				  
				</ul>
			</div>
			<div class="col-sm-2">
				<ul class="navbar-nav mr-auto">
				   <li class="nav-item ">
					 <a class="nav-link header-menu" href="logout.php">Logout</a>
				   </li>
				   
				</ul>
			</div>
         </div>
      </nav>