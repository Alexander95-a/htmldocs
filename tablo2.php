<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
<!--    <script>-->
<!--        setTimeout(function(){-->
<!--            location.reload(true);-->
<!--        }, 1000);-->
<!--    </script>-->
    <script type="text/javascript" src="src\js\jquery-3.6.0.min.js"></script>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css\tablo.css">

    

    <style>
        .tt{
            font-size: 30px;
            margin-top: -50px;
            color: #000000;
        }

        .display{
            margin-top: -170px;
        }
        .st{background-color:blue;
            color:white;}
        .sp{background-color:red;
            color:white;}
        .img{
            display: block;
            position: relative;
            margin-left: auto;
            margin-right: auto;
            top: 220px;
            z-index: 10;

            padding: 0;
        }
        #div1{
            height: 130px;
            width: 37vw;
            font-size: 110px;
            line-height: 1.2em;
            text-align: center;
            align-items: center;


        }

        .holder{
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 600;
            -moz-hyphens: auto;
            -webkit-hyphens: auto;
            -ms-hyphens: auto;
            width: 37vw;


            /*font-size: clamp(115px, 7vw, 122px);*/
            display: flex;

            align-items: center;
            text-align: center;
            line-height: 0.8;

            color: #000000;
        }
        #div2{
            height: 130px;
            width: 37vw;
            font-size: 110px;
            line-height: 1.2em;
            text-align: center;
            align-items: center;
        }

        .holder2{
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 600;
            -moz-hyphens: auto;
            -webkit-hyphens: auto;
            -ms-hyphens: auto;
            width: 37vw;

            /*font-size: clamp(115px, 7vw, 122px);*/
            line-height: 2;

            display: flex;
            align-items: center;
            text-align: center;

            line-height: 0.8;

            color: #000000;
        }
        #div3{
            height: 120px;
            width: 550px;
            font-size: 150px;
            line-height: 1.2em;
            text-align: center;
            align-items: center;
            word-break: normal;


        }

        .holder3{
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 900;
            -moz-hyphens: auto;
            -webkit-hyphens: auto;
            -ms-hyphens: auto;
            width: 550px;
            /*font-size: clamp(115px, 7vw, 122px);*/
            display: flex;

            align-items: center;
            text-align: center;
            line-height: 0.8;

            color: #ffffff;
        }
        #div4{
            height: 140px;
            width: 500px;
            font-size: 150px;
            line-height: 1.2em;
            text-align: center;
            align-items: center;
        }

        .holder4{
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 900;
            -moz-hyphens: auto;
            -webkit-hyphens: auto;
            -ms-hyphens: auto;
            width: 500px;
            /*font-size: clamp(115px, 7vw, 122px);*/
            line-height: 2;

            display: flex;
            align-items: center;
            text-align: center;

            line-height: 0.8;

            color: #ffffff;
        }

    </style>
</head>

<body >
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
$query = "SELECT * FROM `cb` WHERE `uid` = '3'";
$query_run = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($query_run);

    $tb3= $row['check1'];
    $tb4= $row['check2'];
    $tm= $row['timer'];
$query = "SELECT * FROM `cb` WHERE `uid` = '4'";
$query_run = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($query_run);

$tb= $row['check1'];
$tb2= $row['check2'];
    ?>
<div class="display">
    <div >
    <img src="src/img/logo.png" class="img" width="200px" >
    <div/>
    <div class="container-fluid" style="height:100vh;">
        <!-- Название чемпионата -->
