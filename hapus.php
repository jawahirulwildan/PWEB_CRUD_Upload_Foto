<?php
// Include the database connection file
require_once("config.php");

// Get id parameter value from URL
$id = $_GET['id'];

// Delete row from the database table
$result = mysqli_query($db, "DELETE FROM calon_siswa WHERE id = $id");

// Redirect to the lis-siswa.php
header("Location:list-siswa.php");