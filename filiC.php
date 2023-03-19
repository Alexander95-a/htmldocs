<?php require_once("includes/connect.php"); ?>
<?php

//error_reporting(E_ALL);
//ini_set("display_errors", 1);
//mysql_query('SET character_set_database = utf8');
//mysql_query ("SET NAMES 'utf8'");

if( !defined( "ExcelExport" ) ) {
    define( "ExcelExport", 1 );
    class ExportToExcel {
        var $xlsData = "";
        var $fileName = "";
        var $countRow = 0;
        var $countCol = 0;
        var $totalCol = 3;//общее число  колонок в Excel
        //конструктор класса
        function __construct (){
            $this->xlsData = pack( "ssssss", 0x809, 0x08, 0x00,0x10, 0x0, 0x0 );
        }
        // Если число
        function RecNumber( $row, $col, $value ){
            $this->xlsData .= pack( "sssss", 0x0203, 14, $row, $col, 0x00 );
            $this->xlsData .= pack( "d", $value );
            return;
        }
        //Если текст
        function RecText( $row, $col, $value ){
            $len = strlen( $value );
            $this->xlsData .= pack( "s*", 0x0204, 8 + $len, $row, $col, 0x00, $len);
            $this->xlsData .= $value;
            return;
        }
        // Вставляем число
        function InsertNumber( $value ){
            if ( $this->countCol == $this->totalCol ) {
                $this->countCol = 0;
                $this->countRow++;
            }
            $this->RecNumber( $this->countRow, $this->countCol, $value );
            $this->countCol++;
            return;
        }
        // Вставляем текст
        function InsertText( $value ){
            if ( $this->countCol == $this->totalCol ) {
                $this->countCol = 0;
                $this->countRow++;
            }
            $this->RecText( $this->countRow, $this->countCol, $value );
            $this->countCol++;
            return;
        }
        // Переход на новую строку
        function GoNewLine(){
            $this->countCol = 0;
            $this->countRow++;
            return;
        }
        //Конец данных
        function EndData(){
            $this->xlsData .= pack( "ss", 0x0A, 0x00 );
            return;
        }
        // Сохраняем файл
        function SaveFile( $fileName ){
            $this->fileName = $fileName;
            $this->SendFile();
        }
        // Отправляем файл
        function SendFile(){
            $this->EndData();
            header ( "Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT" );
            header ( "Cache-Control: no-store, no-cache, must-revalidate" );
            header ( "Pragma: no-cache" );
            header ( "Content-type: application/x-msexcel" );
            header ( "Content-Disposition: attachment; fileName=$this->fileName.xls" );
            print $this->xlsData;
        }
    }
}
if(isset($_GET['id'])) {
    //фильтруем данные
//    $id = mysql_real_escape_string(stripslashes(trim(htmlspecialchars($_GET['id'],ENT_QUOTES))));
    $filename = 'Файл_с_id_'.$id; // задаем имя файла
    $excel = new ExportToExcel(); // создаем экземпляр класса
//    $sql="SELECT * FROM  tablo1 where id = $id";//запрос к базе
//    $info = mysqli_query($conn, "SELECT * FROM `person` INNER JOIN `tablo1` using (id) WHERE `lot` != 0 AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' and `id` = '1'  ORDER BY `tablo1`.`lot` ASC ");
//    $i2 = $info['quid'];

    $excel->InsertText('Идентификатор') ;
    $excel->InsertText('Фамилия');
    $excel->InsertText('name');
    $excel->InsertText('123');
//    $excel->InsertText("$sql");
    $excel->GoNewLine();
//    foreach ($sql as $row){
//        $excel->InsertNumber('1');
//        $excel->InsertText('2');
//        $excel->InsertText('3');
//        $excel->GoNewLine();
//    }
    $excel->SaveFile($filename);
}


?>
<?php
if ($f3==2){
    mysqli_query($conn, "UPDATE `tablo1` SET `place`= '3'  WHERE `qwc` = '$w' and `qid`='$z' AND `qga` LIKE '$g' and place ='4'");

}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Document1</title>
    <?php require_once ("includes/headerC.php");?>

</head>

<style>
    th, td {
        padding: 10px;
        text-align: center;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
    @media print {

        #head {
            display: flex;
        }
        #printableTable {
            display: block;
        }

    }

</style>

<script>
    function printDiv() {
        window.frames["print_frame"].document.body.innerHTML = document.getElementById("printableTable").innerHTML;
        window.frames["print_frame"].window.focus();
        window.frames["print_frame"].window.print();
    }
