<?php
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "new_hotwax");

$partyId = $_POST['partyId'];

$query = "SELECT * FROM `person` Where `partyId` = '$partyId'";
mysqli_query($conn,$query);
echo json_encode(array('response' => "Success"));
mysqli_close($conn);
?>