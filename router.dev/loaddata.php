<?php

$name = $_POST['user_name'];

$host = 'localhost';
$user = 'recon_qss';
$pass = 'recon_qss';

mysql_connect($host, $user, $pass);

mysql_select_db('users');

$selectdata = "SELECT username,email FROM users ORDER BY id DESC";

$query = mysql_query($selectdata);

while($row = mysql_fetch_array($query))
{

	echo "<p>".$row['username']." ".$row['email']."</p>";

}


?>