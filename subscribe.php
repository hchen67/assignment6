<!DOCTYPE html>
  <html lang="en">

  <head>
  	<meta charset="utf-8">
	  <title>Sign Up | British Iconic Musicians</title>
    <?php include "inc/head.php";?>
  </head>


  <body class='container3'>

    <header class="banner2">

          <h2> 3 Amazing British Musicians</h2>
        
           <?php include "inc/nav.php";?>
      

    </header>

  <?php include('connect-db.php');?>

  <div class="form">

  <form method="post" action="new.php">
        <!-- all form elements and other HTML in here -->
        First Name: <input type="text" name="firstname" value="<?php echo $firstname; ?>"/><br>
        Last Name: <input type="text" name="lastname" value="<?php echo $lastname; ?>"/><br>
        E-mail: <input type="text" name="email" value="<?php echo $email; ?>"/><br>


        <h4 id="end">Tell us more you want to know about British Musicans</h4>
        <textarea rows="4" cols="50" name="comment">Enter text here...</textarea>


        <input type="submit" id="Finish" value="Finish">
    </form>




</div><!--.container-->
<?php include "inc/scripts.php"; ?>
</body>
