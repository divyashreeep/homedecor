<?php
//error_reporting(0);
if ( isset($_POST['email'], $_POST['password'])){
$email = $_POST['email'];
$password = $_POST['password'];

}
 //database coonection
 $conn = new mysqli('localhost', 'root','','admin');
 if($conn->connect_error)
 {
    die('Connection Failed : '.$conn->connect_error);
 }
 else{
    $stmt = $conn->prepare("INSERT INTO test( email, password)
     vALUES(?, ?)");
    $stmt->bind_param("ss",$email, $password);
    $email = ' ';
$password = ' ';
    $stmt->execute();
    echo "Admin login successfull...";
$stmt->close();
$conn->close();
 
 }
 ?>
 go back to Home <BUTTON Type="HOME"> <a href="adminhome.html">Home </a></Button>