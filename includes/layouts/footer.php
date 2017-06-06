<footer>
  <p>Copyright <?php echo date("Y"); ?></p>
</footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
<?php
// close database connection
  if (isset($connection)) {
    mysqli_close($connection);
  }
?>
