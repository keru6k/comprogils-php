<?php
    session_start();
    error_reporting(0);
    echo"success";

    if (isset($_SESSION["admin_id"]) && $_SESSION["admin_uname"]) {
        include("dbconn.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $adminToDelete = $_POST["admin-to-delete"];
            $password = $_POST["admin-pass"];

            if (empty($password)) {
                header("Location: ./cms.php?error=Password is required");
                exit();
            }

            $query = "SELECT * FROM admin_login WHERE admin_uname = ? AND admin_pw = ?";
            $stmt = mysqli_prepare($conn, $query);

            mysqli_stmt_bind_param($stmt, "ss", $adminToDelete, $password);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) === 1) {

                $delQuery = "DELETE FROM admin_login WHERE admin_uname = ?";
                $delstmt = mysqli_prepare($conn, $delQuery);

                mysqli_stmt_bind_param($delstmt,"s", $adminToDelete);
                mysqli_stmt_execute($delstmt);

                if (mysqli_affected_rows($conn) > 0) {
                    header("Location: ./cms.php?success=User deleted successfully");
                    exit();
                } else {
                    header("Location: ./cms.php?error=Error deleting user");
                    exit();
                }
            } 
            
            else {
                header("Location: ./cms.php?error=Incorrect password");
                exit();
            }

        } else {
            header("Location: ./cms.php");
            exit();
        }
    } else {
        header("Location: ./index.php");
        exit();
    }
?>
