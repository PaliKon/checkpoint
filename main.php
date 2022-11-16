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
                    <li><a href="logout.php"><?php if (isset($_SESSION['username'])) { echo "Odhlasit";} ?></a></li>
                    <li><a href="profil.php"><?php if (isset($_SESSION['username'])) { echo $_SESSION['username'];} ?></a></li>
                </ul>
            </nav>
        </div>
        <div class="row">
           <div class="col-2">
            <h1>Ziskaj svoj  <br>  novy work-outovy styl !</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

        </div>
        <div class="col-2">
        <img src="obrazky/image1.png" alt="" >
    </div>
    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>

        function display_ct5() {
            var x = new Date()
            var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';

            var x1= x.getDate() + "/" + (x.getMonth()+1)+ "/"  + x.getFullYear();
            x1 = x1 + " - " +  x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds() + ":" + ampm;
            document.getElementById('ct5').innerHTML = x1;
            display_c5();
        }
        function display_c5(){
            var refresh=1000;
            mytime=setTimeout('display_ct5()',refresh)
        }
        display_c5()
    </script>
    <span id='ct5' style="background-color: #FFFF00"></span>
</body>
</html>