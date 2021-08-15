 <?php

        // $field = '';
        function validateFirstName($field)
        {
             $validNamePattern = "/[^a-zA-Z-]/";
            if($field == "") 
                return "Please enter first name";
            else if(preg_match($validNamePattern, $field)) 
                return "Name can only contain upercase or lowercase letters";
            return "";
        }

        function validateLastName($field)
        {
            $validNamePattern = "/[^a-zA-Z-]/";
            if ($field == "")
                return "Please enter last name";
            else if (preg_match( $validNamePattern, $field))
                return "Name can only contain upercase or lowercase letters";
            return "";
        }

        function validateUserName($field)
        {
            if ($field == "")
                return "No Username was entered<br>";
            else if (strlen($field) < 5)
                return "Usernames must be at least 5 characters";
            else if (preg_match("/[^a-zA-Z0-9_-]/", $field))
                return "Only letters, numbers, - and _ in usernames";
            return "";
        }

        function validatePassword($field)
        {
            if ($field == "")
                return "Please enter password";
            else if (strlen($field) < 6)
                return "Passwords must be at least 6 characters";
            else if (!preg_match("/[a-z]/", $field) || !preg_match("/[A-Z]/", $field) || !preg_match("/[0-9]/", $field))
                return "Password must contain at least one a-z, A-Z and 0-9";
            return "";
        }

        function validateConfirmPassword($password, $confirmPassword)
        {
            if ($confirmPassword == "")
                return "Please enter password";
            else if ($password != $confirmPassword)
               return "Password and confirm password must be the same";
            return "";
        }

        function validateEmail($field)
        {
            if ($field == "")
                return "Please enter your email";
            else if (!((strpos($field, ".") > 0) && (strpos($field, "@") > 0)) || preg_match("/[^a-zA-Z0-9.@_-]/", $field))
                return "The Email address is invalid";
            return "";
        }

        function sanitizeString($string)
        {
            // if (get_magic_quotes_gpc())
            $string = stripslashes($string);
            return htmlentities($string);
        }


        function addUser($conn, $data)
        {
           $vc = "vcodestring";
           $ac = 0;
           $sql = "INSERT INTO users VALUES()";
        }

        function generateUniqueID($prefix)
        {
            return uniqid($prefix, true);

        }

       