<?php
session_start();

$isLoggedIn = isset($_SESSION['user']);
?>

    <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="master_class/CSS/s_k.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <title>
        Катерина Погребенна
    </title>
</head>
<body>
<header>
    <div class="logo" href="#">
        <div class="container">
            <span style="--i:1" >К</span>
            <span style="--i:2" >а</span>
            <span style="--i:3" >т</span>
            <span style="--i:4" >е</span>
            <span style="--i:5" >р</span>
            <span style="--i:6" >и</span>
            <span style="--i:7" >н</span>
            <span style="--i:8" >а</span>
        </div><div class="container">
            <span style="--i:10" >П</span>
            <span style="--i:11" >о</span>
            <span style="--i:12" >г</span>
            <span style="--i:13" >р</span>
            <span style="--i:14" >е</span>
            <span style="--i:15" >б</span>
            <span style="--i:16" >е</span>
            <span style="--i:17" >н</span>
            <span style="--i:18" >н</span>
            <span style="--i:19" >а</span>
        </div>
    </div>
</header>

<main class="content">
    <div class="leftblock">
        <img class="profile-img" src="img_for_index/ekater.jpg" alt="Катерина Погребенна">
    </div>

    <div class="rightblock">
        <div class="auth-container">
            <?php if ($isLoggedIn): ?>
            <img class="avatar" src="regis_auth/<?=$_SESSION['user']['avatar']?>" alt="">
            <a href="regis_auth/profile.php"><h2><?=$_SESSION['user']['username']?></h2></a>
            <?php else: ?>
            <a class="login-btn" href="regis_auth/auth.php">Увійти</a>
            <?php endif; ?>
        </div>
        <div class="links-container">
            <a class="project" href="my_project/my_project.php">Мої проекти</a>
            <a class="pages2" href="master_class/m_k/m_k.php">Художня студія Арт Клас</a>
            <a class="pages2" href="gallery/gallery.php">Особисте мистецтво</a>
        </div>
        <img class="right_image" src="img_for_index/pifagor.jpg" alt="Pifagor">
    </div>
</main>

<footer>
    <div class="footer-content">
        <p>&copy; 2024 Катерина Погребенна. Все права защищены.</p>
    </div>
</footer>
</body>
</html>
