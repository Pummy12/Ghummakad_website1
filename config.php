<?php
$servername="localhost";
$username="root";
$password="";
$database="ghummakad_users";
$conn=mysqli_connect($servername,$username,$password,$database);
if($conn)
{
    echo "connected successfully";
}
else{
    die("error".mysqli_connect_error());
}
?>