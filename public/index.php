<?php include("../includes/layouts/header.php"); ?>
<?php $layout_context = "public"; ?>
    <div class="container">
      <?php if ($current_page) { ?>

        <h2><?php echo htmlentities($current_page["menu_name"]); ?></h2>
  			<p><?php echo nl2br(htmlentities($current_page["content"])); ?></p>

  		<?php } else { ?>

  			<p>Welcome</p>
  		<?php }?>

    </div>

<?php include("../includes/layouts/footer.php"); ?>
