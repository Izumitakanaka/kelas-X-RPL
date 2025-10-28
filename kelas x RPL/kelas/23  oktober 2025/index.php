<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <ul>
                <li><a href="?menu=home</a></li>
                <?php 
                if (!sset($_SESSION ['email'])) {
                ?>
                ?>
                <li><a href="register.php">register</a></li>
                <li><a href="login.php">login</a></li>
                <?php
                }else{ 
                    ?>
                <li><a href="user.php">user</a></li>
                <li><a href="logout.php">logout</a></li>
                <?php 
                }
                ?>
            </ul>
        </div>
        <div>
            <?php 
            if (isset($_GET['menu'])) {
            $isi = $_GET['menu'];
            echo $isi;
        }
            if($isi == "index.php"){
                require_once "index.php";
            }
            if($isi == "register.php"){
                require_once "register.php";
            }
            if($isi == "login.php"){
                require_once "login.php";
            }
            if($isi == "user.php"){
            require_once "user.php";
            }
            if($isi == "logout.php"){
            require_once "logout.php";
            }
            ?>
        </div>
    </div>
</body>
</html>