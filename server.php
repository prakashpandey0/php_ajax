<?php

include 'db.php';

if(isset($_POST['done'])){
	$username = mysqli_escape_string($_POST['username']);
	var_dump($username);
	mysqli_query($conn,"insert into user (name) values ('{$username}')");
}

?>