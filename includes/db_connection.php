<?php
  // create a database connection
  define("DB_SERVER", "127.0.0.1");
  define("DB_USER", "time_cms");
  define("DB_PASS", "secretpassword");
  define("DB_NAME", "time_management");

  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  // test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " .
         mysqli_connect_error() .
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>