</script>
<body>
<div >
    <div id="printableTable" >
        <table ">
           <p><?= $d ?></p>

            <tr>
                <th colspan="5">Date:<?= $a ?></th>
                <th colspan="15"> <?= $p ?> : <?php
                    if($w==66){?> 65+
                        <?php
                    }
                    ?>

                    <?php
                    if($w==71){?> 70+
                        <?php
                    }
                    ?>
                    <?php
                    if($w==76){?> 75+
                        <?php
                    }
                    ?>
                    <?php
                    if($w==81){?> 80+
                        <?php
                    }
                    ?>
                    <?php
                    if($w==86){?> 85+
                        <?php
                    }
                    ?>
                    <?php
                    if($w==96){?> 90+
                        <?php
                    }
                    ?>
                    <?php
                    if($w==106){?> 105+
                        <?php
                    }
                    ?>
                    <?php
                    if($w==126){?> 125+
                        <?php
                    }
                    ?>
                    <?php
                    if($w!=66&$w!=76&$w!=71&$w!=81&$w!=86&$w!=96&$w!=106&$w!=126){?>
                        <?=$w?>
                        <?php
                    }
                    ?> кг</th>
                <th colspan="5"><?= $c ?>:<?= $b ?></th>
            </tr>

            <tr>
                <th rowspan="2">id</th>
                <th rowspan="2">ФИО</th>
                <th rowspan="2">Вес</th>
                <th rowspan="2">Дата рождения</th>
                <th rowspan="2">Команда</th>
                <th colspan="15">Rounds</th>
                <th rowspan="2">побед</th>
                <th rowspan="2">поражений</th>
                <th rowspan="2">очков</th>
                <th rowspan="2">Место</th>




            </tr>
            <tr>

                <th colspan="3">1</th>
                <th colspan="3">2</th>
                <th colspan="3">3</th>
                <th colspan="3">4</th>
                <th colspan="3">5</th>


            </tr>
            <?php
            $info = mysqli_query($conn, "SELECT * FROM `person` INNER JOIN `tablo1` using (id) WHERE `lot` != 0 AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'  ORDER BY `tablo1`.`lot` ASC ");


            foreach ($info as $info){
                ?>
                <tr>
                    <td rowspan="2"><?= $info['quid']?></td> <!-- id-->
                    <td rowspan="2"><?=$info['Name']?></td> <!-- Фио-->
                    <td rowspan="2"><?=$info["qwc"]?></td> <!-- вес-->
                    <td rowspan="2"><?=$info["BD"]?></td> <!-- год рождения-->
                    <td rowspan="2"><?= $info["Team2"]?></td> <!-- команда-->
                    <td rowspan="2"><?= $info["O1"]?></td> <!-- противник-->
                    <td ><?=$info["R1"]?></td> <!-- победа-->
                    <td ><?=$info["L1"]?></td> <!-- поражение-->
                    <td rowspan="2"><?= $info["O2"]?></td> <!-- противник-->
                    <td ><?=$info["R2"]?></td> <!-- победа-->
                    <td ><?=$info["L2"]?></td> <!-- поражение-->
                    <td rowspan="2"><?= $info["O3"]?></td> <!-- противник-->
                    <td ><?=$info["R3"]?></td> <!-- победа-->
                    <td ><?=$info["L3"]?></td> <!-- поражение-->
                    <td rowspan="2"><?= $info["O4"]?></td> <!-- противник-->
                    <td ><?=$info["R4"]?></td> <!-- победа-->
                    <td ><?=$info["L4"]?></td> <!-- поражение-->
                    <td rowspan="2"><?= $info["O5"]?></td> <!-- противник-->
                    <td ><?=$info["R5"]?></td> <!-- победа-->
                    <td ><?=$info["L5"]?></td> <!-- поражение-->

                    <td rowspan="2"><?=$info["Wins"]?></td> <!-- Побед-->
                    <td rowspan="2"><?= $info['lose']?></td> <!-- Поражений-->
                    <td rowspan="2"><?= $info['Wins'] - $info['lose']?></td> <!-- Очков-->
                    <td rowspan="2"><?= $info['place'] ?></td> <!-- Место-->





                </tr>
                <tr>
                    <td colspan="2"><?=$info["m1"]?></td> <!-- счет-->
                    <td colspan="2"><?=$info["m2"]?></td>
                    <td colspan="2"><?=$info["m3"]?></td>
                    <td colspan="2"><?=$info["m4"]?></td>
                    <td colspan="2"><?=$info["m5"]?></td>




                </tr>
                <?php
            }
            ?>
            <tr>
                <th colspan="11" >M.Referee: <?= $e ?></th>
                <th colspan="14">M.Secretary: <?= $f ?></th>
            </tr>


        </table>
    </div>

</div>



</body>
</html>

