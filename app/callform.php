<?php
$errors         = array();  	//array to hold validation errors
$data 			= array(); 		//array to pass back data
//required vars
if (empty($_GET['name']))
	$errors['name'] = 'Name is required.';
if (empty($_GET['phone']))
	$errors['phone'] = 'Phone is required.';
if (empty($_GET['from']))
	$errors['from'] = 'From location is required.';
if (empty($_GET['where']))
	$errors['where'] = 'Where location is required.';
//response
//packing errors
if ( ! empty($errors)) {
	// if there are items in our errors array, return those errors
	$data['success'] = false;
	$data['errors']  = $errors;
} else {
	//processing and packing data
	//TBA
	$data['success'] = true;
	$data['message'] = 'Success!';
}
//respond json
echo json_encode($data);
?>