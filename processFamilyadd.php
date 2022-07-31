<?php
//connecting database
include('connection.php');

if (!isset($_POST['familyData'])) {
    echo "fill up";
    exit();
} 

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$citizenshipNo=$_POST["citizenshipNo"];
$dob = $_POST["DOB"];
$insuranceNo = $_POST["insuranceNo"];
$address = $_POST["address"];
$fsp = $_POST["FSP"];
$fsd = $_POST["FSD"];
$billNo = $_POST["billNumber"];
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