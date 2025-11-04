<?php
session_start(); 
if(
   !isset($_SESSION['admin'])
){
    header( header: 'Location:http://localhost/blog/auth/login.php');
}

?>