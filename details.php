<?php
session_start();

if(isset($_POST['station_image'])){
	
	if($_POST['action']=='add'){
		if(isset($_SESSION['details'])){
			unset($_SESSION['details']);
		}
		$item_array = array(
				'station_image' => $_POST['station_image'],
				'station_name' => $_POST['station_name'],
				'station_adress' => $_POST['station_adress'],
				'station_description' => $_POST['station_description']

		);
		$_SESSION['details'][0]=$item_array;
	}
		

}


?> 
