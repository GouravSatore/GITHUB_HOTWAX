<?php
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "new_hotwax");

$partyId = $_POST['partyId'];
$salutation = $_POST['salutation'];
$firstName = $_POST['firstName'];
$middleName = $_POST['middleName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$birthDate = $_POST['birthDate'];
$maritalStatusEnumId = $_POST['maritalStatusEnumId'];
$employmentStatusEnumId = $_POST['employmentStatusEnumId'];
$OCCUPATION = $_POST['OCCUPATION'];

$queryParty = "INSERT INTO `party` VALUES ('$partyId', 'PtyPerson')";
mysqli_query($conn, $queryParty);

$queryPerson = "INSERT INTO `person` VALUES('$partyId','$salutation','$firstName','$middleName','$lastName','$gender','$birthDate','$maritalStatusEnumId','$employmentStatusEnumId','$OCCUPATION')";
mysqli_query($conn, $queryPerson);
echo json_encode(array('response' => "Success"));
mysqli_close($conn);

?>