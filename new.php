<?php
  include('form-processor.php');

  // connect to the database
  include('connect-db.php');
 
  if (isset($_POST['submit'])) {
  // get form data, making sure it is valid
  $firstname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['firstname']));
  $lastname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['lastname']));
  $email = mysqli_real_escape_string($connection, htmlspecialchars($_POST['email']));

  // check to make sure both fields are entered
  if ($firstname == '' || $lastname == '' || $email == '') {
    // generate error message
    $error = 'ERROR: Please fill in all required fields!';

    // if either field is blank, display the form again
    subscribe($id, $firstname, $lastname, $error);

  } else {
    // save the data to the database
    $result = mysqli_query($connection, "INSERT INTO subscribe (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')");

    // once saved, redirect back to the view page
    header("Location: form-processor.php");
  }
  } else {
  // if the form hasn't been submitted, display the form
  subscribe('','','','');
  }
  ?>