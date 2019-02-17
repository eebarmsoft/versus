<?php
$servername = "localhost";
$username   = "root";
$password = "";
$dbname = "doste";    

$con = mysqli_connect($servername,$username,$password,$dbname);


if($con)
{
    echo "";
}
else
{
    die("connection faild because ".mysqli_connect_error());
}

?>