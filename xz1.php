<!DOCTYPE html>
<script>
       setTimeout(function(){
                location.reload();
                }, 4500);
</script>
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
<HEAD>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</HEAD>

<BODY>


<iframe src="tablo.php" id="iframe" scrolling="no" style="display:block;height:100vh;width: 100vw; border: none;">


</iframe>
<script>
    // function reload() {
    //     document.getElementById('iframe').src = "tablo.php"
    // }
    // setInterval(reload, 3000)
</script>
<script>
    (function () {

        /*
            1. Inject CSS which makes iframe invisible
        */

        var div = document.createElement('div'),
            ref = document.getElementsByTagName('base')[0] ||
                document.getElementsByTagName('script')[0];

        div.innerHTML = '&shy;<style> iframe { visibility: hidden; } </style>';

        ref.parentNode.insertBefore(div, ref);


        /*
            2. When window loads, remove that CSS,
               making iframe visible again
        */

        window.onload = function() {
            div.parentNode.removeChild(div);
        }

    })();
</script>


</BODY>

</HTML>