<?php
    include("dbconn.php");
    session_start();

    if (isset($_POST["uname"]) && isset($_POST["pass"])) {
        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $uname = validate($_POST["uname"]);
        $pass = validate($_POST["pass"]);

        if(empty($uname)) {
            header("Location: ./index.php");
            exit();
        }
        else if(empty($pass)) {
            header("Location: ./index.php");
            exit();
        }
        else {

            $loginQuery = "SELECT * FROM admin_login WHERE admin_uname = ?";
            $loginstmt = mysqli_prepare($conn, $loginQuery);

            mysqli_stmt_bind_param($loginstmt, "s", $uname);
            mysqli_stmt_execute($loginstmt);

            $res = mysqli_stmt_get_result($loginstmt);

            if(mysqli_num_rows($res) === 1) {
                $row = mysqli_fetch_assoc($res);
                if($row['admin_uname'] === $uname && password_verify($pass, $row['admin_pw'])) {
                    $_SESSION["admin_uname"] = $row["admin_uname"];
                    $_SESSION["admin_name"] = $row["admin_name"];
                    $_SESSION["admin_id"] = $row["admin_id"];
                    header("Location: ./cms.php");
                    exit(); 
                }
            }
            else {
                header("Location: ./administrator.php?error=Wrong password! ! !");
                exit();
            }
        }

    }

    else {
        header("Location: ./index.php");
        exit();
    }

?>