<?php
session_start();
include("connection.php");
include("functions.php");
if($_SERVER['REQUEST_METHOD'] == "post")
{
    //something was posted
    $email = $_POST['email'];
    $password  = $_POST['password'];

    if(!empty($email) && !empty($password) && !is_numeric($email))
    {
        //save to database
        $email = random_byte(20);
        $query = "insert into users (firstname,lastname,email,password) values ('$firstname','$lastname','$email','$password')";

        mysqli_query($query);

        header("Location: login.php");
        die;

    }else
    {
        echo "please enter the valid information";
    }
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="C:\Users\Deepak Prasad\source\repos\Registerform1.css" />
</head>
<body>
    <h1>Registration Form</h1>
    <p>Please fill out this form with the required information</p>
    <form method="post" action="http://localhost/regis.php/database1">
        <fieldset>
            <label for="first-name">Enter Your First Name: <input id="first-name" name="first-name" type="text" required /></label>
            <label for="last-name">Enter Your Last Name: <input id="last-name" name="last-name" type="text" required /></label>
            <label for="email">Enter Your Email: <input id="email" name="email" type="email" required /></label>
            <label for="password">Create a New Password: <input id="password" name="password" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required /></label>
        </fieldset>
        <fieldset>
            <label for="user-account"><input id="user-account" type="radio" name="account-type" class="inline" />User Account</label>
            <label for="admin-account"><input id="admin-account" type="radio" name="account-type" class="inline" />Admin Account</label>
            <label for="terms-and-conditions" name="terms-and-conditions">
                <input id="terms-and-conditions" type="checkbox" required name="terms-and-conditions" class="inline" /> I accept the <a href="">terms and conditions</a>
            </label>
        </fieldset>
        <fieldset>
            <label for="referrer">
                How did you hear about us?
                <select id="referrer" name="referrer">
                    <option value="">(select one)</option>
                    <option value="1">News</option>
                    <option value="2"> YouTube Channel</option>
                    <option value="3">Advertise</option>
                    <option value="4">Other</option>
                </select>
            </label>
        </fieldset>
        <input type="submit" value="Register" />
    </form>
</body>
</html>