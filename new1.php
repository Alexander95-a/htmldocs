<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    table {
        margin: 0px;



        border-collapse: collapse;

        /*border: 2px solid black;*/

    }

    th, td {
        padding: 10px;
        text-align: center;
    }

    th {
        background: #606060;
        color: #fff;
        border-collapse: collapse;
        height: 40px;

        border: 1px solid black
    }




    td {

        height: 40px;
        padding: 3px;

        border: 1px solid ;

        text-align: center;

    }
    tr {
        background: #606060;
        color: #fff;
        border-collapse: collapse;
        height: 40px;

        border: 1px solid black
    }

</style>
<body>
<div>
    <table style="width: 100vw">
        <tr >
            <td colspan="2" style="width: 45vw"></td>
            <td style="width: 10vw"></td>
            <td colspan="2" style="width: 45vw"></td>
        </tr>
        <tr>
            <td rowspan="2" style="width: 15vw"></td>
            <td rowspan="4" style="width: 20vw"></td>
            <td rowspan="2" style="width: 30vw"></td>
            <td  rowspan="4" style="width: 20vw"></td>
            <td rowspan="2" style="width: 15vw"></td>
        </tr>
        <tr>
<!--            <td style="width: 15vw"></td>-->
<!--            <td style="width: 20vw"></td>-->
<!--            <td style="width: 30vw"></td>-->
<!--            <td style="width: 20vw"></td>-->
<!--            <td style="width: 15vw"></td>-->
        </tr>
        <tr>
            <td rowspan="2" style="width: 15vw"></td>
            <!--            <td style="width: 20vw"></td>-->
            <td style="width: 30vw"></td>
            <!--            <td style="width: 20vw"></td>-->
            <td rowspan="2" style="width: 15vw"></td>
        </tr>
        <tr>
<!--            <td style="width: 15vw"></td>-->
            <!--            <td style="width: 20vw"></td>-->
            <td style="width: 30vw"></td>
            <!--            <td style="width: 20vw"></td>-->
<!--            <td style="width: 15vw"></td>-->
        </tr>
        <tr >
            <td colspan="2" style="width: 45vw"></td>
            <td style="width: 10vw"></td>
            <td colspan="2" style="width: 45vw"></td>
        </tr>



    </table>
</div>
</body>
</html>