<?php

$conn =mysqli_connect("localhost","root","", "student");
 $name = $_POST['name'];
$password = $_POST['password'];


$sql = "INSERT INTO  class(name, password) VALUES ('$name' , '$password')";

if (!mysqli_query($conn,$sql)) {
echo "data has not saved";
}
else {
echo "data is a saved successfully";
$stmt ->close();
$conn ->close();
}
?>