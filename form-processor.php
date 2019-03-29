<?php
// NOTICE: this part of this HTML document is just one PHP tag
//  This script doesn't output anything to the user's browser
//  so there is no DOCTYPE or any of the usual HTML things
//  in this part

// **********************************
// SECTION ONE: set all the variables
// **********************************

// set some variables
$emailFrom = "hchen67@u.rochester.edu"; // use YOUR email for both lines 12 and 13
$emailTo = "hchen67@u.rochester.edu";
$subject = "CSC174 Midterm hchen67";

// for the following lines of code, grab the data being passed 
//   from the method="post" in the HTML form and hold it in a variable

// the words inside each $_POST[] must match a name="" attribute from the 
//   HTML form EXACTLY...

// these are from the text INPUT fields...
$Name = Trim(stripslashes($_POST['name'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Password = Trim(stripslashes($_POST['password'])); 
// ...used more input fields? Then copy these lines (above)
//   and make more

// these are from the INPUT type="checkbox" fields...
$Choice1 = $_POST['song1']; 
$Choice2 = $_POST['song2']; 
$Choice3 = $_POST['song3']; 
$Choice4 = $_POST['song4']; 
// ...used more checkboxes? Then copy these lines (above)
//   and make more

// this is from all the INPUT type="radio" fields...
$Question2Choice = $_POST['song']; 
// notice: no matter how many radio buttons, there's only one answer

// this is from the TEXTAREA field...
$Comments = Trim(stripslashes($_POST['comment'])); 

// **********************************
// SECTION TWO: build the email body
// **********************************

$body = "myMail"; // initialize the variable, then start concatenating
            // backslash-n means new-line in emails

$body .= "CSC174 Midterm: \n"; //...a label
$body .= $mySubject;      //...a variable
$body .= "\n\n";              //...a new line

$body .= "Hi there!: \n"; //...a label
$body .= $myTitle;      //...a variable
$body .= "\n\n";              //...a new line

$body .= "From:hchen67@u.rochester.edu: \n"; //...a label
$body .= $origin;      //...a variable
$body .= "\n\n";              //...a new line
// ...used more input fields? Then copy these lines (above)
//   and make more

// Do your checkboxes this way...
$body .= "Rate Our Website from 1 to 5: \n";       // a heading for your checkbox section

if (isset($one)) {        // a checkbox variable
    $body .= $one . "\n"; // the same checkbox variable
}
if (isset($two)) {        // a checkbox variable
    $body .= $two . "\n"; // the same checkbox variable
}
if (isset($three)) {        // a checkbox variable
    $body .= $three . "\n"; // the same checkbox variable
}
if (isset($four)) {        // a checkbox variable
    $body .= $four . "\n"; // the same checkbox variable
}
if (isset($five)) {        // a checkbox variable
    $body .= $five . "\n"; // the same checkbox variable
}
$body .= "\n";
// ...used more checkbox fields? Then copy these lines (above)
//   and make more

// This is for your radio buttons (always just one answer)...
$body .= "Subscribe to us: \n";       // a heading for your radio button section
$body .= $confirm;            // the (one) radio button variable
$body .= "\n\n";

// This is for your TEXTAREA
$body .= "More comments: \n";       // a heading for your text area
$body .= $comments;            // the variable for your text area
$body .= "\n";

// **********************************
// SECTION THREE: send the email
// **********************************
// You won't need to edit anything here...

// send email 
mail($emailTo, $subject, $body, "From: <$emailFrom>");


//end the PHP block here...
?>

<!-- **********************************
     SECTION FOUR: thank the user in HTML;
     Below, there needs to be an HTML 
     webpage with a customized message 
     for the user
     ********************************** -->


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
  <h2>Thank You <?php echo $Name; ?></h2>
  <p>Go back to <a href="subscribe.php">the Subscribes page</a>.</p>
</main>



<!-- Write stuff here that the browser will ignore as commenting outcode appears here -->



</body>

</html>