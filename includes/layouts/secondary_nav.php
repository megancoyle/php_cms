<?php require_once("../includes/functions.php"); ?>

<?php $data = public_navigation($current_subject, $current_page); ?>
<?php $main_menu = $data[0]; ?>
<?php $sub_menu = $data[1]; ?>

<nav class="navbar navbar-default">
  <div class="navbar-inner container-fluid container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar2">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar2">
      <?php echo $sub_menu ?>
    </div>
  </div>
</nav>
