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
    <?php }else if($pageName == 'categories.php'){ ?>
    <span>Categories</span>
    <?php }else if($pageName == 'annealed-steel-bars-manufacturer.php'){ ?>
    <a href="categories">Categories</a>
    <span>></span>
    <span><?php echo @$CATEGORY_TITLE; ?></span>
	<?php }else if($pageName == 'hex-bars-manufacturer-india.php'){ ?>
    <a href="categories">Categories</a>
    <span>></span>
    <span><?php echo @$CATEGORY_TITLE; ?></span>
	<?php }else if($pageName == 'cold-drawn-bright-bar-manufacturer.php'){ ?>
    <a href="categories">Categories</a>
    <span>></span>
    <span><?php echo @$CATEGORY_TITLE; ?></span>
    <?php }else if($pageName == 'induction-hardened-steel-bars-manufacturer.php'){ ?>
    <a href="categories">Categories</a>
    <span>></span>
    <span><?php echo @$CATEGORY_TITLE; ?></span>
    <?php }else if($pageName == 'hard-chrome-plated-bar-manufacturers.php'){ ?>
    <a href="categories">Categories</a>
    <span>></span>
    <span><?php echo @$CATEGORY_TITLE; ?></span>
    <?php }else if($pageName == 'peeled-ground-round-steel-bars-manufacturers.php'){ ?>
    <a href="categories">Categories</a>
    <span>></span>
    <span><?php echo @$CATEGORY_TITLE; ?></span>
    <?php }else if($pageName == 'honed-tubes-manufacturer.php'){ ?>
    <a href="categories">Categories</a>
    <span>></span>
    <span><?php echo @$CATEGORY_TITLE; ?></span>
    <?php }else if($pageName == 'peeled-ground-round-steel-bars-manufacturers.php'){ ?>
    <span>></span>
    <?php }else if($pageName == 'our-infrastructure.php'){ ?>
     <span>Our Infrastructure</span>
	<?php }else if($pageName == 'steel-solutions-for-the-automotive-industry.php'){ ?>
    <a href="<?php echo BASEURL; ?>our-infrastructure">Our Infrastructure</a>
    <span>></span>
    <span><?php echo @$CATEGORY_TITLE; ?></span>
    <?php }else if($pageName == 'steel-solutions-for-hydraulic-and-pneumatic-industries.php'){ ?>
	 <a href="<?php echo BASEURL; ?>our-infrastructure">Our Infrastructure</a>
    <span>></span>
    <span><?php echo @$CATEGORY_TITLE; ?></span>
    <?php }else if($pageName == 'steel-solutions-for-fastener-manufacturing-industry.php'){ ?>
	 <a href="<?php echo BASEURL; ?>our-infrastructure">Our Infrastructure</a>
    <span>></span>
    <span><?php echo @$CATEGORY_TITLE; ?></span>
    <?php }else if($pageName == 'steel-solutions-for-construction-and-infrastructure-industry.php'){ ?>
	<a href="<?php echo BASEURL; ?>our-infrastructure">Our Infrastructure</a>
    <span>></span>
    <span><?php echo @$CATEGORY_TITLE; ?></span>
    <?php }else if($pageName == 'steel-solutions-for-cnc-machining-and-precision-engineering-industry.php'){ ?>
	<a href="<?php echo BASEURL; ?>our-infrastructure">Our Infrastructure</a>
    <span>></span>
    <span><?php echo @$CATEGORY_TITLE; ?></span>
    <?php }else if($pageName == 'blog.php'){ ?>
	<a href="<?php echo BASEURL; ?>blog">Blog</a>
    <?php }else if($pageName == 'en8-round-bars-buyers-guide-india.php'){ ?>
	<a href="<?php echo BASEURL; ?>blog">Blog</a>
    <span>></span>
    <span><?php echo @$BLOG_TITLE; ?></span>
    <?php }else if($pageName == 'cold-drawn-round-bar-manufacturers-precision.php'){ ?>
	<a href="<?php echo BASEURL; ?>blog">Blog</a>
    <span>></span>
    <span><?php echo @$BLOG_TITLE; ?></span>
    <?php }else if($pageName == 'hot-rolled-round-bar-exporters-guide.php'){ ?>
	<a href="<?php echo BASEURL; ?>blog">Blog</a>
    <span>></span>
    <span><?php echo @$BLOG_TITLE; ?></span>
    <?php }else if($pageName == 'industrial-steel-supplier-evaluation-tips.php'){ ?>
	<a href="<?php echo BASEURL; ?>blog">Blog</a>
    <span>></span>
    <span><?php echo @$BLOG_TITLE; ?></span>
    <?php }else if($pageName == 'testttttttt.php'){ ?>
    <?php } ?>
  </div>
</div>