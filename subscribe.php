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
        Name: <input type="text" name="name"><br>
        Your E-mail: <input type="text" name="email"><br>
        Password: <input type="password" name="password"><br>
        Re-enter Password: <input type="password"><br>

        <fieldset>
        <legend> Quick Survey About British Musicians </legend>

        <h2 id="question1">Which of the following songs is from British Artist? </h2>

        <label for="Your Song"> Your Song</label>
        <input type="checkbox" name="song1" id="Your Song" value="Your Song"><br>
        <label for="Firework"> Firework</label>
        <input type="checkbox" name="song2" id="Firework" value="Firework"><br>
        <label for="Sicko Mode"> Sicko Mode</label>
        <input type="checkbox" name="song3" id="Sicko Mode" value="Sicko Mode"><br>
        <label for="Timber"> Timber</label>
        <input type="checkbox" name="song4" id="Timber" value="Timber"><br>

        
        <h2 id="question2">Which of the following artists is not in from UK?</h2>

        <input type="radio" name="singer" id="Tom Odell" value="Tom Odell"> Tom Odell<br>
        <input type="radio" name="singer" id="Sam Smith" value="Sam Smith"> Sam Smith<br>
        <input type="radio" name="singer" id="James Arthur" value="James Arthur"> James Arthur<br> 
        <input type="radio" name="singer" id="Katy Perry" value="Katy Perry"> Katy Perry<br>

        </fieldset>


        <h4 id="end">Tell us more you want to know about British Musicans</h4>
        <textarea rows="4" cols="50" name="comment">Enter text here...</textarea>


        <input type="submit" id="Finish" value="Finish">
    </form>



<!-- Write stuff here that the browser will ignore as commenting outcode appears here -->


</div><!--.container-->
<?php include "inc/scripts.php"; ?>
</body>

</html>