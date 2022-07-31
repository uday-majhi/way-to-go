<?php
//connecting database
include('connection.php');

if (!isset($_POST['submit'])) {
 
    echo "</br>";
    //collecting form data
    $first_name = $_POST["firstName"];
    $last_name = $_POST["lastName"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $citizenship_no=$_POST["citizenshipNo"];
    $DOB = $_POST["DOB"];
    $insurance_no = $_POST["insuranceNo"];
    $address = $_POST["address"];
    $FSP = $_POST["FSP"];
    $FSD = $_POST["FSD"];
    $bill_number = $_POST["bill_number"];
    $gender = $_POST["gender"];

    
    //number validation
    if (!is_numeric($mobile)) {
        echo "<script>
        alert(\"Please Enter Only Number\")
        window.location=\"familyadd.php\";
    </script>";
    }
    //length validationg
    if (strlen($mobile) != 10) {
        echo "<script>
        alert(\"Enter 10 Digits Number \");
        window.location=\"familyadd.php\";
    </script>";
    }
    
    //inserting into table
    

        // $sql= "INSERT INTO customer (first_name, last_name, mobile, email , citizenship_no , DOB , insurance_no , address , FSP , FSD ,  bill_number, gender)
        // VALUES ('$first_name','$last_name',$mobile, '$email','$citizenship_no', '$DOB','$insurance_no','$address','$FSP','$FSD','$bill_number', '$gender')";
        // $sql= "INSERT INTO customer (first_name, last_name, mobile, email , citizenship_no , DOB , insurance_no , address , FSP , FSD ,  bill_number, gender)
        // VALUES ('Uday', 'Majhi', '9876543210' , 'uday@gmail.com','786', '09-09-2000','9789','BRT','B.P.K.I.H.S', '09-01-2021', '123', 'male')";

        $sql = "INSERT INTO dummy '5', 'Uday', 'Majhi'";
        //checking data insertion
        $resultSet = mysqli_query($connection, $sql);
        $affectedRows = mysqli_affected_rows($connection);

        if ($affectedRows > 0) {
            // echo "<script>
            //         alert(\"Creation Successful\");
            //         window.location=\"infamily.php\";
            //     </script>";
            echo "Successful";
        } else {
            // die("data insertion failed! </br>" . mysqli_error($connection));
            //    echo "</br>";
            echo "Failed";
        }
    // } 
    // else {
    //     echo "<script>
    //     alert(\"Not inserted!\");
    //     // window.location=\"infamily.php\";
    // </script>";
    // echo "Failed";
}
    mysqli_close($connection);
?>