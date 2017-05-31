<div id="footer">Copyright <?php echo date("Y"); ?></div>

</body>
</html>
<?php
// close database connection
  if (isset($connection)) {
    mysqli_close($connection);
  }
?>