<!--        <div class="row bg-white" style="height:7vh;">-->
<!--            <div class="col-11 mx-auto">-->
<!--                <div class="row">-->
<!--                    <h1 class="champ" >-->
<!--                        Championship of the Republic of Sakha (Yakutia) in wrestling Gapsagai, in memory of Peter-->
<!--                        Eremeevich Alekseev-->
<!--                    </h1>-->
<!--                </div>-->
<!--                <div class="row" >-->
<!--                    <h1 class="champ" >-->
<!--                        04/08/2022 - 04/10/2022-->
<!--                    </h1>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

        <div >
            <div class="top1">
                <div class="row">
                    <!-- Имя борца -->

                    <div class="col">
                        <div class="row">
                            <div class="mt-4 name-border" style="">
                                <div class="fio-box" ">
                                <?php
                                $query = "SELECT * FROM `cb` WHERE `uid` = '3'";
                                $query_run = mysqli_query($conn, $query);
                                $row = mysqli_fetch_assoc($query_run);
                                ?>
                                <div id="div1" >
                                    <div class="holder"  style="padding-top: 20px"><?php echo $row['fio']; ?></div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- Имя борца -->
                <div class="col">
                    <div class="row">
                        <div class="  mt-4 name-border1" style="">
                            <div  class="fio-box"">
                            <?php
                            $query = "SELECT * FROM `cb` WHERE `uid` = '4'";
                            $query_run = mysqli_query($conn, $query);
                            $row = mysqli_fetch_assoc($query_run);
                            ?>
                            <div id="div2">
                                <div class="holder2"  style="padding-top: 20px"><?php echo $row['fio']; ?></div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>

        <div class="row">
            <div class="col-11 mx-auto">
                <div class="row">
                    <!-- Левая  колонна -->
                    <div class="col-4">
                        <div class="row mt-4">
                            <div class="col-5 me-auto">
                            <!-- 
                                Карточка штрафа
                            Надо сделать второй класс red и добавить там стили(для того чтобы была красная карточка)
                            -->
                                <div class="row  <?=$tb3?> white" >
                                    <a  href="tablo.php?tb3=red&tb2=<?=$tb2?>&tb4=<?=$tb4?>&tb=<?=$tb?> " class="link" {z-index: 4}>.</a>
                                </div>
                                <div class="row mt-3 <?=$tb4?> white" >
                                    <a  href="tablo.php?tb4=red&tb=<?=$tb?>&tb3=<?=$tb3?>&tb2=<?=$tb2?>" class="link" {z-index: 3}>.</a>

                                </div>
                                <div class="row mt-3 green" >
                                    <a  href="tablo.php?tb=yellow&tb2=yellow&tb3=yellow&tb4=yellow" class="link" {z-index: 1}>.</a>

                                </div>
                            </div>
                            <div class="col-6 chet">
                                <!-- Номер очков -->
                                <?php 
                                $query = "SELECT * FROM `cb` WHERE `uid` = '3'";
                                $query_run = mysqli_query($conn, $query);
                                $row = mysqli_fetch_assoc($query_run);
                                ?>
                                <p class="mx-auto time my-1" id="score-left"><?php echo $row['score'];
                                    if($row==2){
                                        header("Location:../tablo.php?tb=yellow&tb2=yellow&tb3=yellow&tb4=yellow");
                                    }?></p>
                            </div>
                        </div>
                    </div>
                    <!-- Центр. колонна -->
                    <div class="col-4">
                        <div class="row">
                            <div class="col-11 mx-auto">
                                 <div class="timer">


                                     <div class="d1">
                                         <div class="timer2" >
                                             <p class="timer-text" id="result_shops">:</p>
                                             <div align="center" class="tt"><p >Min : sec</p></div>
                                         </div>

                                     </div>
                                </div>
                                <div class="row">
                                    <h1 class="score text-center">
                                        SCORE
                                    </h1>
                                </div>
                                <!-- Round  -->
                                <div class="row mt-3">
                                    <div class="col-8 mx-auto white-bord">
                                    <?php 
                                    $query = "SELECT * FROM `cb` WHERE `uid` = '4'";
                                    $query_run = mysqli_query($conn, $query);
                                    $row = mysqli_fetch_assoc($query_run);
                                    ?>
                                        <p class="mx-auto time my-1 mont">
                                            ROUND<span class="num-round ms-5"  ><?php echo $row['round']; ?></span>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Правая  колонна копия левой но с отзеркаливанием-->
                    <div class="col-4">
                        <div class="row mt-4">
                            <div class="col-6 chet">
                            <?php 
                                $query = "SELECT * FROM `cb` WHERE `uid` = '4'";
                                $query_run = mysqli_query($conn, $query);
                                $row = mysqli_fetch_assoc($query_run);
                                ?>
                                <p class="mx-auto time my-1" id="score-right"><?php echo $row['score'];
                                if($row==2){
                                    header("Location:../tablo.php?tb=yellow&tb2=yellow&tb3=yellow&tb4=yellow");
                                }
                                ?></p>
                            </div>
                            <div class="col-5 ms-auto">
                                <div class="row  <?=$tb?> white" >
                                    <a  href="tablo.php?tb=red&tb2=<?=$tb2?>&tb3=<?=$tb3?>&tb4=<?=$tb4?>" class="link" {z-index: 4}>.</a>
                                </div>
                                <div class="row mt-3 <?=$tb2?> white" >
                                    <a  href="tablo.php?tb2=red&tb=<?=$tb?>&tb3=<?=$tb3?>&tb4=<?=$tb4?> " class="link" {z-index: 3}>.</a>

                                </div>
                                <div class="row mt-3 green" >
                                    <a  href="tablo.php?tb=yellow&tb2=yellow&tb3=yellow&tb4=yellow" class="link" {z-index: 1}>.</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row test">
            <p class="mx-auto cat" style="font-size: 68px">
                CATEGORY
            </p>
        </div>
        <div class="row down">
            <div class="col-4">
                <div class="row">
                    <div class="col-5 me-auto">
