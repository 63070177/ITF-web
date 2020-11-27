<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'garthy.mysql.database.azure.com', 'it63070177@garthy', 'JSRhsq44', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$Product = $_POST['Product'];
$Price = $_POST['Price'];
$Discount = $_POST['Discount'];
$Totalnew = $_POST['Price'] * ((100 - $_POST['Discount'])/100);

$sql = "UPDATE lab SET Price='$Price', Discount='$Discount', Total='$Totalnew' WHERE Product='$Product'";


if (mysqli_query($conn, $sql)) {
    echo "Edit successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>