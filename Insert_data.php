<?php
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "new_hotwax");

$partyId = $_POST['partyId'];
$salutation = $_POST['salutation'];
$firstName = $_POST['firstName'];
$middleName = $_POST['middleName'];
$lastName = $_POST['gender'];
$gender = $_POST['birthDate'];
$maritalStatusEnumId = $_POST['maritalStatusEnumId'];
$employmentStatusEnumId = $_POST['employmentStatusEnumId'];
$OCCUPATION = $_POST['OCCUPATION'];

$query = "INSERT INTO `person` VALUES('$partyId','$salutation','$firstName','$middleName','$lastName','$gender','$maritalStatusEnumId','$employmentStatusEnumId','$OCCUPATION')";
mysqli_query($conn, $query);
echo json_encode(array('response' => "Success"));
mysqli_close($conn);

?>