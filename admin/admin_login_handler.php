<?php
    if (!isset($_SESSION)){
        session_start();
    }
    if (!isset($_SESSION['admin_login'])) {
        include('_connection.php');
        if (isset($_POST['checkAdmin']) && isset($_POST['admin_email']) && isset($_POST['admin_password'])) {
            $admin_email = $_POST['admin_email'];
            $admin_password = $_POST['admin_password'];

            $sql = "SELECT * FROM `admin` WHERE `admin_email` = '$admin_email' AND `admin_password` = '$admin_password' ";

            $result = $conn->query($sql);
            $num_exist = mysqli_num_rows($result);

            if($num_exist === 1){
                $_SESSION['admin_login'] = true;
                $_SESSION['admin_email'] = $admin_email;
                echo json_encode($num_exist);
            }else if($num_exist === 0){
                echo json_encode($num_exist);
            }
        }
    }
?>