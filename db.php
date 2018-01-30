

<?php
$connection = mysqli_connect("localhost", "root", "",'ajax'); // Establishing Connection with 
$name=$_POST['fname'];
var_dump($name);
$query = mysqli_query($connection,"insert into user(name) values ('$name')");
if(!$query){
	echo "query not executed";
}
echo "Form Submitted Succesfully";

if(isset($_POST['display'])){
	$query1 = mysqli_query($connection,"select * from user");
	if(!$query1){
		echo "query error";
	}
	if(mysqli_num_rows($query1)>0){
		while ($row = mysqli_fetch_assoc($query1)) {
			echo $row['name'] . "<br>";
		}
	}else{
		echo "no data";
	}
}


?>


