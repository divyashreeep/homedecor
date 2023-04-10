<?php 
function  check_login($con)
{
    if(isset($_SESSION['email']))
    {
        $id = $_SESSION['email'];
        $query = "select * from users where email = '$email' limti 1";
         
        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);

            return $user_data;
        }
    }

    //redirect to login
    header("location: login.php");
    die;
}

function random_bytes($length)
{
    $text = "";
    if($length < 20)
    {
        $length = 20;
    }
    $len = rand(19,$length); {
    for($i=0; $i < $len; $i++)
    # code...
     $text .= rand(0,9);
}
return $text;    
}

}