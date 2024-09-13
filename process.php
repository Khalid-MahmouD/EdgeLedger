<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "khaledmahmo827@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];    
    //send email
    mail($admin_email, "New Form Submission", 'Hi there' . ' - ' . $phone, "From:" . $email);
    
    header('Location: http://127.0.0.1:5501/success.html ');
  }