<?php

$con=mysqli_connect("localhost","root","","testing2");

if(mysqli_connect_error()){
    echo"<script('cannot connect to the databass');</script>";
    exit();
}
?>