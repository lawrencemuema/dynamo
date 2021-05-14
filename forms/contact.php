<?php
  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'lawiholmz@gmail.com';


$toEmail = "lawiholmz@gmail.com";
$mailHeaders = "From: " . $_POST["name"] . "<". $_POST["email"] .">\r\n";
if(mail($toEmail,  $_POST["Message"], $mailHeaders)) {
print "<p class='success'>Contact Mail Sent.</p>";
} else {
print "<p class='Error'>Problem in Sending Mail.</p>";
}
/*

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];

*/
  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */
/*
  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 5);

  echo $contact->send();*/
?>