<!-- Сюда надо въебать флаг -->
                    </div>
                    <div class="col-6">
                        <!-- Инициалы страны -->
                        <div class="count1" style="margin-left: -230px">

                            <?php
                            $query = "SELECT * FROM `cb` WHERE `uid` = '3'";
                            $query_run = mysqli_query($conn, $query);
                            $row = mysqli_fetch_assoc($query_run);
                            ?>
                            <div id="div3">
                                <div class="holder3" style="width: 550px; text-align: center; ">

                                    <!-- ХЗ но числа как в фигме -->
                                    <?php echo $row['country']; ?>

                                </div>
                            </div>
                            <!--                            <p class="country" style="width: 650px; text-align: center">-->
                            <!--                                <!-- ХЗ но числа как в фигме -->-->
                            <!--                                --><?php //echo $row['country']; ?>
                            <!--                            </p>-->


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row mt-5">
                    <div class="gender" >
                        <?php
                        $query = "SELECT UPPER (gender) as gender FROM `cb` WHERE `uid` = '3'";
                        $query_run = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($query_run);
                        ?>
                        <p class="mx-auto time my-1 mont" >
                            <!-- Пол(только латиницей) -->
                            <?php echo $row['gender']; ?>
                        </p>
                        <p  style="font-size: 70px; text-align:center; margin-top: 5px; color: #FFFFFF; font-weight: 600;" >
                            Gender
                        </p>
                    </div>
                    <div class="weight-category">
                        <?php
                        $query = "SELECT * FROM `cb` WHERE `uid` = '3'";
                        $query_run = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($query_run);
                        ?>
                        <p class="mx-auto time my-1 mont">
                            <!-- ХЗ но числа как в фигме -->
                            <?php echo $row['weight']; ?>
                        </p>
                        <p  style="font-size: 70px; text-align:center; margin-top: 5px; color: #FFFFFF; font-weight: 600;" >
                            Weight
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-6" style=" width: 600px;">
                        <div style="margin-left: 50px">
                            <?php
                            $query = "SELECT * FROM `cb` WHERE `uid` = '4'";
                            $query_run = mysqli_query($conn, $query);
                            $row = mysqli_fetch_assoc($query_run);
                            ?>
                            <div id="div4">
                                <div class="holder4" style=" width: 500px; text-align: center; ">

                                    <!-- ХЗ но числа как в фигме -->
                                    <?php echo $row['country']; ?>

                                </div>
                            </div>
                            <!--                            <p class="country" style=" width: 600px; text-align: center">-->
                            <!--                                <!-- ХЗ но числа как в фигме -->-->
                            <!--                                --><?php //echo $row['country']; ?>
                            <!--                            </p>-->
                        </div>

                    </div>
                    <div class="col-5 me-auto">
                        <!-- Сюда надо въебать флаг -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script type="text/javascript" src="src\js\left_name.js"></script>
<script type="text/javascript" src="fine.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
<script type="text/javascript" src="src\js\fines.js"></script>
<script type="text/javascript" src="src/js/GET.js"></script>
<script src="src/js/secundant.js"></script>
<script src="src/js/PressKey.js"></script>

<script type="text/javascript" src="autoUpdate.js"></script>
<script src="src/js/bootstrap.bundle.min.js">
</script>
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
    $(function(){
        n = 1;
        while(n==1){
            n = 0
            if ($('#div3 .holder3').outerHeight()>$('#div3').outerHeight()){
                var fz = parseInt($('#div3').css('font-size'));
                $('#div3').css({'font-size' : fz-1});
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
            if ($('#div4 .holder4').outerHeight()>$('#div4').outerHeight()){
                var fz = parseInt($('#div4').css('font-size'));
                $('#div4').css({'font-size' : fz-1});
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
        }, 900);

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

</body>

</html>