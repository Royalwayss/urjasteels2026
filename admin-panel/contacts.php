<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <?php include('include/css.php'); ?>
	  <style>
	   .viewed-internship{
			padding: 10px;
			font-size: 12px;
			font-weight: bold;
			color: #FFFFFF;
			background-color: #35aa47;
			margin-right: 10px;
			cursor: pointer;
		}
		.not-viewed-internship{
			padding: 10px;
			font-size: 12px;
			font-weight: bold;
			color: #FFFFFF;
			background-color: #f68f98;
			margin-right: 10px;
			cursor: pointer;
		}
		.modal {
		  display: none; /* Hidden by default */
		  position: fixed; /* Stay in place */
		  z-index: 1; /* Sit on top */
		  padding-top: 100px; /* Location of the box */
		  left: 0;
		  top: 0;
		  width: 100%; /* Full width */
		  height: 100%; /* Full height */
		  overflow: auto; /* Enable scroll if needed */
		  background-color: rgb(0,0,0); /* Fallback color */
		  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		}

		/* Modal Content */
		.modal-content {
		  background-color: #fefefe;
		  margin: auto;
		  padding: 20px;
		  border: 1px solid #888;
		  width: 80%;
		}

		/* The Close Button */
		.close {
		  color: #aaaaaa;
		  float: right;
		  font-size: 28px;
		  font-weight: bold;
		}

		.close:hover,
		.close:focus {
		  color: #000;
		  text-decoration: none;
		  cursor: pointer;
		}
		.label{
			 font-weight: bold;
			 padding: 4px;
			 margin-top: 4px;
		}
		#Internship-List_filter label{
			margin-left:280px!important; 
		}
		input[type=search] { 	  
			
            width:250px;			
		}
		header { display: block; }
       .popup header { display: none; }
	   .page-item.active .page-link {
			z-index: 0!important;
			color: #fff;
			background-color: #007bff;
			border-color: #007bff;
		}
	  </style>
   </head>
