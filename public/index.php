<?php include("../includes/layouts/header.php"); ?>
<?php $layout_context = "public"; ?>
      <?php if ($current_page) { ?>
        <div class="container main-content">
          <h2><?php echo htmlentities($current_page["menu_name"]); ?></h2>
  			<p><?php echo nl2br(htmlentities($current_page["content"])); ?></p>
      </div>
  		<?php } else { ?>
        <div class="jumbotron welcome-banner">
            <div class="banner-text">
    			     <h1>Welcome</h1>
               <hr>
               <h3>A custom CMS platform, made with PHP</h3>
            </div>
        </div>
  		<?php }?>


<?php include("../includes/layouts/footer.php"); ?>
