<?php
	session_start();
	include("includes/sqlconnection.php");

	if(isset($_POST['save_pet'])){
		
		$petName = $_POST['txtpetName'];
		$petType = $_POST['txtpetType'];
		$petDescription = $_POST['txtpetDescription'];
		$petImage = $_FILES['txtpetImage']['name'];
		
		$sql ="INSERT INTO petstblcrud(petName, petType, petDescription, petImage) VALUES ('$petName', '$petType', '$petDescription', '$petImage')";
		
		if($conn->query($sql) === TRUE){
			
			move_uploaded_file($_FILES["txtpetImage"]["tmp_name"], "uploads/".$_FILES['txtpetImage']['name']);
			$_SESSION['status'] = "Pet Record Inserted Successfully";
			header('location:view.php');
			
		}else{
			
			$_SESSION['status'] = "Error: Insert Failed.....";
			header('location:view.php');

		}
		$conn->close();

	}

	if(isset($_POST['update_pet'])){
		$id = $_POST['txtid'];
		$petName = $_POST['txtpetName'];
		$petType = $_POST['txtpetType'];
		$petDescription = $_POST['txtpetDescription'];
		$petImage_new = $_FILES['txtpetImage']['name'];
		$petImage_old = $_POST['txtold_petImage'];

		if($petImage_new != ''){
			$update_image = $petImage_new;
			
		}else{
			$update_image = $petImage_old;
		}

		echo "$update_image";

		$sql = "UPDATE petstblcrud SET petName ='$petName', petType ='$petType', petDescription ='$petDescription', petImage ='$update_image' WHERE id='$id'";
		
		if($conn->query($sql)===TRUE){
			
			move_uploaded_file($_FILES["txtpetImage"]["tmp_name"], "uploads/".$_FILES['txtpetImage']['name']);
			$_SESSION['status'] = "Pet Record Updated Successfully";
			header('location:view.php');
			
		}else{
			
			$_SESSION['status'] = "Error: Update Failed.....";
			header('location:edit.php');

		}
		$conn->close();
	}

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$image = $_GET['petImage'];

		$sql = "DELETE FROM petstblcrud WHERE id='$id'";

		if($conn->query($sql) === TRUE){
			
			unlink("uploads/".$image);
			$_SESSION['status'] = "Pet Record Deleted Successfully";
			header('location:view.php');
			
		}else{
			
			$_SESSION['status'] = "Deletion Failed.....";
			header('location:view.php');

		}
		$conn->close();
	}
?>