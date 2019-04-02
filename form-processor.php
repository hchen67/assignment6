<?php
  // 1. Create a database connection
  require_once("inc/connect-db.php");

  $insertData1 = Trim(stripslashes($_POST['firstname'])); 
  $insertData2 = Trim(stripslashes($_POST['lastname'])); 
  $insertData3 = Trim(stripslashes($_POST['email'])); 
  
  // 2. Perform database query
  $query  = "INSERT INTO subscribe (firstname, lastname, email) VALUES ('$insertData1','$insertData2','$insertData3')";
  $result = mysqli_query($connection, $query);
?>



<!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
      <title>Thank You | British Iconic Musicians</title>
    <?php include "inc/head.php";?>
  </head>


<body class='container4'>

    <header class="banner2">

          <h2> 3 Amazing British Musicians</h2>
        
           <?php include "inc/nav.php";?>
      

    </header>


<main class="full-width">
  <h2>Thank You 
  </h2>
  <p>Go back to <a href="subscribe.php">the Subscribes page</a>.</p>
</main>

</body>

</html>

<?php

  // 5. Close database connection
  mysqli_close($connection);
?>