<?php
    include("dbconn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="main.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <meta name="description" content="Group 4 ILS">
    <link rel="stylesheet" href="uniformscss.css">
    <title>Group 4 ILS | Grade 12 - ITMAWD</title>
    <style>
        body {
            background-color: #f2f2f0;
            max-width: 100%;
            overflow-x: hidden;
            margin: 0%;
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            padding-right: 5%;
        }
        
        .navbar .logo {
            padding-top: 1%;
            text-decoration: none;
            color: black;
            font-family: 'Open Sans', 'Regular';
            font-size: 18px;
            margin-right: auto; /* Pushes the logo (image) to the left. */
        }
        
        .navbar a {
            padding-top: 2%;
            text-decoration: none;
            color: #050778;
            font-family: 'Open Sans', 'Regular';
            font-size: 18px;
            margin-left: 75px;
            transition: 0.3s ease-in-out;
        }
        
        .navbar .logo img {
            width: 90px;
        }
        
        .navbar a:hover {
            color: #edb51a;
        }

        .boxes {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-content: space-between;
            max-width: 1000px;
            margin: 0 auto;
        }

        .box1 {
            width: 250px;
            height: 300px;
            background-color: #e2e2e2;
            border-radius: 1em;
            margin: 10px;
        }

        .box1 {
            width: 300px;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box-content {
            text-align: center;
        }

        .box-content img {
            max-width: 80%;
            max-height: 70%;
            display: block;
            margin: 0 auto;
            border-radius: 15px;
        }

        .box-content p {
            margin: 5% auto 10px;
            font-family: 'Open Sans', sans-serif;
        }

        .box-content button {
            background-color: #edb51a;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 1em;
            cursor: pointer;
            text-transform: uppercase;
            font-family: 'Roboto', sans-serif;
            transition: background-color 0.3s ease-in-out;
            border: 0%;

        }

        .box-content button:hover {
            background-color: #ab8214;
        }
        
        </style>
</head>
<body>
    <header>
        <div class="navbar">
            <a href="index.php" class="logo"><img src="./img/stilogo.png" alt="STI Logo"></a>
            <a href="uniforms.php">Uniforms</a>
            <a href="about.php">About</a>
        </div>
    </header>
    
    <div class="boxes">
        <?php foreach($products as $product) {?>
        <div class="box1">
            <div class="box-content">
                <img src="<?php echo($product["image_src"]);?>">
                <p><?php echo($product["product_name"]);?></p>
                <p style="font-family: roboto; font-size: 14px; color: #48453c;"><?php echo($product["price"]);?></p>
                <p style="font-family: roboto; font-size: 14px; color: #48453c;">For <?php echo($product["gender"]);?> Students</p>
                <button onclick="window.location.href='orderform.php'" type="button">Purchase Now</button>
            </div>  
        </div>
        <?php } ?>
    </div>
</body>
</html>