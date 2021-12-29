<?php
include("config.php");
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $result=mysqli_query($conn,"insert into ghummakadvisitors(name,email,message) values('$name','$email','$message')");
    if($result)
    {
        echo "submitted successfully";
        header("Location: index.php ? status=success");
    }
    else{
        echo "failed to submit";
    }
}
