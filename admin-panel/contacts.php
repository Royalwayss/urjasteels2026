<?php  
session_start();
include('include/header.php');
?>

<body>
  <?php include('include/sidebar.php'); ?>
  <!-- Main -->
  <div class="main-content">
    <div class="page-title">Contacts Management</div>
    <div class="breadcrumb-text"><a href="dashboard.php">Dashboard</a></div>

    <div class="card-panel">
      <!-- Top bar -->

      <?php /*
    <!-- Pagination bar -->
    <div class="pagination-bar">
      <span>Page</span>
      <button class="btn-page">«</button>
      <button class="btn-page">‹</button>
      <input type="number" value="1">
      <span>of 84 | View</span>
      <select>
        <option>50</option>
        <option>100</option>
        <option>200</option>
      </select>
      <span>records | Found total 4,179 records</span>
    </div> */ ?>

      <!-- Table -->
      <div style="overflow-x:auto;">
        <table id="datatabel"class="table table-striped table-bordered table-hover dataTable no-footer">
          <thead>
            <tr>
              <th style="width:40px">No.</th>
              <th>Page</th>
              <th>Name</th>
              <th>Email</th>
              <th>Mobile</th>
			  <th>Country/state/city</th> 
              <th>Date</th>
              <th>View</th>
              
            </tr>
            <!-- Filter row -->
            <?php /*<tr class="filter-row">
            <td></td>
            <td><input type="text" placeholder="Name"></td>
            <td><input type="text" placeholder="Email"></td>
            <td></td>
            <td>
              <div class="date-filter">
                <div class="date-filter-row">
                  <span>From</span>
                  <input type="text" placeholder="dd/mm/yyyy">
                  <button class="cal-btn"><i class="fa fa-calendar"></i></button>
                </div>
                <div class="date-filter-row">
                  <span>To</span>
                  <input type="text" placeholder="dd/mm/yyyy">
                  <button class="cal-btn"><i class="fa fa-calendar"></i></button>
                </div>
              </div>
            </td>
            <td></td>
            <td>
              <div class="actions-cell">
                <button class="btn-action btn-search-action"><i class="fa fa-search"></i></button>
                <button class="btn-action btn-reset-action"><i class="fa fa-rotate-left"></i></button>
              </div>
            </td>
          </tr> */ ?>
          </thead>
          <tbody id="userTableBody">
            <?php 
			 $no  = 1;
			 $sql = "select * from contacts order by id desc";
			 $result = $conn->query($sql);
			 if ($result->num_rows > 0) {
			 while($row = $result->fetch_assoc()) {
     
			?>
            <tr>
              <td><?php echo $no; ?></td>
			  <td><?php echo $row['page']; ?></td>
              <td><?php echo $row['first_name']."<br>".$row['last_name']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['mobile']; ?></td>
			  <td><?php echo $row['country'].'<br>'.$row['state'].'<br>'.$row['city']; ?></td>
              <td><?php echo date('d F Y h:i:a',strtotime($row['created_at'])); ?></td>
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

    </div>
  </div>


 <?php include('include/footer.php'); ?>
 <script>
$(document).ready(function () {
    $('#datatabel').DataTable();
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
 