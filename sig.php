<?php
error_reporting(1);
$name=$_POST['u'];
$password=$_POST['v'];
$con=new mysqli('localhost','root','','log');
if(isset($_POST['Submit']))
{
$sql="INSERT INTO lo(username,password)VALUE('$name','$password')";
$con->query($sql);
echo "inserted";
}
?>