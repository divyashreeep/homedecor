
<?php
//error_reporting(0);
if ( isset($_POST['firstname'], $_POST['lastname'], $_POST['email'],$_POST['password'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lasttname'];
$email = $_POST['email'];
$password = $_POST['password'];
}
 //database coonection
 $conn = new mysqli('localhost', 'root','','logins');
 if($conn->connect_error)
 {
    die('Connection Failed : '.$conn->connect_error);
 }
 else{
    $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, password)
     vALUES(?, ?, ?, ?)");
    $stmt->bind_param("ssss",$firstname, $lastname, $email, $password);
    $firstname = ' ';
$lastname = '';
$email = '';
$password = ' ';
    $stmt->execute();
    echo "<h2>registration successfully...</h2>";
$stmt->close();
$conn->close();
 
 }
 ?>
 go back to Home <BUTTON Type="HOME"> <a href="homepage3.html">Home </a></Button>