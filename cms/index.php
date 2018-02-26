 
 <?php 

 include("includes/connection.php"); 
 // include("includes/functions.php"); 

	// if (isset($_GET['subj'])) {
	// 	# code...
	// 	$sel_subj = $_GET['subj'];
	// 	$sel_page = "";
	// }
	// elseif (isset($_GET['page'])) {
	// 	# code...
	// 	$sel_subj = "";
	// 	$sel_page = $_GET['page'];
	// }
	// else {
	// 	$sel_subj = "";
	// 	$sel_page = "";
	// }
	// $sel_subject = get_subject_by_id($sel_subj);




 echo "hello world";
  include("includes/header.php");
		<table id="structure">
			<tr>
				<td id="navigation">
						<ul class="subjects">
					
						$sql =  "SELECT * FROM subjects";
					 	$subject_set  = $conn->query($sql);
					 	if (!$subject_set) {
					 		# code... 
					 		// REMEMBER to be changed ///////////////
					 		//die("Database query failed: " . mysql_error());
					 	}

					 	while ($subject = mysql_fetch_array($subject_set)) {
					 		# code...
					 		echo "<li><a href=\"content.php?subj=" . urlencode($subject["id"]) . "\">{$subject["menu_name"]}</a></li>";
					 		echo "<ul class=\"pages\">";

					 		$sql = "SELECT * FROM pages WHERE subject_id = {$subject["id"]}";
					 		$page_set = $conn->query($sql);
					 		
						 	if (!$page_set) {
						 		# code...
						 		// REMEMBER to be changed ///////////////
						 		//die("Database query failed: " . mysql_error());
						 	}
						 	
						 	while ($page = mysql_fetch_array($page_set)) {
						 		# code...
						 		echo "<li><a href=\"content.php?page=" . urlencode($page["id"]) . "\">{$page["menu_name"]}</a></li>";
						 	}
						 		echo "</ul>";
					 	}
					
						</ul>
				</td>
				<td id="page">
					<h2><?php echo $sel_subject['menu_name']; ?></h2>
					<br />
					<?php echo $sel_page; <br />
				</td>
			</tr>
		</table>
require("includes/footer.php"); 
