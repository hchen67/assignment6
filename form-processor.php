<?php
// connect to the database
include('connect-db.php');

// get results from database
$result = mysqli_query($connection, "SELECT * FROM subscribe");
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
  <h2>Thank You</h2>
  <p>Go back to <a href="subscribe.php">the Subscribes page</a>.</p>
</main>



<!-- Write stuff here that the browser will ignore as commenting outcode appears here -->



</body>

</html>
<?php
  mysqli_free_result($result);
  mysqli_close($connection);
?>