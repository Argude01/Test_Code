<?php 
require_once 'connection.php';

function getBrands(){
  $mysqli = getConnection();
  $idProduct = $_POST['id'];
  $query = "SELECT * FROM `brands` WHERE idProduct = $idProduct";
  $result = $mysqli->query($query);
  $brands = '<option value="0"> Select a brand </option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $brands .= "<option value='$row[idBrand]'>$row[Brand]</option>";
  }
  return $brands;
}

echo getBrands();
