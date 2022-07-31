<?php
//connecting database
include('connection.php');

if (!isset($_POST['inFamilyData'])) {
    echo "fill up";
    exit();
} 

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$citizenshipNo=$_POST["citizenshipNo"];
$dob = $_POST["dob"];
$iNo = $_POST["iNo"];
$fsp = $_POST["FSP"];
$gender = $_POST["gender"];

    
 $sql= "INSERT INTO customer (firstName, lastName, mobile, email , citizenshipNo, dob , insuranceNo , address , fsp , fsd ,  billNo, gender)
        VALUES ('$firstName','$lastName', '$mobile', '$email','$citizenshipNo', '$dob','$insuranceNo','$address','$fsp','$fsd','$billNo', '$gender')";


try{
    $resultSet = mysqli_query($connection, $sql);
        $numRows = mysqli_num_rows($resultSet);
        if ($numRows > 0) {
            echo "Successful";
        } else {
            echo "Failed";
        }
}catch(Exception $e){
    echo $e;
}
exit();
?>