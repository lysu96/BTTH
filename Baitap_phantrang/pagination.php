<?php
// Below is optional, remove if you have already connected to your database.
$mysqli = mysqli_connect('localhost', 'root', '', 'phan_trang');

// Get the total number of records from our table "students".
$total_pages = $mysqli->query('SELECT * FROM students')->num_rows;

//echo "biến tobal_pages: ".$total_pages;

// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

// Number of results to show on each page.
$num_results_on_page = 5;

if ($stmt = $mysqli->prepare('SELECT * FROM students ORDER BY name LIMIT ?,?')) {
	// Calculate the page to get the results we need from our table.
	//echo "<pre>";print_r($stmt);
	$calc_page = ($page - 1) * $num_results_on_page;
	$stmt->bind_param('ii', $calc_page, $num_results_on_page);
	$stmt->execute(); 

	//echo "<pre>";print_r($stmt);
	// Get the results...
	$result = $stmt->get_result();
	//echo "<pre>";print_r($result);
	?>
	<?php require_once 'html.php'; ?>
	<?php
	$stmt->close();
}
?>