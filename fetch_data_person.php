<?php
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "new_hotwax");

$partyId = $_POST['partyId'];

$query = "SELECT * FROM `person` Where `partyId` = '$partyId'";
$result = mysqli_query($conn,$query);
//iterate over all the rows
while($row = mysqli_fetch_assoc($result)){
    //iterate over all the fields
    foreach($row as $key => $val){
        //generate output
        echo $key . ": " . $val . "<BR />";
    }
}
echo json_encode(array('response' => "Success"));
mysqli_close($conn);
?>