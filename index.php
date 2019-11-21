<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- iconos -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- <script defer src="assets/js/all.js"></script> -->

    <!-- CSS Personalizado -->
    <link rel="stylesheet" href="assets/css/personalizado.css">
    <link rel="stylesheet" href="assets/css/nav_w3.css">
    <title>Prácticas GSW</title>
    <link rel="icon" href="assets/assets/admin.ico">


</head>

<body><!-- 
    <script src="assets/js/all.js"></script>
    <script src="assets/js/popper.min.js"></script> -->
    <script src="assets/js/bootstrap.min.js"></script>
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large mb-n1 mt-n1 text-right" onclick="w3_close()" style="padding:1;z-index:2;" >Cerrar &times;</button>
        <img src="assets/logo2.PNG" style="width:100%;z-index:-1;" alt=""> 
        <div style="text-align:left;margin-top:2px;margin-left:5%;">
            <span style="font-weight: bold;"><b>Prácticas</b></span>
            <a href="?x=devops.php" class="w3-bar-item w3-button btn">Práctica DevOps</a>
            <a href="?x=gc01.php" class="w3-bar-item w3-button btn">Google Cloud 01</a>
            <a href="?x=gc02.php" class="w3-bar-item w3-button btn">Google Cloud 02</a>
            <a href="?x=gc05.php" class="w3-bar-item w3-button btn">Google Cloud 05</a>
            <a href="?x=docker.php" class="w3-bar-item w3-button btn">Docker</a>

        </div>
    </div>
    <div id="main">
        <div class="contentAdmin">
            <div class="container" style="justify-content:center;">
                <div class="row">
                    <div class="col-sm-12">
                    </div>
                </div>
                <div class="col-sm-12 offset-sm-0 form-contAdmin">
                    <div class="form-topAdmin">
                        <div class="form-top-leftAdmin" style="width:50%;">
                            <button id="openNav" class="w3-button menu w3-xlarge" onclick="w3_open()">&#9776;
                                Menú</button>
                        </div>
                        <div class="form-top-rightAdmin" style="width:50%;color:white;">
                            <div style="width:100%;font-size:12px;">
                                <h3>Ronald Fernando Gómez Trejo</h3>
                                <p>Guías GSW período 03.<br>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="myform-bottomAdmin">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 offset-sm-0">


                                    <?php
if (isset($_GET['x'])) {
    echo "/Funciones/" . $_GET['x'] . "";
    include "assets/Funciones/" . $_GET['x'] . "";
} else {
    echo "<button id=\"openNav\" class=\"w3-button menu w3-xlarge\"  style='color:black !important' onclick=\"w3_open()\">&#9776;
    SELECCIONE UNA GUIA DEL MENU LATERAL (PRESIONA AQUI)</button>";
}

?>


<script>
function w3_open() {

    document.getElementById("main").style.marginLeft = "25%";
    document.getElementById("mySidebar").style.width = "25%";
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("openNav").style.display = 'none';
}

function w3_close() {
    document.getElementById("main").style.marginLeft = "0%";
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("openNav").style.display = "inline-block";
}
</script>

                             
