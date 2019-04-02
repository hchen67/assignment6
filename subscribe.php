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


  <div class="form">
  
  <form method="post" action="form-processor.php">
        <!-- all form elements and other HTML in here -->
        <div class="form-layout">
          <div>First Name: <input type="text" name="firstname" /></div>
          <div>Last Name: <input type="text" name="lastname"/></div>
          <div>E-mail: <input type="text" name="email"/></div>
        </div>
        <h4 id="end">Tell us more you want to know about British Musicans</h4>
        <textarea rows="4" cols="50" name="comment">Enter text here...</textarea>
      <div class="finish">
        <input type="submit" id="Finish" value="Finish">
      </div>
    </form>




</div><!--.container-->

<?php include "inc/scripts.php"; ?>
</body>
