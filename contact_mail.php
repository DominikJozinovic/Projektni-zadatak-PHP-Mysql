<?php

if(isset($_POST['submit'])){
    sendMail();
} 

function sendMail(){

        $to = "dominik.jozinovic@hotmail.com"; 
        $from = $_POST['email']; 
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
     
      
        $sadrzaj = $_POST['sadrzaj'];
        $message = $fname . " " . $lname . "\n\n" . $sadrzaj;

        $headers = "Od:" . $from;
        mail($to,$message,$headers);

        $_SESSION['message'] = '<p>Message sent!</p>';
        message(1, $_SESSION['message']);
        unset($_SESSION['message']);

}

?>