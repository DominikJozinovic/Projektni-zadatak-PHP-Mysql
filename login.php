<?php

session_start();
    if(isset($_POST['submit'])){
        login();
    } 

function login(){
    include ("dbconn.php");
    
include("message.php");

    $query  = "SELECT * FROM users";
    $query .= " WHERE email='" .  $_POST['email'] . "'";
  
    $result = @mysqli_query($MySQL, $query);
    $row = @mysqli_fetch_array($result);
    
    if (password_verify($_POST['password'], $row['password']== $password)) {
        
        $_SESSION['users']['valid'] = 'true';
        $_SESSION['users']['id'] = $row['id'];
        $_SESSION['users']['firstname'] = $row['firstname'];
        $_SESSION['users']['lastname'] = $row['lastname'];
        $_SESSION['users']['email'] = $row['email'];
        $_SESSION['users']['country'] = $row['country'];
        $_SESSION['message'] = '<p>Welcome, ' . $_SESSION['users']['firstname'] . ' ' . $_SESSION['users']['lastname'] . '</p>';
        header( "refresh:0;url=index.php?menu=7" );

    }

    else {
        unset($_SESSION['users']);
        $_SESSION['message'] = '<p>Wrong email or password!</p>';
        message(2, $_SESSION['message']);
        unset($_SESSION['message']);
    }

}

?>