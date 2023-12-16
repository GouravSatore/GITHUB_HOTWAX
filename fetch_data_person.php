<?php
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "new_hotwax");

$query = "SELECT * FROM `person`";
mysqli_query($conn,$query);
echo json_encode(array('response' => "Success"));
mysqli_close($conn);
?>