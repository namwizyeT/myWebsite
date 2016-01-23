<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Taizya Namwizye| Portfolio</title>
        <link type = "text/css" rel ="stylesheet" href = "dynamicMenus.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <style>
            body
            {
                background: linear-gradient(
                    rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.5)
                    ),
                    url(img/drop.jpg)repeat fixed;
                background-size: cover;
            }

            #about
            {
                padding-top: 100px;
                width: 20%;
                margin: 0 auto;
                color:#fff;

            }

            @media only screen and (max-width: 500px)
            {
                #about
                {
                    width: 65%; 
                }

                body
                {
                    background: linear-gradient(
                        rgba(0, 0, 0, 0.5),
                        rgba(0, 0, 0, 0.5)
                        ),
                        url(img/drop.jpg)50% repeat fixed;
                    background-size: cover;

                }

                img{

                    padding:0px;
                }
            }
            #about p{
                font-size:15px;
                font-family: "Arial", Times, serif;
                text-justify: inter-word;
            }
            p::first-letter
            {
                font-size: 200%;
            }

            span.glyphicon-circle-arrow-down
            {
                font-size: 5em;
                color: #fff;
                padding-top: 30px;

            }

            img{

                visibility: hidden;
                padding:30px;
            }

        </style>
    </head>
    <body>
        <?php
        require "dynamicMenus.html";
        ?>

        <div class="container text-center">
            <div id="about">
                <p>Hello World! I’m Taizya. I’ve been
                    developing for the past two years. I love learning new
                    technologies and creating fun, dynamic websites. Scroll
                    to see what I can do!</p>
            </div>
        </div>
        <div class="container-fluid bg-3 text-center" id="where">
            <div id='link'>
                <a href="#"><span class="glyphicon glyphicon-circle-arrow-down"></span></a>
            </div>
        </div>
        <div class="container-fluid text-center skills" >
            <img src="img/html.png" id="html">
            <br>
            <img src="img/css.png" id="css">
            <br>
            <img src="img/js.png" id="js">
            <br>
            <img src="img/boot.png" id="bootstrap">
            <br>
            <img src="img/jquery.png" id="jquery">
            <br>
            <img src="img/php.png" id="php">
            <br>
            <img src="img/mysql.png" id="mysql">
            <br>
            <img src="img/java.png" id="java" style="padding-bottom: 100px">
        </div>
        <script>

            var yPos, html, css, js, bootstrap, jquery, php, mysql, java;
            function parallax()
            {

                yPos = window.pageYOffset;

                html = document.getElementById("html");
                css = document.getElementById("css");
                js = document.getElementById("js");
                bootstrap = document.getElementById("bootstrap");
                jquery = document.getElementById("jquery");
                php = document.getElementById("php");
                mysql = document.getElementById("mysql");
                java = document.getElementById("java");

                if (yPos > 50)
                {
                    html.style.visibility = "visible";
                }else if(yPos < 50)
                {
                    html.style.visibility = "hidden";
                }
                if (yPos > 150)
                {
                    css.style.visibility = "visible";
                }
                else if(yPos < 150)
                {
                    css.style.visibility = "hidden";
                }
                if (yPos > 200)
                {
                    js.style.visibility = "visible";
                }
                else if(yPos < 200)
                {
                    js.style.visibility = "hidden";
                }
                if (yPos > 300)
                {
                    bootstrap.style.visibility = "visible";
                }
                else if(yPos < 300)
                {
                    bootstrap.style.visibility = "hidden";
                }
                if (yPos > 400)
                {
                    jquery.style.visibility = "visible";
                }
                else if(yPos < 400)
                {
                    jquery.style.visibility = "hidden";
                }
                if (yPos > 500)
                {
                    php.style.visibility = "visible";
                }
                else if(yPos < 500)
                {
                    php.style.visibility = "hidden";
                }
                if (yPos > 600)
                {
                    mysql.style.visibility = "visible";
                }
                else if(yPos < 600)
                {
                    mysql.style.visibility = "hidden";
                }
                if (yPos > 650)
                {
                    java.style.visibility = "visible";
                }
                else if(yPos < 650)
                {
                    java.style.visibility = "hidden";
                }
            }
            window.addEventListener("scroll", parallax);





        </script>
    </body>
</html>
