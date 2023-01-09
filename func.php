<?php
include 'config.php';

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$image = $_POST['image'];
	$description = $_POST['description'];
}

// Add category

if (isset($_POST['submit'])) {
	$sql = ("INSERT INTO `category`(`name`, `image`, `description`) VALUES(?,?,?)");
	$query = $pdo->prepare($sql);
	//upload image - add
	if(is_uploaded_file($_FILES['myfile']['tmp_name']) && $image === "") {
		move_uploaded_file($_FILES['myfile']['tmp_name'],		
		"./images/".$_FILES['myfile']['name']);
		$query->execute([$name, "./images/" . $_FILES['myfile']['name'], $description]);	
	} else {
	//link image
		$query->execute([$name, $image, $description]);	
	}
}

// Read DB

$sql = $pdo->prepare("SELECT * FROM `category`");
$sql->execute();
$result = $sql->fetchAll();

// UPDATE category in DB

if (isset($_POST['edit_submit'])) {
	$edit_name = $_POST['edit_name'];
	$edit_image = $_POST['edit_image'];
	$edit_description = $_POST['edit_description'];
	$get_id = $_GET['id'];
	$sqll = "UPDATE category SET name=?, image=?, description=? WHERE id=?";
	$querys = $pdo->prepare($sqll);
	//upload image - add
	if(is_uploaded_file($_FILES['edit_myfile']['tmp_name']) && $edit_image === "" ) {
		move_uploaded_file($_FILES['edit_myfile']['tmp_name'],		
		"./images/".$_FILES['edit_myfile']['name']);
		$querys->execute([$edit_name, "./images/" . $_FILES['edit_myfile']['name'], $edit_description, $get_id]);
	} else {
	//link image
		$querys->execute([$edit_name, $edit_image, $edit_description, $get_id]);
	}
	header('Location: '. $_SERVER['HTTP_REFERER']);
}

// Delete category from DB

if (isset($_POST['delete_submit'])) {
	$get_id = $_GET['id'];
	$sql = "DELETE FROM category WHERE id=?";
	$query = $pdo->prepare($sql);
	$query->execute([$get_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}

// filter
if (isset($_POST['filter'])) {
	$filter = $_POST['filter'];
	$sql = "SELECT * FROM `category` WHERE name LIKE '%$filter%'";
	$query = $pdo->prepare($sql);
    $query->execute();
	$result = $query->fetchAll();
}