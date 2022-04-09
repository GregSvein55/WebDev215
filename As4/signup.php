<?php
$validate = true;
$error = "";
$regex_email = "/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/";
$regex_uname = "/^[A-z]{2,}[A-z0-9]{0,}$/";
$regex_pswd  = "/([A-Za-z]+[0-9]|[0-9]+[A-Za-z])[A-Za-z0-9]*/";
$regex_dob = "/^\d{2}\/\d{2}\/\d{4}$/";
$email = "";
$uname = "";
$pswd = "";
$pswdr = "";
$date = "mm/dd/yyyy";


if(isset($_SESSION["email"]))
	{           
    header("Location: recipelist.php");
    exit(); //exit the script as soon as you redirect the page.
}


if (isset($_POST["submitted"]) && $_POST["submitted"]) {
    $email = trim($_POST["email"]);
    $uname = trim($_POST["uname"]);
    $pswd = trim($_POST["pswd"]);
    $pswdr = trim($_POST["pswdr"]);
    $date = trim($_POST["dob"]);
    

    $db = new mysqli("localhost", "gds412", "Iamgreg5", "gds412");
    if ($db->connect_error) {
        die ("Connection failed: " . $db->connect_error);
    }
    
    $q1 = "SELECT * FROM user WHERE user_email = '$email'";

    $r1 = $db->query($q1);

    // if the email address is already taken.
    if($r1->num_rows > 0) {
        $validate = false;
        echo "matches";

    } else {
        $emailMatch = preg_match($regex_email, $email);
        if($email == null || $email == "" || $emailMatch == false) {
            $validate = false;
            echo "email";
        }

        $unameLen = strlen($uname);
        $unameMatch = preg_match($regex_uname, $uname);
        if($uname == null || $uname == "" || $unameLen > 40 || $unameMatch == false) {
            $validate = false;
            echo "username";
        }
              
        $pswdLen = strlen($pswd);
        $pswdMatch = preg_match($regex_pswd, $pswd);
        if($pswd == null || $pswd == "" || $pswdLen < 8 || $pswdMatch == false) {
            $validate = false;
            echo "password";
        }

        if($pswd != $pswdr) {
            $validate = false;
            echo "confirmation";
        }

        $bdayMatch = preg_match($regex_dob, $date);
        if($date == null || $date == "" || $bdayMatch == false) {
            $validate = false;
            echo "bday";
        }
    }

    if($validate == true) {

        $q2 = "INSERT INTO user (user_name, user_email, user_password, user_DOB)
               VALUES ('$uname', '$email', '$pswd', '$date')";
        
        if ($db->query($q2) === true) {
            header("Location: recipelist.php");
            $db->close();
            exit();
        }else {
            echo "Error: " . $q2 . "<br>" . $db->error;
          }

    } else {
        echo "Email address is not available. Signup failed.";
        $db->close();
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="recipestyle.css">
    <!-- <script type="text/javascript" src="signup.js"> </script> -->
</head>
<body id="altback">
    
    <br>
    <form id="fr" action="signup.php" method="post">
    <input type="hidden" name="submitted" value="1">
        <h1 id="ct">Sign Up</h1>

        <label for="email" id="msg_email"></label><br>
        <label for="email">Email:</label><br>
        <input id="email" type="email" name="email"><br><br>

        <label for="uname" id="msg_uname"></label><br>
        <label for="uname">Username:</label><br>
        <input id="uname" type="text" name="uname"><br><br>

        <label for="pswd" id="msg_pswd"></label><br>
        <label for="pswd">Password:</label><br>
        <input id="pswd" type="password" name="pswd"><br><br>

        <label for="pswdr" id="msg_pswdr"></label><br>
        <label for="pswdr">Confirm Password:</label><br>
        <input id="pswdr" type="password" name="pswdr"><br><br>

        <label for="dob" id="msg_dob"></label><br>
        <label for="dob">Date of Birth: (mm/dd/yyyy)</label><br>
        <input id="dob" type="text" name="dob"><br><br>

        <label id="photo_msg" class="err_msg"></label>
        <label for="fileToUpload">Avatar: </label> <br>
        <input type="file"  name="fileToUpload" id="fileToUpload"><br><br>


        <button type="submit" class="button">Sign Up</button>
        <a href="http://www2.cs.uregina.ca/~gds412/as1/login.php" style="color: #FDD4C9;">Log In</a>
    </form>

    
    <!-- <script type="text/javascript" src="signup-r.js"></script> -->
</body>
</html>