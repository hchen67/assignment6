<?php
  // 1. Create a database connection
  require_once("inc/connect-db.php");

  $firstname = Trim(stripslashes($_POST['firstname'])); 
  $lastname = Trim(stripslashes($_POST['lastname'])); 
  $email = Trim(stripslashes($_POST['email'])); 
  
  // 2. Perform database query
  $query  = "INSERT INTO subscribe (firstname, lastname, email) VALUES ('$firstname','$lastname','$email')";
  $result = mysqli_query($connection, $query);
?>

<?php
  require_once("inc/connect-db.php");
  $query  = "SELECT * FROM subscribe";
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
  <h2>
    Thank You <?php echo $firstname; ?>
  </h2>
  <p>Go back to the <a href="subscribe.php">Sign Up Page</a>.</p>
</main>

</body>

</html>

<?php
  mysqli_free_result($result);

  mysqli_close($connection);
?>