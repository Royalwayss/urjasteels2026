<?php $pageName = basename($_SERVER['PHP_SELF']); ?>
<div class="container">
   <div class="breadcrumb">
      <a href="<?php echo BASE_URL;?>">Home</a>
      <span>></span>
      <?php if($pageName == 'about-us.php'){ ?>
      <span>About US</span>
      <?php }else if($pageName == 'steel-products-manufacturer.php'){ ?>
      <span>Products</span>
      <?php }else if($pageName == 'hot-rolled-coils.php'){ ?>
      <a href="steel-products-manufacturer">Products</a>
      <span>></span>
      <span>HR Coils (Hot Rolled Coils)</span>
      <?php }else if($pageName == 'round-bars-manufacturer-india.php'){ ?>
      <a href="steel-products-manufacturer">Products</a>
      <span>></span>
      <span>Round Bars</span>
      <?php }else if($pageName == 'steel-pipes-and-honed-tubes.php'){ ?>
      <a href="steel-products-manufacturer">Products</a>
      <span>></span>
      <span>Steel Pipes and Tubes</span> 
      <?php }else if($pageName == 'bright-bars-manufacturer-india.php'){ ?>
      <a href="steel-products-manufacturer">Products</a>
      <span>></span>
      <span>Bright Bars</span>  
      <?php }else if($pageName == 'steel-billets-manufacturers.php'){ ?>
      <a href="steel-products-manufacturer">Products</a>
      <span>></span>
      <span>Steel Billets</span> 
      <?php }else if($pageName == 'jobs-and-career.php'){ ?>
      <span>Career</span>
      <?php }else if($pageName == 'contact-us.php'){ ?>
      <span>Contact US</span>
      <?php }else if($pageName == 'testttttttt.php'){ ?>
      <?php } ?>
   </div>
</div>