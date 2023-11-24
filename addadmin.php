<?php
    session_start();
    error_reporting(0);

    include("dbconn.php");

    if(isset($_SESSION["admin_id"]) && $_SESSION["admin_uname"]) {
        if(isset($_POST['admin-uname']) && isset($_POST['admin-pass']) && isset($_POST['admin-name'])) {

            function validate($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            $setAdminUname = validate($_POST['admin-uname']);
            $setAdminPass = validate($_POST['admin-pass']);
            $setAdminName = validate($_POST['admin-name']);

            $hashedPass = password_hash($setAdminPass, PASSWORD_DEFAULT);

            if(empty($setAdminUname)) {
                header("Location: ./cms.php?error=Blank_Username");
            }

            if(empty($setAdminPass)) {
                header("Location: ./cms.php?error=Blank_Password");
            }

            if(empty($setAdminName)) {
                header("Location: ./cms.php?error=Blank_Name");
            }

            else {
                $addQuery = "INSERT INTO admin_login (admin_uname, admin_pw, admin_name) VALUES (?, ?, ?)";
                $addstmt = mysqli_prepare($conn, $addQuery);

                mysqli_stmt_bind_param($addstmt, "sss", $setAdminUname, $hashedPass, $setAdminName);
                mysqli_stmt_execute($addstmt);

                header("Location: cms.php?success=true");
            }

            
        }
    }

    else {
        header("Location: ./index.php");
        exit();
    }
?>