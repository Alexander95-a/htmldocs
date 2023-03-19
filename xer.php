<?php

$DB_HOST = "localhost";

// REPLACE with your Database name
$DB_NAME = "baza2";
// REPLACE with Database user
$DB_USERNAME = "root";
// REPLACE with Database user password
$DB_PASSWORD = "";
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_NOTICE);

// Create connection
$conn = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
$query = "SELECT * FROM `cb` WHERE `uid` = '5'";
$query_run = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($query_run);

$tb3= $row['check1'];
$tb4= $row['check2'];
$tm= $row['timer'];
$query = "SELECT * FROM `cb` WHERE `uid` = '6'";
$query_run = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($query_run);

$tb= $row['check1'];
$tb2= $row['check2'];
?>
<!DOCTYPE html>
<html>
<head>

    <!--    <script type="text/javascript" src="jquery-1.8.0.min.js"></script>-->
    <title>Tablo 2</title>
    <meta charset="UTF-8">
    <script src="src/js/2.1.js"></script>
    <script type="text/javascript" src="autoUpdate3.js"></script>
    <!--    <script type="text/javascript" src="autoUpdate3r.js"></script>-->
    <!--    <script type="text/javascript" src="autoUpdate3l.js"></script>-->
    <link rel="stylesheet" href="css\tablo.css">
</head>
<style type="text/css">
    timerз {
        font: bold 2em Arial, Tahome, sans-serif; /* Параметры шрифта */
        color: #fff;  background: #375D4C;
        padding: 0 10px;
    }
    H1 SPAN {
        position: relative; /* Относительное позиционирование */
        top: 0.3em; /* Сдвигаем вниз */
    }

    .timer, .fio2, #layer3, #layer4 {
        position: relative; /* Относительное позиционирование */
    }
    #layer1, #layer3 {
        font-size: 50px; /* Размер шрифта в пикселах */
        color: #000080; /* Синий цвет текста */
    }

    .timer {
        z-index: 2;
        top: -850px
    }
    .timer2{

        position: absolute;
        width: 400px;
        height: 200px;
        top: 450px; /* Сдвигаем текст вверх */
        border-radius: 15px;
        background-color: white;
        z-index: 10;
    }
    .fio2 { z-index: 1; }


    .main{
        display: block;
        position: relative;
        top: -200px;
    }

    .tt{
        font-size: 30px;
        margin-top: -200px;
        color: #000000;
    }


    .d1{

        display: flex;
        justify-content: center;


    }
    #div1{
        height: 190px;
        width: 37vw;
        font-size: 115px;
        line-height: 1.2em;
        text-align: center;
        align-items: center;


    }

    .holder{
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 600;

        /*font-size: clamp(115px, 7vw, 122px);*/


        display: flex;

        align-items: center;
        text-align: center;

        line-height: 2;

        color: #000000;
    }
    #div2{
        height: 190px;
        width: 37vw;
        font-size: 115px;
        line-height: 1.2em;
        text-align: center;
        align-items: center;
    }

    .holder2{
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 600;

        /*font-size: clamp(115px, 7vw, 122px);*/
        line-height: 2;

        display: flex;
        align-items: center;
        text-align: center;

        line-height: 0.8;

        color: #000000;
    }

</style>

<div class="main">
    <!--    <div id="liveData3"  class="fio2">-->
    <!---->
    <!--        <p>Loading Data...</p>-->
    <!---->
    <!---->
    <!--    </div>-->

    <!--        <did class="img">-->
    <!--            <p class="t2">Табло 3</p>-->
    <!--            <img src="src/img/logo.png" width="200px">-->
    <!---->
    <!--        </did>-->
    <div class="d1">
        <div class="timer2" >
            <p class="timer-text" id="result_shops">2:00</p>
            <div align="center" class="tt"><p >Min : sec</p></div>
        </div>

    </div>
    <div id="display">
        <!--        <div class="top1">-->
        <!--            <div class="row">-->
        <!--                <!-- Имя борца -->-->
        <!---->
        <!--                <div class="col">-->
        <!--                    <div class="row">-->
        <!--                        <div class="mt-4 name-border" style="">-->
        <!--                            <div class="fio-box" ">-->
        <!--                            --><?php
        //                            $query = "SELECT * FROM `cb` WHERE `uid` = '5'";
        //                            $query_run = mysqli_query($conn, $query);
        //                            $row = mysqli_fetch_assoc($query_run);
        //                            ?>
        <!--                            <div id="div1" >-->
        <!--                                <div class="holder" >-->
        <!--<!--                                    -->--><?php ////echo $row['fio']; ?>
        <!--                                </div>-->
        <!--                            </div>-->
        <!---->
        <!---->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <!-- Имя борца -->-->
        <!--            <div class="col">-->
        <!--                <div class="row">-->
        <!--                    <div class="  mt-4 name-border1" style="">-->
        <!--                        <div  class="fio-box"">-->
        <!--                        --><?php
        //                        $query = "SELECT * FROM `cb` WHERE `uid` = '6'";
        //                        $query_run = mysqli_query($conn, $query);
        //                        $row = mysqli_fetch_assoc($query_run);
        //                        ?>
        <!--                        <div id="div2">-->
        <!--                            <div class="holder2">-->
        <!--<!--                                -->--><?php ////echo $row['fio']; ?>
        <!--                            </div>-->
        <!--                        </div>-->
        <!---->
        <!---->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->

    </div>

</div>

<script type="text/javascript">
    function mode() {
        $.ajax({
            url: 'tablo2.php',
            success: function(data) {
                $('#display').html(data);
            }
        });
    };

    setInterval(mode, 5000);
</script>
<script src="src/js/secundant.js"></script>
<script src="src/js/PressKey.js"></script>
<script>
    $(function(){
        n = 1;
        while(n==1){
            n = 0
            if ($('#div1 .holder').outerHeight()>$('#div1').outerHeight()){
                var fz = parseInt($('#div1').css('font-size'));
                $('#div1').css({'font-size' : fz-1});
                n = 1
            } else {n = 0}
        }

    });
</script>
<script>
    $(function(){
        n = 1;
        while(n==1){
            n = 0
            if ($('#div2 .holder2').outerHeight()>$('#div2').outerHeight()){
                var fz = parseInt($('#div2').css('font-size'));
                $('#div2').css({'font-size' : fz-1});
                n = 1
            } else {n = 0}
        }
    });
</script>
<script>
    $(document).ready(function(){


//var output = $('h1');
        var isPaused = false;
        var time = 0;

        var t = window.setInterval(function()
        {
            if(!isPaused)
            {
                //time++;
                // output.text("Seconds: " + time);
                $("#result_shops").load('time2.php');
            }
        }, 1000);

//with jquery
        $('.pause').on('click', function(e)
        {
            e.preventDefault();
            isPaused = true;
        });

        $('.play').on('click', function(e)
        {
            e.preventDefault();
            isPaused = false;
        });


    });
</script>
</html>
