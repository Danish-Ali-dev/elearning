<?php
    include('_connection.php');
    
    if (!isset($_SESSION)){
        session_start();
    }
    
    // Checking Email Already Exists
    if (isset($_POST['checkmail']) &&  isset($_POST['student_email'])){
        $student_email = $_POST['student_email'];
        $existsql = "SELECT * FROM `add_student` WHERE `stu_email` = '$student_email'" ;
        $result = $conn->query($existsql);
        $numexist = mysqli_num_rows($result);
        echo json_encode($numexist);
    }

    // Insert Student 
    if (isset($_POST['signup']) &&  isset($_POST['student_name']) && isset($_POST['student_email']) && isset($_POST['student_password'])) {
        $student_name = $_POST['student_name'];
        $student_email = $_POST['student_email'];
        $student_password = $_POST['student_password'];

        $sql = "INSERT INTO `add_student` (`stu_name`, `stu_email`, `stu_password`) VALUES ('$student_name', '$student_email', '$student_password')";

        if($conn->query($sql) == TRUE){
            echo json_encode("OK");
        }
        else{
            echo json_encode("Failed");
        }
    }

    
    // Student Login Verification
    if (!isset($_SESSION['is_login'])) {
        if (isset($_POST['checkLogin']) && isset($_POST['stuLogEmail']) && isset($_POST['stuLogPassword'])) {
            $stuLogEmail = $_POST['stuLogEmail'];
            $stuLogPassword = $_POST['stuLogPassword'];

            $loginSql = "SELECT * FROM `add_student` WHERE `stu_email` = '$stuLogEmail' AND `stu_password` = '$stuLogPassword' ";

            $loginResult = $conn->query($loginSql);
            $numExist = mysqli_num_rows($loginResult);

            if($numExist === 1){
                $_SESSION['is_login'] = true;
                $_SESSION['stuLogEmail'] = $stuLogEmail;
                echo json_encode($numExist);
            }else if($numExist === 0){
                echo json_encode($numExist);
            }
        }
    }
?>