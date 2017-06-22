<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php
	if (!isset($layout_context)) {
		$layout_context = "public";
	}
?>

<?php find_selected_page(true); ?>

<?php $admin_data = navigation($current_subject, $current_page); ?>
<?php $admin_main_menu = $admin_data[0]; ?>
<?php $admin_sub_menu = $admin_data[1]; ?>

<?php $data = public_navigation($current_subject, $current_page); ?>
<?php $main_menu = $data[0]; ?>
<?php $sub_menu = $data[1]; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>PHP CMS <?php if ($layout_context == "admin") { echo "Admin"; } ?></title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="css/public.css" media="all" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="index.php">PHP CMS <?php if ($layout_context == "admin") { echo "Admin"; } ?></a>
				</div>

				      <div class="collapse navbar-collapse" id="myNavbar">
								<?php if ($layout_context === "admin") {
									echo $admin_main_menu;
								} else {
									echo $main_menu;
								} ?>
				      </div>
				    </div>
				    </nav>
				  <?php if ($sub_menu != "") { ?>
				   <?php include("../includes/layouts/secondary_nav.php"); ?>
				   <?php } ?>
