<?php
function connect(){
	$con=mysqli_connect('localhost','root','','carel');
	if(!$con){
		echo "Connection Error: ".mysqli_connect_error();
	}
	return $con;

}

function getadmins(){
	$con=connect();
	$sql='SELECT * from administrateur';
	$result=mysqli_query($con,$sql);
	$admins=mysqli_fetch_all($result,MYSQLI_ASSOC);
	return $admins;
}

function getstations(){
	$con=connect();
	$sql='SELECT * from stations';
	$result=mysqli_query($con,$sql);
	$products=mysqli_fetch_all($result,MYSQLI_ASSOC);
	return $products;
}

?>