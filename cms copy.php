<?php
    session_start();
    error_reporting(0);

    if (isset($_SESSION["admin_id"]) && $_SESSION["admin_uname"]) {
        include("dbconn.php");

        $query = "SELECT * FROM admin_login";
        $result = mysqli_query($conn, $query);

        $admins = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $admins[] = $row;
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cms-css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <title>STI College - CMS</title>
</head>
<body>
    <h1>Logged in successfully. Welcome <?php echo $_SESSION["admin_name"];?></h1>

    <form action="./addadmin.php" method="POST">
        <label>Add Admin</label>
        <br>

        <label>Username</label>
        <input type="text" name="admin-uname" placeholder="Admin Username" required>

        <label>Password</label>
        <input type="password" name="admin-pass" placeholder="Admin Password" required>

        <label>Admin Name</label>
        <input type="text" name="admin-name" placeholder="Admin Name" required>

        <button type="submit">Add User</button>
    </form>

    <form action="./deleteadmin.php" method="POST">
        <label>Delete Admin</label>
        <br>
        <?php
            foreach ($admins as $admin) {
                echo '<label>';
                echo "<input type=\"radio\" name=\"admin-to-delete\" value=\"{$admin['admin_uname']}\" required>";
                echo "{$admin['admin_name']}</label><br>";
            }        
        ?>

        <label>Password for confirmation</label>
        <input type="password" name="admin-pass" placeholder="Admin Password" required>

        <button type="submit">Delete User</button>
    </form>

    <form action="./upload.php" method="POST" enctype="multipart/form-data">
        <label>Upload Image</label>
        <br>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br>
        <input type="submit" value="Upload Image" name="Upload">
    </form>

    <a href="./logout.php">Log Out</a>

</body>
</html>

<?php

    } else {
        header("Location: ./index.php");
        exit();
    }
?>
