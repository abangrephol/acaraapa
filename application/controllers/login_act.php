<?php 
if (isset($_POST['user']) && isset($_POST['pass'])) {
$user="";
$pass="";
// this variable is anything you enter in the uname and password fields
$user=$_POST['user'];
$pass=$_POST['pass'];
// authenticate
if (($user=="Enter") && ($pass=="12345")) echo "Access Granted";
else die("Access Denied");
}
?>