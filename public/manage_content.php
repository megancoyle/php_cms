<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php
	// perform database query
	$query  = "SELECT * ";
	$query .= "FROM subjects ";
	$query .= "WHERE visible = 1 ";
	$query .= "ORDER BY position ASC";
	$result = mysqli_query($connection, $query);
	confirm_query($result);
?>

<?php include("../includes/layouts/header.php"); ?>

    <div id="main">
      <div id="navigation">
        <ul class="subjects">
    		<?php
    			// use returned data (if any)
    			while($subject = mysqli_fetch_assoc($result)) {
    				// output data from each row
    		?>
    				<li><?php echo $subject["menu_name"] . " (" . $subject["id"] . ")"; ?></li>
    	  <?php
    			}
    		?>
    		</ul>
      </div>
      <div id="page">
        <h2>Manage Content</h2>
      </div>
    </div>
<?php
// release returned data
  mysqli_free_result($result);
?>

<?php include("../includes/layouts/footer.php"); ?>
<?php
  // close database connection
  if (isset($connection)) {
    mysqli_close($connection);
  }
?>
