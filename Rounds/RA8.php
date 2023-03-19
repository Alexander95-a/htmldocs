<?php require_once("../includes/connect.php"); ?>
<!-- Пишем в соответствии со стандартом HTML5 -->
<!DOCTYPE HTML>
<html>
<head>
    <!-- Пишем заголовок документа -->
    <!-- Пишем заголовок документа -->

    <title>Динамические списки</title>

    <!-- Подключаем CSS-файл к документу -->

    <link rel="stylesheet" type="text/css" href="style.css" />

    <!-- Подключаем библеотеку jQuery, которая хранится на сервере Яндекса -->

    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>

</head>
<body>


<select class="group" name="l[]">
    <option value="">марка а/м</option>
    <option value="g">Раунд 1</option>
    <option value="a">A Group</option>
    <option value="b">B Group</option>
</select>

<br /><br />

<select class="round" name="n[]" disabled>
    <option value="">модель а/м</option>
    <option class="g" value="2">Раунд 1</option>

    <option class="a" value="2">Раунд 2</option>
    <option class="a" value="3">Раунд 3</option>
    <option class="a" value="4">Раунд 4</option>
    <option class="a" value="5">Раунд 5</option>
    <option class="a" value="6">Раунд 6</option>
    <option class="a" value="7">Раунд 7</option>
    <option class="a" value="8">Раунд 8</option>
    <option class="a" value="9">Раунд 9</option>
    <option class="a" value="10">Раунд 10</option>

    <option class="b" value="2">Раунд 2</option>
    <option class="b" value="3">Раунд 3</option>
    <option class="b" value="4">Раунд 4</option>
    <option class="b" value="5">Раунд 5</option>
    <option class="b" value="6">Раунд 6</option>
    <option class="b" value="7">Раунд 7</option>
    <option class="b" value="8">Раунд 8</option>
    <option class="b" value="9">Раунд 9</option>
    <option class="b" value="10">Раунд 10</option>
</select>
</body>
<script>
    $('.group').change(function(){
        $('.round').prop('selectedIndex', 0); //ощищаем select с моделями при каждом изменении select'а с марками
        var group = $(this).val(); //получаем value выбранной марки
        if(group != '') { //проверяем, выбрана ли хоть какая-то марка
            $('.round').attr('disabled',false); //открываем select с моделями
            $('.round option').css('display','none'); //сначала скрываем все модели
            $('.round option.'+group).css('display','inline'); //затем открываем те, которые нам нужны
        }

    });
</script>
</html>