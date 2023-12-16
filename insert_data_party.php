<?php
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "new_hotwax");

$PARTY_ID = $_POST['PARTY_ID'];
$PARTY_TYPE_ENUM_ID = $_POST['PARTY_TYPE_ENUM_ID'];

$query = "INSERT INTO `party` Values('$PARTY_ID','$PARTY_TYPE_ENUM_ID')";
mysqli_query($conn,$query);
echo json_encode(array('response' => "Success"));
mysqli_close($conn);
?>