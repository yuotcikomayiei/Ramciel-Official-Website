<?php
require_once 'dblogin.php';
require_once 'functions.php';


$connection  = new mysqli($hn, $un, $pw, $db);
if ($connection->connect_error) die("Something well wront");


$username = $password = "";

if($_SERVER['REQUEST_METHOD'] = "POST")
{
    $fail = "";
    $fail .= validatePassword($_POST['password']);
    $fail .= validateEmail($_POST['username']);

    // if login credentials are correct
    if($fail === "")
    {
        $username = sanitizeString($_POST['username']);
        $password = sanitizeString($_POST['password']);

        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $connection->query($sql);
       
        // if doesn't exist, redirect to regsiter page
        if(!$result) 
       {
            echo "User not found";
            header("Location: reg.php");
       } 
        else  // login user
        {
            $row = $result->fetch_array(MYSQLI_ASSOC);
          
            // check if password is correct
            if(password_verify($password, $row['password']))
            {
                echo "Login successful";
            }
            else{ // incorrect password
                echo "Invalid username or password";
            } 
        }
    }
    else // something is wrong login details
    {
        echo "Error occured<br> $fail";
        header("Location: form.html");
    }
}