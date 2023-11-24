<?php
    session_start();
    include('dbconn.php');


    $setAdminUname = "test";
    $setAdminPass = "test";
    $setAdminName = "test";

    $hashedPass = password_hash($setAdminPass, PASSWORD_DEFAULT);


    $addQuery = "INSERT INTO admin_login (admin_uname, admin_pw, admin_name) VALUES (?, ?, ?)";
    $addstmt = mysqli_prepare($conn, $addQuery);

    mysqli_stmt_bind_param($addstmt, "sss", $setAdminUname, $hashedPass, $setAdminName);
    mysqli_stmt_execute($addstmt);



?>