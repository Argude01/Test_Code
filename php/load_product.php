<?php 
require_once 'connection.php';

function getProducts(){
  $mysqli = getConnection();
  $idCategory = $_POST['id'];
  $query = "SELECT * FROM `products` WHERE idCategory = $idCategory";
  $result = $mysqli->query($query);
  $products = '<option value="0"> Select a product </option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $products .= "<option value='$row[idProduct]'>$row[Product]</option>";
  }
  return $products;
}

echo getProducts();
