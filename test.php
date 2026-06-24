<?php include 'include/header.php'; ?>
<?php
$CATEGORY_TITLE = 'testttttttttttttttt';
$industry_page = true;
?>
<!-- start page title -->
<section class="page-title-separate-breadcrumbs  hr-banner ipad-top-space-margin">
  <div class="container position-relative">
    <div class="row justify-content-start align-items-lg-end extra-very-small-screen">
      <div class="col-lg-12 position-relative page-title-extra-large md-mb-30px sm-mb-20px z-index-9">
        <h1 class="text-white fw-600 ls-minus-4px mb-0 alt-font highlight-separator-small direction-ltr"><span class="highlight-separator mb-0 pb-0 pages-inner-heading" data-shadow-animation="true" data-animation-delay="500"><?php echo $CATEGORY_TITLE; ?><span></span></span>
        </h1>
      </div>
    </div>
  </div>
  <?php include 'include/breadcrumb.php'; ?>
</section>
<!-- end page title -->

<!-- start section -->
<section class="urja-inner-product">
  <div class="container">

    <div class="row g-4">
      <div class="col-md-12 col-lg-12 mb-5" data-section="hr-coils">
        <div class="card product-card">
          <div class="card-header-custom">
            <img src="<?php echo BASEURL; ?>images/urja/product-inner/coil.png">
            <h2 class="h4 mb-0"><?php echo $CATEGORY_TITLE; ?></h2>
          </div>
          <div class="card-body" id="category_content">
           
			<?php  include('request-a-quote-form.php'); ?>
          </div>
         
		 
		 </div>
      </div>
    </div>
  </div>
</section>
<?php include 'include/footer.php'; ?>
<?php include 'request-a-quote-form-script.php'; ?>