<?php
session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wourkout shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link href="style.css"  rel="stylesheet" type="text/css">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            color: #588c7e;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }
        th {
            background-color: #588c7e;
            color: white;
        }
        tr:nth-child(even) {background-color: #f2f2f2}
    </style>
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
                <li><a href="Udaje.php">Udaje</a></li>
                <li><a href="ucet.html">Ucet</a></li>
                <!--                    <li><a href="logout.php">--><?php //if (isset($_SESSION['username'])) { echo "Odhlasit";} ?><!--</a></li>-->
                <li><a  href="profil.php"><?php if (isset($_SESSION['username'])) { echo $_SESSION['username'];} ?></a></li>
            </ul>
            <img src="obrazky/profile.png" class="user-pic" onclick="toggleMenu()">


        </nav>
    </div>
    <div class="row">


    </div>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
    <table id="myTable">
        <tr class="header">
            <th style="width:60%;">Name</th>
            <th style="width:40%;">Password</th>
            <th style="width:40%;">Email</th>
        </tr>

        <?php
        $conn = mysqli_connect("localhost", "root", "", "userregistration");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT name, password, email FROM usertable";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["name"]. "</td><td>" . $row["password"] . "</td><td>"
                    . $row["email"]. "</td></tr>";
            }
            echo "</table>";
        } else { echo "0 results"; }
        $conn->close();
        ?>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script>
    function myFunction() {
        // deklaracia var
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // prechadzaj tabulku a schovaj co nepatri
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
</body>
</html>