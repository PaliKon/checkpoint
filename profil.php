<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wourkout shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link href="style.css"  rel="stylesheet" type="text/css">
</head>
<body>

<div class="container">
    <div class="navbar">
        <div class="logo">
            <img src="obrazky/logo.jpg" width="125" alt="">
        </div>
        <nav>
            <ul>
                <li><a href="main.php">Domov</a></li>
                <li><a href="produkty.html">Produkty</a></li>
                <li><a href="">Kontakt</a></li>
                <li><a href="ucet.html">Ucet</a></li>
                <li><a href="logout.php">Odhlasenie</a></li>
                <li><a href="profil.php"><?php if (isset($_SESSION['username'])) { echo $_SESSION['username'];} ?></a></li>
            </ul>
        </nav>
    </div>
    <div class="row">

        <div class="col-2">
            <form action="delete.php" method="post">
                <input type="text" name="user" placeholder="Meno ktore vymazes" >
            <button type="submit" name="user_delete"  class="btn">Odstranit ucet</button>
            </form>
        </div>

        <div class="col-2">
            <form action="update.php" method="post">
                <input type="text" name="password" placeholder="Tvoje heslo" >
                <input type="text" name="password" placeholder="Nove heslo" >
                <button type="submit" name="user_delete"  class="btn">Zmenit heslo</button>
            </form>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>