<body> 
<?php include('include/header.php'); ?>
<div class="container">
  <h3>Contacts</h3>
  <table class="table table-bordered" id="Internship-List">
	 <thead>
		<tr>
		   <th class="text-left" style="display:none"><b>no</b></th>
		   <th class="text-left"><b>ID</b></th>
		   <th class="text-left"><b>NAME</b></th>
		   <th class="text-left"><b>EMAIL</b></th>
		   <th class="text-left"><b>MOBILE</b></th> 
		   <th class="text-left"><b>WHATSAPP NUMBER</b></th> 
		   <th class="text-left"><b>COUNTRY/STATE/CITY</b></th> 
		  
		   <th class="text-left"><b>DATE & TIME </b></th>
		   <th class="text-left"><b>ACTION</b></th>
		</tr>
	 </thead>
	 <tbody>
	 <?php 
     $no  = 1;
	 $sql = "select * from contacts order by id desc";
	 $result = $conn->query($sql);
	 if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
     
	 ?>
		<tr>
		   <td class="text-left" style="display:none"><?php echo $no; ?></td>
		   <td class="text-left"><?php echo $row['id']; ?></td>
		   <td class="text-left"><?php echo $row['first_name']."<br>".$row['last_name']; ?></td>
		   <td class="text-left"><?php echo $row['email']; ?></td>
		   <td class="text-left"><?php echo $row['mobile']; ?></td>
		   <td class="text-left"><?php echo $row['whatsapp_mobile']; ?></td>
		   <td class="text-left"><?php echo $row['country'].'<br>'.$row['state'].'<br>'.$row['city']; ?></td>
		   
		   <td class="text-left"><?php echo date('d F Y h:i:a',strtotime($row['created_at'])); ?></td>
		   <td class="text-left" onclick="view_internship(<?php echo $row['id']; ?>,<?php echo $row['view_status']; ?>);" ><span <?php if($row['view_status'] == 0){ ?> class="not-viewed-internship" <?php }else{ ?> class="viewed-internship" <?php } ?> id="internship-row-<?php echo $row['id']; ?>">VIEW</span></td>
		</tr>
		
		<div id="myModal<?php echo $row['id']; ?>" class="modal">
			<!-- Modal content -->
			  <div class="modal-content">
				<?php /*
				<div class="row">
						
						<div class="col-5"><h4 class="text-left" style=""><strong>Date: <?php echo date('d F Y h:i:a',strtotime($row['created_at'])); ?></strong></h4></div>
						<div class="col-2"><span class="close" style="color:red" onclick="model_close(<?php echo $row['id']; ?>)"><h2><b>&times;</b></h2></span></div>
				</div>	*/ ?>
				<div class="row">
				  <div class="col-11"><h3>Form Details</h3></div>
				  <div class="col-1"><span class="close" style="color:red" onclick="model_close(<?php echo $row['id']; ?>)"><h2><b>&times;</b></h2></span></div>
				</div>
				<div class="view_internship_details">
					<div class="row">
						<div class="col-2 label">Name:</div>
						<div class="col-1 label">:</div>
						<div class="col-3 value"><?php echo $row['first_name']."<br>".$row['last_name']; ?></div>
					
						<div class="col-2 label">Email:</div>
						<div class="col-1 label">:</div>
						<div class="col-3 value"><?php echo $row['email']; ?></div>
					
						
						<div class="col-2 label">Mobile:</div>
						<div class="col-1 label">:</div>
						<div class="col-3 value"><?php echo $row['mobile']; ?></div>
						
						<div class="col-2 label">Whatsapp Number:</div>
						<div class="col-1 label">:</div>
						<div class="col-3 value"><?php echo $row['whatsapp_mobile']; ?></div>
						
						<div class="col-2 label">Company :</div>
						<div class="col-1 label">:</div>
						<div class="col-3 value"><?php echo $row['company']; ?></div>
					
						
						<div class="col-2 label">Country:</div>
						<div class="col-1 label">:</div>
						<div class="col-3 value"><?php echo $row['country']; ?></div>
						
						<div class="col-2 label">State:</div>
						<div class="col-1 label">:</div>
						<div class="col-3 value"><?php echo $row['state']; ?></div>
						
						<div class="col-2 label">City:</div>
						<div class="col-1 label">:</div>
						<div class="col-3 value"><?php echo $row['city']; ?></div>
						
						<div class="col-2 label">Product:</div>
						<div class="col-1 label">:</div>
						<div class="col-3 value"><?php echo $row['product']; ?></div>
						
						
						
						
						<div class="col-2 label">Quantity:</div>
						<div class="col-1 label">:</div>
						<div class="col-3 value"><?php echo $row['quantity']; ?></div>
						
						
						
						
						
						<div class="col-2 label">Message:</div>
						<div class="col-1 label">:</div>
						<div class="col-8 value"><?php echo $row['message']; ?></div>
						
						
						
					</div>
				  
				</div>
			</div>
		</div>
		
		
		
	 <?php  $no++; } }?>
	 </tbody>
  </table>
</div>
<?php include('include/footer.php'); ?>   
<script src="js/jquery-3.5.1.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function () {
    $('#Internship-List').DataTable();
});
     function view_internship(id,view_status){
		 if( view_status == 0){
			 $.ajax({
				   url: "view_conatct.php?id="+id, 
				   type: "POST",
				   dataType: "json",
				   contentType: "application/json; charset=utf-8",
				   data: JSON.stringify({ id: 'id'}),
				   success: function (result) {
						$('#internship-row-'+id).css("background-color","#35aa47");
						var modal = document.getElementById("myModal"+id);
						modal.style.display = "block";
					},
					
				});
		 }else{
			 var modal = document.getElementById("myModal"+id);
			 modal.style.display = "block";
		 }		
	 
	 }
	function model_close(id){
		var modal = document.getElementById("myModal"+id);
		modal.style.display = "none";
	}
</script>  
</body>
</html>