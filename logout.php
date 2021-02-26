<?php
session_start();
include('dbConfig.php');

if(isset($_GET['logout']))
{
	session_destroy();
	header("location:login.php");
}
?>