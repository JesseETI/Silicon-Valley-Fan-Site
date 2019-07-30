<?php

  $my_email = "jesseemamalie2@gmail.com";
  $name;
  $post_email;
  $website;
  $rating;
  $comment;
  $header;
  $subject = "Silicon Valley Fan Site";
  $message;

  if (isset($_POST['submit'])) { //checks to see if submit button was sent to array $_POST

      $name = $_POST['name'];
      $post_email = $_POST['email'];
      $website = $_POST['website'];
      $rating = $_POST['rating'];
      $comment = $_POST['opinion'];

      if (preg_match('/^[a-zA-Z ]*$/', $name) && filter_var($post_email, FILTER_VALIDATE_EMAIL)) {


        $header = "FROM: ". $post_email;
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/plain; charset=iso-8859-1\r\n";
  		$header .= "X-Priority: 3\r\n";
  		$header .= "X-Mailer: PHP". phpversion() ."\r\n";
        $message = "Name: " . $name . "\nEmail: " . $post_email . "\nWebsite: " . $website .
         "\nRating: ". $rating . "\nComment: " . $comment;

        if(mail($my_email, $subject, $message, $header)) {
        echo "Thank You " .$name . " for submitting your opinion! " . "<a href='../index.html'>Click here to return to website</a>";
        }
        else {
          echo $name . ", the email failed to send. Please try again. " . "<a href='../index.html'>Click here to return to website</a>";
        }

      }
      else {
        echo $name . ", you seemed to have entered some information incorrectly. Please try again. " . "<a href='../index.html'>Click here to return to website</a>";
      }

  }

 ?>
