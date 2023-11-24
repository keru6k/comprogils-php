<?php
    session_start();
    error_reporting(0);

    if (isset($_SESSION["admin_id"]) && $_SESSION["admin_uname"]) {
        header("Location: ./cms.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="administratorcss.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <title>STI College - Administrator Login</title>
</head>
<body>

    <section class="container">
        <header>
            <img src="./img/stilogo.png">
            <div>
                <span style="color: #edb51a;">C</span><span>ontent</span> <span style="color: #edb51a;">M</span><span>anagement</span> <span style="color: #edb51a;">S</span><span>ystem</span>
            </div>
            <br>

            </header>
            <form action="./login.php" method="POST" class="form">
                <label>Username</label>
                <input type="text" name="uname" placeholder="User Name" required>
                <br>

                <label>Password</label>
                <input type="password" name="pass" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
    </section>

</body>
</html>