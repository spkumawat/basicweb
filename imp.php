<?php

$conn =mysqli_connect("localhost","root","", "student");
 $first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];


$sql = "INSERT INTO  classs(first_name, last_name) VALUES ('$first_name' , '$last_name')";

if (!mysqli_query($conn,$sql)) {
echo "data has not saved";
}
else {
echo "data is a saved successfully";

}
?>