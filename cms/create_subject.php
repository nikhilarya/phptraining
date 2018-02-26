<?php	include('includes/connection.php'); ?>
<?php 	include('includes/functions.php'); ?>

<?php 

	$menu_name = $_POST['menu_name'];
	$position = $_POST['position'];
	$visible = $_POST['visible'];


?>
<?php
	$query = "INSERT INTO subjects ( menu_name, position, visible )
				 VALUES ('$menu_name', '$position', '$visible' )";
		$result = $conn->query($query);
		if ($result) {
			# code...
			//success
			//header("Location": content.php);
		}
		else {
			echo "failed";
		}

		header("Refresh:3;url=new_subject.php");

?>

<?php $conn->close(); ?>