

<?php
require_once 'dblogin.php';
require_once 'functions.php';
require_once 'Database.php';

// connect to db
$connection  = new mysqli($hn, $un, $pw, $db);
if ($connection->connect_error) die("Something well wront");


$firstName = $lastName = $email = $password = $confirmPassword = $vcode = "";
$userData = [];
// $rmdb = new Database();


// when form is submitted
if ($_SERVER['REQUEST_METHOD'] = "POST") {
    $fail = "";
    $fail .= validateFirstName($_POST['firstName']);
    $fail .= validateLastName($_POST['lastName']);
    $fail .= validateEmail($_POST['email']);
    $fail .= validatePassword($_POST['password']);
    $fail .= validateConfirmPassword( $_POST['password'], $_POST['confirmPassword']);


 // $_POST['firstName'] != "" && $_POST['lastName'] != "" && $_POST['email'] != "" && $_POST['password'] != 

    if ($fail === "") {

        $firstName = sanitizeString($_POST['firstName']);
        $lastName = sanitizeString($_POST['lastName']);
        $email = sanitizeString($_POST['email']);
        $password = sanitizeString($_POST['password']);
        $hash = password_hash($password, PASSWORD_DEFAULT);

        // capitalize first letter
        $firstName = strtolower($firstName);
        $firstName= ucfirst($firstName);
        $lastName = strtolower($lastName);
        $lastName = ucfirst($lastName);

        $email = strtolower($email);
        
        // generate unique id
        $userId = generateUniqueID("user");
        sleep(0.3);
        $vcode = generateUniqueID("vkey");

        // insert data into table
        $q = "INSERT INTO users VALUES('', '$userId', '$firstName', '$lastName', '$email', '$hash', 0, '$vcode')";
        $r = $connection->query($q);
        if (!$r)
            echo "Failed to insert data";
        else
            {
                echo "Data submited! <br>";
                echo "user id: $userId<br>";
                echo "user vcode: $vcode<br>";
               
                // header("Location: index.php");
            }
    }
    else 
     {
        // sleep(0.5);
        echo "form error";
        echo $fail;
        sleep(3);
        header("Location: reg.php");
    }
}
else
{
    header("Location: error404.php");

}


?>