<?php  
session_start();
include('include/header.php');
 $result = $conn->query("select * from contacts order by id desc");
	 $total_contact_count = $result->num_rows;

	 $result = $conn->query("select * from careers order by id desc");
	 $total_career_count = $result->num_rows;
?>
<style>
  .count-box {
    background: #fff;
    width: 250px;
    padding: 25px;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    transition: 0.3s;
  }

  /* Hover effect */
  .count-box:hover {
    transform: translateY(-5px);
  }

  /* Title */
  .count-box h2 {
    font-size: 18px;
    color: #333;
    margin-bottom: 10px;
  }

  /* Number */
  .count-box p {
    font-size: 32px;
    font-weight: bold;
    color: #007bff;
    margin: 0;
  }

  /* Responsive */
  @media (max-width: 600px) {
    .count-box {
      width: 90%;
    }
  }
</style>

<body>
  <?php include('include/sidebar.php'); ?>
  <!-- Main -->
  <div class="main-content">
    <div class="page-title">Dashboard</div>

    <div class="card-panel">
      <!-- Top bar -->

      <div class="container">

        <div class="count-box">
          <h2>Total Contacts</h2>
          <p><?php echo $total_contact_count ?></p>
        </div>

        <div class="count-box">
          <h2>Total Careers</h2>
          <p><?php echo $total_career_count; ?></p>
        </div>

      </div>

    </div>
  </div>

  <?php include('include/footer.php'); ?>