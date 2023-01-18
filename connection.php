<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "aptech";


$con = new mysqli($servername,$username,$pass,$dbname);

if(!$con)
{
    echo "Not connected";
}
?>