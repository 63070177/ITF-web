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
$Total = $_POST['Total'];


$sql = "INSERT INTO lab (Product , Price , Discount , Total) VALUES ('$Product', '$Price', '$Discount' , '$Total')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
