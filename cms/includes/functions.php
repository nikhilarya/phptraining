<?php
	//all functions
	//include('connection.php');
	function get_subject_by_id($subject_id) {
		
		$sql = 'SELECT * FROM subjects WHERE id = '.$subject_id.' LIMIT 1';

		$result = $conn->query(sql);
		
		$subject = $result->fetch_array();
		return $subject;

	}

?>