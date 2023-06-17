<?php
    // Student Login Verification
    if (isset($_POST['checkLogin']) && isset($_POST['stuLogEmail']) && isset($_POST['stuLogPassword'])) {
        $stuLogEmail = $_POST['stuLogEmail'];
        $stuLogPassword = $_POST['stuLogPassword'];

        $loginSql = "SELECT * FROM `add_student` WHERE `stu_email` = '$stuail' AND `stu_password` = '$stuLogPassword' ";

        $loginResult = $conn->query($logiSql);
        $numExist = mysqli_num_rows($loginResult);
        if($numExist === 1){
            echo json_encode($numExist);
            echo json_encode('data is 1');
        }else if($numExist === 0){
            echo json_encode($numExist);
            echo json_encode('data is 0');
        }
    }
?>