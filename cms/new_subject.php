<?php	include('includes/connection.php'); ?>
<?php 	include('includes/functions.php'); ?>
<?php
	  if (isset($_GET['subj'])) {
	  	# code...
	  	$sel_subj = $_GET['subj'];
	  	$sel_page = "";

	 }
	  elseif (isset($_GET['page'])) {
	  	# code...
	  	$sel_subj = "";
	  	$sel_page = $_GET['page'];
	  }
	  else {

	  	$sel_subj = "";
	  	$sel_page = "";
	  }
	  //   $sql1 = 'SELECT * FROM subjects WHERE id = '.$sel_subj.' LIMIT 1';
	 	//  //echo $sql1;
	 	// //$sel_subject = get_subject_by_id($sel_subj);
	    
	  //   $result = $conn->query($sql1);
	  //  	// echo "ss";
	  //   $sel_subject = $result->fetch_array();
	  //   //echo "pp";
		
		 //$subjectarray = $result->fetch_array();

?>	 

<?php	include('includes/header.php'); ?>	
	<table id="structure">
			<tr>
				<td id="navigation">
						<ul class="subjects">
					<?php
						$sql =  'SELECT * FROM subjects';
						//echo $sql;
					 	$subject_set  = $conn->query($sql);
					 	if (!$subject_set) {
					 		# code... 
					 		//echo "ss";
					 		// REMEMBER to be changed ///////////////
					 		//die("Database query failed: " . mysql_error());
					 	}

					 	while ($subject = $subject_set->fetch_array()) {
					 		# code...

					 		echo "<li><a href=\"content.php?subj=" . urlencode($subject['id']) . "\">{$subject['menu_name']}</a></li>";
					 		echo "<ul class=\"pages\">";

					 		$sql = "SELECT * FROM pages WHERE subject_id = {$subject['id']}";
					 		$page_set = $conn->query($sql);
					 		
						 	if (!$page_set) {
						 		# code...
						 		// REMEMBER to be changed ///////////////
						 		//die("Database query failed: " . mysql_error());
						 	}
						 	
						 	while ($page = $page_set->fetch_array()) {
						 		# code...
						 		echo "<li><a href=\"content.php?page=" . urlencode($page['id']) . "\">{$page['menu_name']}</a></li>";
						 	}
						 		echo "</ul>";
					 	}

					?>
						</ul>
						
				</td>
				<td id="page">
					<h2>Add Subject</h2>
						<form action="create_subject.php" method="post">
							<p>Subject name:
								<input type="text" name="menu_name" value="" id="menu_name" />
							</p>
							<p>Position:
								<input type="text" name="position">
									<?php
										// $sql1  = 'SELECT * FROM subjects';

										// $result = $conn->query($sql1);
										// $data = $result->fetch_array();
										

										// for ($counter=1; $counter <= $count+1 ; $counter++) { 
										// 	# code...
										// 	echo "<option value=\"{$count}\">{$counter}</option>";
										// }

									?>
									
								</input>
							</p>
							<?php  ?>
							<p>Visible:
								<input type="radio" name="visible" value="0" /> No
								<input type="radio" name="visible" value="1" /> Yes
							</p>
								<input type="submit" value="Add Subject" />
						</form>
					<br />
					<a href="content.php">Cancel</a>
				</td>
			</tr>
		</table>	

<?php 	include('includes/footer.php'); ?>
