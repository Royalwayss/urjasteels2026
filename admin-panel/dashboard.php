<?php session_start(); ?>
<!DOCTYPE html>
<html>

  <head>
    <title></title>
    <?php include('include/css.php'); ?>
  </head>
  <style>
    a {
      text-decoration: none !important;
    }
  </style>

  <body>
    <?php include('include/header.php'); ?>
    <div class="container">
      <div class="container-fluid">
        <div class="row content">
          <?php
	
	 $result = $conn->query("select * from contacts order by id desc");
	 $total_contact_count = $result->num_rows;
	 
	
	 $result = $conn->query("select * from contacts where view_status='0'");
	 $not_viewed_contact_count = $result->num_rows; 
	 
	 
	 $result = $conn->query("select * from careers order by id desc");
	 $total_career_count = $result->num_rows;
	 
	
	 $result = $conn->query("select * from careers where view_status='0'");
	 $not_viewed_career_count = $result->num_rows; 
	 
	  $result = $conn->query("select * from enquiries order by id desc");
	  $total_product_enquiries = $result->num_rows;
	 
	
	 $result = $conn->query("select * from enquiries where view_status='0'");
	 $not_viewed_product_enquiries_count = $result->num_rows; 
	 
	 
	 
	 
	 
	 
	?>

          <div class="col-sm-12">

            <div class="row">

              <div class="col-sm-12">
                <div class="well">

                  <div class="row">

                    <div class="col-sm-3">
                      Total Contacts
                    </div>

                    <div class="col-sm-3" style="color:red">
                      New Contacts
                    </div>

                    <div class="col-sm-3">
                      Total Career Enquiries
                    </div>

                    <div class="col-sm-3" style="color:red">
                      New Career Enquiries
                    </div>

                  </div>

                  <div class="row">

                    <div class="col-sm-3">
                      <?php echo $total_contact_count; ?>
                    </div>

                    <div class="col-sm-3" style="color:red">
                      <?php echo $not_viewed_contact_count; ?>
                    </div>

                    <div class="col-sm-3">
                      <?php echo $total_career_count; ?>
                    </div>

                    <div class="col-sm-3" style="color:red">
                      <?php echo $not_viewed_career_count; ?>
                    </div>

                  </div>
                   <div class="row"> <br></div>
				   
				  
				  <div class="row">

                    <div class="col-sm-3">
                      Total Product Enquiries
                    </div>

                    <div class="col-sm-3" style="color:red">
                      New Product Enquiries
                    </div>

                    

                  </div>

                  <div class="row">

                    <div class="col-sm-3">
                      <?php echo $total_product_enquiries; ?>
                    </div>

                    <div class="col-sm-3" style="color:red">
                      <?php echo $not_viewed_product_enquiries_count; ?>
                    </div>

                    
                  </div>

				  
				  
				  
				  
				  
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>
    </div>
    </div>
    </div>
    <?php include('include/footer.php'); ?>
  </body>

</html>