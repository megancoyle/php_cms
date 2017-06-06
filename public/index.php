<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php $layout_context = "public"; ?>
<?php include("../includes/layouts/header.php"); ?>
<?php find_selected_page(true); ?>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <?php echo public_navigation($current_subject, $current_page); ?>
      </div>
    </nav>

    <div class="container">
      <?php if ($current_page) { ?>

        <h2><?php echo htmlentities($current_page["menu_name"]); ?></h2>
  			<p><?php echo nl2br(htmlentities($current_page["content"])); ?></p>

  		<?php } else { ?>

  			<p>Welcome</p>
  		<?php }?>

    </div>

<?php include("../includes/layouts/footer.php"); ?>
