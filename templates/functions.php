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

function stationdespo($data){
	$con=connect();
	$id=$data['id'];
	$despo=$data['despo'];
	$sql="UPDATE stations SET desponible='$despo' where id_stations='$id'";
	$result=mysqli_query($con,$sql);
	return mysqli_fetch_all($result,MYSQLI_ASSOC);	
}

function addcustomer($data){
	$con=connect();
	$fname=$data['First_Name'];
	$lname=$data['Last_Name'];
	$email=$data['Email_Address'];
	$pass=$data['password'];
	$sql="insert into customers(first_name,last_name,email,password) values ('$fname','$lname','$email','$pass')";
	$result=mysqli_query($con,$sql);
	
}

function connectuser($data){
	$con=connect();
	$email=$data['Email_Address'];
	$pass=$data['password'];
	$sql="select * from customers where email='$email' and password='$pass'";
	$result=mysqli_query($con,$sql);
	return mysqli_fetch_all($result,MYSQLI_ASSOC);	
	
}

?>