<?php

if(isset($_POST['submit'])) {
  $name= $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom=$_POST['mail'];
  $message=$_POST['message'];

  $mailTo="pratikpawar45678@gmail.com";
  $headers="From: ".$mailFrom;
  $txt="You have received an email from ".$name.".\n\n".$message;

  if(mail($mailTo, $subject, $txt, $headers)){
      echo "<p>sent successfully!<p> ";
  }
  else {
    echo "something went wrong";
  }
}

?>
