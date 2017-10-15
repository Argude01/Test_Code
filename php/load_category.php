<?php
require_once 'connection.php';

function getCategories(){
	$mysqli = getConnection();
	$query = 'SELECT * FROM `categories`';
	$result = $mysqli->query($query);
	$categories = '<option value="0"> Select a category </option>';
	while($row = $result->fetch_array(MYSQLI_ASSOC)){
		$categories .= "<option value='$row[idCategory]'> $row[Category] </option>";
	}
	return $categories;
}

echo getCategories();

