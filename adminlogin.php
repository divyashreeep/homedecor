<?php
error_reporting(0);

$email = $_POST['email'];
$password = $POST['password'];

$con = new mysqli("localhost","root","","logins");
if($con->connect_error)
{
    die("Failed to connect : ".$con->connect_error);
}
else{$stmt = $con->prepare("select *from users where email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0){
        $data = $stmt_result->fetch_assoc();
        if($data['password'] === $password){
            echo "<h2>Admin Login successfully</h2>";
         }else{
            echo "<h2>Admin Login sucessfull</h2>";
         }
    }else{
        echo "<h2>Admin Login sucessfull</h2>";
    }
}
?>
 go back to Home <BUTTON Type="HOME"> <a href="adminhome.html">Home </a></Button>

