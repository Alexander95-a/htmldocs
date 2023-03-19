
<html lang="en">
<?php 
$DB_HOST = "localhost";

// REPLACE with your Database name
$DB_NAME = "viewfim_level";
// REPLACE with Database user
$DB_USERNAME = "root";
// REPLACE with Database user password
$DB_PASSWORD = '';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
  $con = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

  if(isset($_GET['from_date']) && isset($_GET['to_date']))
  {
      $from_date = $_GET['from_date'];
      $to_date = $_GET['to_date'];

      $toDate1 = $to_date;
      $date1 = date("Y-m-d", strtotime($toDate1.'+ 1 days'));
            
      $query11 = "SELECT * FROM (SELECT * FROM level_1 WHERE created_date BETWEEN '$from_date' AND '$date1' ORDER BY id DESC) t ORDER BY id";
      $query_run1 = mysqli_query($con, $query11, $query12);

      if(mysqli_num_rows($query_run1) > 0)
      {
        foreach($query_run1 as $data11)
        {
          $month11[] = $data11['created_date'];
          $temperatura11[] = $data11['temp'];
        }
        foreach($query_run1 as $data12)
        {
          $month12[] = $data12['created_date'];
          $urov12[] = 133620-($data12['uroven']-3738);
        }
      }
      else{
        
          echo "No Record Found";
      }
  }else if( isset( $_POST['daybtn1'] )){

    $query111 = $con->query("SELECT * FROM `level_1`WHERE created_date >= curdate();");
    foreach($query111 as $data11)
    {
      $month11[] = $data11['created_date'];
      $temperatura11[] = $data11['temp'];
    }
    foreach($query111 as $data12)
    {
      $month12[] = $data12['created_date'];
      $urov12[] = 133620-($data12['uroven']-3738);
    }
    
  }else if( isset( $_POST['weekbtn1'] )){

    $query112 = $con->query("SELECT * FROM `level_1`WHERE created_date >= DATE(NOW() - INTERVAL 7 DAY)");
    foreach($query112 as $data11)
    {
      $month11[] = $data11['created_date'];
      $temperatura11[] = $data11['temp'];
    }
    foreach($query112 as $data12)
    {
      $month12[] = $data12['created_date'];
      $urov12[] = 133620-($data12['uroven']-3738);
    }
    
  }else if( isset( $_POST['monthbtn1'] )){

    $query113 = $con->query("SELECT * FROM `level_1`WHERE created_date >= DATE(NOW() - INTERVAL 30 DAY)");
    foreach($query113 as $data11)
    {
      $month11[] = $data11['created_date'];
      $temperatura11[] = $data11['temp'];
    }
    foreach($query113 as $data12)
    {
      $month12[] = $data12['created_date'];
      $urov12[] = 133620-($data12['uroven']-3738);
    }
    
  }else{
    
    $query11 = $con->query("SELECT * FROM (SELECT * FROM `level_1` ORDER BY id DESC LIMIT 30) t ORDER BY id");
    $query12 = $con->query("SELECT * FROM (SELECT * FROM `level_1` ORDER BY id DESC LIMIT 30) t ORDER BY id");
    foreach($query11 as $data11)
    {
      $month11[] = $data11['created_date'];
      $temperatura11[] = $data11['temp'];
    }
    foreach($query12 as $data12)
    {
      $month12[] = $data12['created_date'];
      $urov12[] = ($data12['uroven']-1000);
    }
  }

      ///////////////////////////////////2

  if(isset($_GET['from_date']) && isset($_GET['to_date']))
  {
    $from_date = $_GET['from_date'];
      $to_date = $_GET['to_date'];

      $toDate2 = $to_date;
      $date2 = date("Y-m-d", strtotime($toDate2.'+ 1 days'));

      $query21 = "SELECT * FROM (SELECT * FROM level_2 WHERE created_date BETWEEN '$from_date' AND '$date2' ORDER BY id DESC) t ORDER BY id";
      $query_run2 = mysqli_query($con, $query21, $query22);

      if(mysqli_num_rows($query_run2) > 0)
      {
        foreach($query_run2 as $data21)
  {
    $month21[] = $data21['created_date'];
    $temperatura21[] = $data21['temp'];
  }
  foreach($query_run2 as $data22)
  {
    $month22[] = $data22['created_date'];
    $urov22[] =  101450-($data22['uroven']-1378);
  }
      }
      else{
        
          echo "No Record Found";
      }
  }else if( isset( $_POST['daybtn2'] )){

    $query121 = $con->query("SELECT * FROM `level_2`WHERE created_date >= curdate();");
    foreach($query121 as $data21)
    {
      $month21[] = $data21['created_date'];
    $temperatura21[] = $data21['temp'];
    }
    foreach($query121 as $data22)
  {
    $month22[] = $data22['created_date'];
    $urov22[] = 101450-($data22['uroven']-1378);
  }
    
  }else if( isset( $_POST['weekbtn2'] )){

    $query122 = $con->query("SELECT * FROM `level_2`WHERE created_date >= DATE(NOW() - INTERVAL 7 DAY)");
    foreach($query122 as $data21)
    {
      $month21[] = $data21['created_date'];
    $temperatura21[] = $data21['temp'];
    }
    foreach($query122 as $data22)
  {
    $month22[] = $data22['created_date'];
    $urov22[] =101450-($data22['uroven']-1378);
  }
    
  }else if( isset( $_POST['monthbtn2'] )){

    $query123 = $con->query("SELECT * FROM `level_2`WHERE created_date >= DATE(NOW() - INTERVAL 30 DAY)");
    foreach($query123 as $data21)
    {
      $month21[] = $data21['created_date'];
    $temperatura21[] = $data21['temp'];
    }
    foreach($query123 as $data22)
  {
    $month22[] = $data22['created_date'];
    $urov22[] = 101450-($data22['uroven']-1378);
  }
    
  }else{
        $query21 = $con->query("SELECT * FROM (SELECT * FROM `level_2` ORDER BY id DESC LIMIT 10) t ORDER BY id;");
        $query22 = $con->query("SELECT * FROM (SELECT * FROM `level_2` ORDER BY id DESC LIMIT 10) t ORDER BY id;");
        foreach($query21 as $data21)
        {
          $month21[] = $data21['created_date'];
          $temperatura21[] = $data21['temp'];
        }
        foreach($query22 as $data22)
        {
          $month22[] = $data22['created_date'];
          $urov22[] =  101450-($data22['uroven']-1378);
        }
      }

          ///////////////////////////////////3

  if(isset($_GET['from_date']) && isset($_GET['to_date']))
  {
    $from_date = $_GET['from_date'];
      $to_date = $_GET['to_date'];

      $toDate3 = $to_date;
      $date3 = date("Y-m-d", strtotime($toDate3.'+ 1 days'));

      $query31 = "SELECT * FROM (SELECT * FROM level_3 WHERE temp >= 1 AND created_date BETWEEN '$from_date' AND '$date3' ORDER BY id DESC) t ORDER BY id";
      $query_run3 = mysqli_query($con, $query31, $query32);

      if(mysqli_num_rows($query_run3))
      {
        foreach($query_run3 as $data31)
  {
    $month31[] = $data31['created_date'];
    $temperatura31[] = $data31['temp'];
  }
  foreach($query_run3 as $data32)
  {
    $month32[] = $data32['created_date'];
    $urov32[] =  87910-($data32['uroven']-3100);
  }
      }
      else{
        
          echo "No Record Found";
      }
  }else if( isset( $_POST['daybtn3'] )){

    $query131 = $con->query("SELECT * FROM `level_3`WHERE temp >= 1 AND created_date >= curdate();");
    foreach($query131 as $data31)
    {
      $month31[] = $data31['created_date'];
    $temperatura31[] = $data31['temp'];
    }
    foreach($query131 as $data32)
  {
    $month32[] = $data32['created_date'];
    $urov32[] = 87910-($data32['uroven']-3100);
  }
    
  }else if( isset( $_POST['weekbtn3'] )){

    $query132 = $con->query("SELECT * FROM `level_3`WHERE temp >= 1 AND created_date >= DATE(NOW() - INTERVAL 7 DAY)");
    foreach($query132 as $data31)
    {
      $month31[] = $data31['created_date'];
    $temperatura31[] = $data31['temp'];
    }
    foreach($query132 as $data32)
  {
    $month32[] = $data32['created_date'];
    $urov32[] = 87910-($data32['uroven']-3100);
  }
    
  }else if( isset( $_POST['monthbtn3'] )){

    $query133 = $con->query("SELECT * FROM `level_3`WHERE temp >= 1 AND created_date >= DATE(NOW() - INTERVAL 30 DAY)");
    foreach($query133 as $data31)
    {
      $month31[] = $data31['created_date'];
    $temperatura31[] = $data31['temp'] ;
    }
    foreach($query133 as $data32)
  {
    $month32[] = $data32['created_date'];
    $urov32[] = 87910-($data32['uroven']-3100);
  }
    
  }else{
        $query31 = $con->query("SELECT * FROM (SELECT * FROM `level_3` WHERE temp >= 1 ORDER BY id DESC LIMIT 10) t ORDER BY id;");
        $query32 = $con->query("SELECT * FROM (SELECT * FROM `level_3` WHERE temp >= 1 ORDER BY id DESC LIMIT 10) t ORDER BY id;");
        foreach($query31 as $data31)
        {
          $month31[] = $data31['created_date'];
          $temperatura31[] = $data31['temp'] ;
        }
        foreach($query32 as $data32)
        {
          $month32[] = $data32['created_date'];
          // $urov32[] =  137120-($data32['uroven']-3738);
          $urov32[] =  87910-($data32['uroven']-3100);
        }
    }
  
      ///////////////////////////////////2
     
 ?>    
  

    <head>
      <meta charset="UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
      <title>Charts</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/reset.min.css"/>
      <link rel="stylesheet" href="css/main.css"/>
    </head>
    <body>

    <table style="width: 1500px;">

    
    <?php
    
    ?>

</table>
    <div id="app">
       
      <div class="container">
        
        <div class="app__chart app-chart">
      
          <!-- нас интересует данная часть -->
          <div class="app-chart__canvas">
            <h1 class="app__h1 app-h1">Температура и уровень воды <? $dt ?></h1>
            <canvas id="base" class="chart6"></canvas>
           
            
            <h1 class="app__h1 app-h1">Глубина 0-50</h1>
            <canvas class="chart"></canvas>
            <div>
<p id="first" onclick="first()">Показать подробнее</p>


<p id="first_yelloy"; style="display:none" onclick="first_yelloy()">Скрыть</p>

<div id="second_hide" style="display:none">

            <h1 class="app__h1 app-h1">Глубина 0-10</h1>
            <canvas class="chart1"></canvas>
            <h1 class="app__h1 app-h1">Глубина 10-20</h1>
            <canvas class="chart2"></canvas>
            <h1 class="app__h1 app-h1">Глубина 20-30</h1>
            <canvas class="chart3"></canvas>
            <h1 class="app__h1 app-h1">Глубина 30-40</h1>
            <canvas class="chart4"></canvas>
            <h1 class="app__h1 app-h1">Глубина 40-50</h1>
            <canvas class="chart5"></canvas>

</div>

</div>
         
          </div>
          </div>
  
        </div>
      </div>
    </div>
    <script>

function first() {

document.getElementById("second_hide").setAttribute("style", "opacity:1; transition: 1s; height: 100%;");

document.getElementById("first").setAttribute("style", "display: none");

document.getElementById("first_yelloy").setAttribute("style", "display: block");

}

function first_yelloy() {

document.getElementById("second_hide").setAttribute("style", "display: none");

document.getElementById("first_yelloy").setAttribute("style", "display: none");

document.getElementById("first").setAttribute("style", "display: block");

}

</script>
    
    <script src="js/chart.min.js"></script> <!-- подключаем плагин -->
    
    <script>
     
     document.addEventListener('DOMContentLoaded', () => {
     new Chart(
       document.querySelector('.chart6'),
       {
         type: 'line',
         data: {
           labels: labels11,
           datasets: [
             {
               label: 'Т воды',
               data: <?php echo json_encode($temperatura11) ?>,
               borderColor: 'red',
               borderWidth: 4,
               backgroundColor: 'red',
               cubicInterpolationMode: 'monotone',
             },
             // добавили еще один график с другими значениями и цветом
             {
               label: 'Ур воды ',
               data: <?php echo json_encode($urov12) ?>,
               borderColor: 'blue',
               borderWidth: 4,
               backgroundColor: 'blue',
               cubicInterpolationMode: 'monotone',
               yAxisID:'nd'
             },
           ]
         },
         options: {
           scales: {
            x: {
               title:{
                display: true,
                text: 'Время измерения'
               }
              },
             y: {
               beginAtZero: true,
               title:{
                display: true,
                text: 'Т воды (°C)'
               }
              },
            nd: {
              beginAtZero: true,
              position: 'right',
              title:{
                display: true,
                text: 'Уровень воды (См)'
               }
            }
           }
         }
       }
     );

     })
     
 </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
        new Chart(
          document.querySelector('.chart'),
          {
            type: 'line',
            data: {
              labels: ['III дек Апрель', 'I дек Мая', 'II дек Мая', 'III дек Мая', 'I дек Июня', 'II дек Июня', 'III дек Июня','I дек Июля', 'II дек Июля', 'III дек Июля', 'I дек Августа', 'II дек Августа', 'III дек Августа'],
              datasets: [
                {
                  label: 'Влажность почвы 0 - 10',
                  data: [ 30,35,40,45,50,55,60,65,70,75,80,85,90],
                  borderColor: 'Aqua',
                  borderWidth: 4,
                  backgroundColor: 'Aqua',
                  cubicInterpolationMode: 'monotone',
                  
                },
                // добавили еще один график с другими значениями и цветом
                {
                  label: 'Т почвы 0 - 10',
                  data: [3,5,7,8,10,11,15,13,17,18,20,19,23],
                  borderColor: 'LightSalmon',
                  borderWidth: 4,
                  backgroundColor: 'LightSalmon',
                  cubicInterpolationMode: 'monotone',
                  yAxisID:'sd',
                  borderDash: [5, 5],
                },
                {
                  label: 'Влажность почвы 10 - 20',
                  data: [ 25,30,35,40,45,50,55,60,65,70,75,80,85],
                  borderColor: 'Turquoise',
                  borderWidth: 4,
                  backgroundColor: 'Turquoise',
                  cubicInterpolationMode: 'monotone',
                },
                // добавили еще один график с другими значениями и цветом
                {
                  label: 'Т почвы 10 - 20',
                  data: [0,2,4,5,7,8,7,7,9,12,13,15,17],
                  borderColor: 'Coral',
                  borderWidth: 4,
                  backgroundColor: 'Coral',
                  cubicInterpolationMode: 'monotone',
                  yAxisID:'sd',
                  borderDash: [5, 5],
                },
                {
                  label: 'Влажность почвы 20 - 30',
                  data: [ 20,25,30,35,40,45,50,55,60,65,70,75,80],
                  borderColor: 'DarkTurquoise',
                  borderWidth: 4,
                  backgroundColor: 'DarkTurquoise',
                  cubicInterpolationMode: 'monotone',
                },
                // добавили еще один график с другими значениями и цветом
                {
                  label: 'Т почвы 20 - 30',
                  data: [0,0,1,2,2,3,4,5,7,9,11,12,15],
                  borderColor: 'Tomato',
                  borderWidth: 4,
                  backgroundColor: 'Tomato',
                  cubicInterpolationMode: 'monotone',
                  yAxisID:'sd',
                  borderDash: [5, 5],
                },
                {
                  label: 'Влажность почвы 30 - 40',
                  data: [ 15,20,25,30,35,40,45,50,55,60,65,70,75,80],
                  borderColor: 'SkyBlue',
                  borderWidth: 4,
                  backgroundColor: 'SkyBlue',
                  cubicInterpolationMode: 'monotone',
                },
                // добавили еще один график с другими значениями и цветом
                {
                  label: 'Т почвы 30 - 40',
                  data: [0,0,0,1,1,2,3,4,5,6,7,8,9],
                  borderColor: 'DarkOrange',
                  borderWidth: 4,
                  backgroundColor: 'DarkOrange',
                  cubicInterpolationMode: 'monotone',
                  yAxisID:'sd',
                  borderDash: [5, 5],
                },
                {
                  label: 'Влажность почвы 40 - 50',
                  data: [ 10, 15,20,25,30,35,40,45,50,55,60,65,70,75],
                  borderColor: 'DeepSkyBlue',
                  borderWidth: 4,
                  backgroundColor: 'DeepSkyBlue',
                  cubicInterpolationMode: 'monotone',
                },
                // добавили еще один график с другими значениями и цветом
                {
                  label: 'Т почвы 40 - 50',
                  data: [0,0,0,0,1,1,2,2,3,3,4,4,5],
                  borderColor: 'orange',
                  borderWidth: 4,
                  backgroundColor: 'orange',
                  cubicInterpolationMode: 'monotone',
                  yAxisID:'sd',
                  borderDash: [5, 5],
                },
                
              ]
            },
            options: {
              scales: {
                y: {
                  beginAtZero: true
                },
                sd: {
                beginAtZero: true,
                position: 'right',
                title:{
                  display: true,
                  text: 'Т почвы (°C)'
               }
            }
              }
            }
          }
        );

        })
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
        new Chart(
          document.querySelector('.chart1'),
          {
            type: 'line',
            data: {
              labels: ['III дек Апрель', 'I дек Мая', 'II дек Мая', 'III дек Мая', 'I дек Июня', 'II дек Июня', 'III дек Июня','I дек Июля', 'II дек Июля', 'III дек Июля', 'I дек Августа', 'II дек Августа', 'III дек Августа'],
              datasets: [
                {
                  label: 'Влажность почвы 0 - 10',
                  data: [ 30,35,40,45,50,55,60,65,70,75,80,85,90],
                  borderColor: 'DeepSkyBlue',
                  borderWidth: 4,
                  backgroundColor: 'DeepSkyBlue',
                  cubicInterpolationMode: 'monotone',
                },
                // добавили еще один график с другими значениями и цветом
                {
                  label: 'Т почвы 0 - 10',
                  data: [3,5,7,8,10,11,15,13,17,18,20,19,23],
                  borderColor: 'orange',
                  borderWidth: 4,
                  backgroundColor: 'orange',
                  cubicInterpolationMode: 'monotone',
                },
                
              ]
            },
            options: {
              scales: {
                y: {
                  beginAtZero: true
                }
              }
            }
          }
        );

        })
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
        new Chart(
          document.querySelector('.chart2'),
          {
            type: 'line',
            data: {
              labels: ['III дек Апрель', 'I дек Мая', 'II дек Мая', 'III дек Мая', 'I дек Июня', 'II дек Июня', 'III дек Июня','I дек Июля', 'II дек Июля', 'III дек Июля', 'I дек Августа', 'II дек Августа', 'III дек Августа'],
              datasets: [
                {
                  label: 'Влажность почвы 10 - 20',
                  data: [ 25,30,35,40,45,50,55,60,65,70,75,80,85],
                  borderColor: 'DeepSkyBlue',
                  borderWidth: 4,
                  backgroundColor: 'DeepSkyBlue',
                  cubicInterpolationMode: 'monotone',
                },
                // добавили еще один график с другими значениями и цветом
                {
                  label: 'Т почвы 10 - 20',
                  data: [0,2,4,5,7,8,7,7,9,12,13,15,17],
                  borderColor: 'orange',
                  borderWidth: 4,
                  backgroundColor: 'orange',
                  cubicInterpolationMode: 'monotone',
                },
              ]
            },
            options: {
              scales: {
                y: {
                  beginAtZero: true
                }
              }
            }
          }
        );

        })
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
        new Chart(
          document.querySelector('.chart3'),
          {
            type: 'line',
            data: {
              labels: ['III дек Апрель', 'I дек Мая', 'II дек Мая', 'III дек Мая', 'I дек Июня', 'II дек Июня', 'III дек Июня','I дек Июля', 'II дек Июля', 'III дек Июля', 'I дек Августа', 'II дек Августа', 'III дек Августа'],
              datasets: [
                {
                  label: 'Влажность почвы 20 - 30',
                  data: [ 20,25,30,35,40,45,50,55,60,65,70,75,80],
                  borderColor: 'DeepSkyBlue',
                  borderWidth: 4,
                  backgroundColor: 'DeepSkyBlue',
                  cubicInterpolationMode: 'monotone',
                },
                // добавили еще один график с другими значениями и цветом
                {
                  label: 'Т почвы 20 - 30',
                  data: [0,0,1,2,2,3,4,5,7,9,11,12,15],
                  borderColor: 'orange',
                  borderWidth: 4,
                  backgroundColor: 'orange',
                  cubicInterpolationMode: 'monotone',
                },
              ]
            },
            options: {
              scales: {
                y: {
                  beginAtZero: true
                }
              }
            }
          }
        );

        })
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
        new Chart(
          document.querySelector('.chart4'),
          {
            type: 'line',
            data: {
              labels: ['III дек Апрель', 'I дек Мая', 'II дек Мая', 'III дек Мая', 'I дек Июня', 'II дек Июня', 'III дек Июня','I дек Июля', 'II дек Июля', 'III дек Июля', 'I дек Августа', 'II дек Августа', 'III дек Августа'],
              datasets: [
                {
                  label: 'Влажность почвы 30 - 40',
                  data: [ 15,20,25,30,35,40,45,50,55,60,65,70,75,80],
                  borderColor: 'DeepSkyBlue',
                  borderWidth: 4,
                  backgroundColor: 'DeepSkyBlue',
                  cubicInterpolationMode: 'monotone',
                },
                // добавили еще один график с другими значениями и цветом
                {
                  label: 'Т почвы 30 - 40',
                  data: [0,0,0,1,1,2,3,4,5,6,7,8,9],
                  borderColor: 'orange',
                  borderWidth: 4,
                  backgroundColor: 'orange',
                  cubicInterpolationMode: 'monotone',
                },
              ]
            },
            options: {
              scales: {
                y: {
                  beginAtZero: true
                }
              }
            }
          }
        );

        })
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
        new Chart(
          document.querySelector('.chart5'),
          {
            type: 'line',
            data: {
              labels: ['III дек Апрель', 'I дек Мая', 'II дек Мая', 'III дек Мая', 'I дек Июня', 'II дек Июня', 'III дек Июня','I дек Июля', 'II дек Июля', 'III дек Июля', 'I дек Августа', 'II дек Августа', 'III дек Августа'],
              datasets: [
                {
                  label: 'Влажность почвы 40 - 50',
                  data: [ 10, 15,20,25,30,35,40,45,50,55,60,65,70,75],
                  borderColor: 'DeepSkyBlue',
                  borderWidth: 4,
                  backgroundColor: 'DeepSkyBlue',
                  cubicInterpolationMode: 'monotone',
                },
                // добавили еще один график с другими значениями и цветом
                {
                  label: 'Т почвы 40 - 50',
                  data: [0,0,0,0,1,1,2,2,3,3,4,4,5],
                  borderColor: 'orange',
                  borderWidth: 4,
                  backgroundColor: 'orange',
                  cubicInterpolationMode: 'monotone',
                },
              ]
            },
            options: {
              scales: {
                y: {
                  beginAtZero: true
                }
              }
            }
          }
        );

        })
    </script>
   
    
  <script>
        // === include 'setup' then 'config' above ===
        const labels11 = <?php echo json_encode($month11) ?>;
        const data11 = {
          labels: labels11,
          datasets: [{
            label: 'Температура',
            data: <?php echo json_encode($temperatura11) ?>,
            backgroundColor: [
              'rgba(0,0,0)',
              'rgba(0,0,0)',
              'rgba(0,0,0)',
              'rgba(0,0,0)',
              'rgba(0,0,0)',
              'rgba(0,0,0)',
              'rgba(0,0,0)'
            ],
            borderColor: [
              'rgb(255,0,0)',
              'rgb(255,0,0)',
              'rgb(255,0,0)',
              'rgb(255,0,0)',
              'rgb(255,0,0)',
              'rgb(255,0,0)',
              'rgb(255,0,0)'
            ],
            borderWidth: 1
          }]
        };

        const labels12 = <?php echo json_encode($month12) ?>;
        const data12 = {
          labels: labels12,
          datasets: [{
            label: 'Уровень воды',
            data: <?php echo json_encode($urov12) ?>,
            backgroundColor: [
              'rgba(0,0,255)',
              'rgba(0,0,255)',
              'rgba(0,0,255)',
              'rgba(0,0,255)',
              'rgba(0,0,255)',
              'rgba(0,0,255)',
              'rgba(0,0,255)'
            ],
            borderColor: [
              'rgb(0,255,255)',
              'rgb(0,255,255)',
              'rgb(0,255,255)',
              'rgb(0,255,255)',
              'rgb(0,255,255)',
              'rgb(0,255,255)',
              'rgb(0,255,255)'
            ],
            borderWidth: 1
          }]
        };

        const labels21 = <?php echo json_encode($month21) ?>;
        const data21 = {
          labels: labels21,
          datasets: [{
            label: 'Температура',
            data: <?php echo json_encode($temperatura21) ?>,
            backgroundColor: [
              'rgba(0,0,0)',
              'rgba(0,0,0)',
              'rgba(0,0,0)',
              'rgba(0,0,0)',
              'rgba(0,0,0)',
              'rgba(0,0,0)',
              'rgba(0,0,0)'
            ],
            borderColor: [
              'rgb(255,0,0)',
              'rgb(255,0,0)',
              'rgb(255,0,0)',
              'rgb(255,0,0)',
              'rgb(255,0,0)',
              'rgb(255,0,0)',
              'rgb(255,0,0)'
            ],
            borderWidth: 1
          }]
        };

        const labels22 = <?php echo json_encode($month22) ?>;
        const data22 = {
          labels: labels22,
          datasets: [{
            label: 'Уровень воды',
            data: <?php echo json_encode($urov22) ?>,
            backgroundColor: [
              'rgba(0,0,255)',
              'rgba(0,0,255)',
              'rgba(0,0,255)',
              'rgba(0,0,255)',
              'rgba(0,0,255)',
              'rgba(0,0,255)',
              'rgba(0,0,255)'
            ],
            borderColor: [
              'rgb(0,255,255)',
              'rgb(0,255,255)',
              'rgb(0,255,255)',
              'rgb(0,255,255)',
              'rgb(0,255,255)',
              'rgb(0,255,255)',
              'rgb(0,255,255)'
            ],
            borderWidth: 1
          }]
        };

        const labels31 = <?php echo json_encode($month31) ?>;
        const data31 = {
          labels: labels31,
          datasets: [{
            label: 'Температура',
            data: <?php echo json_encode($temperatura31 ) ?>,
            backgroundColor: [
              'rgba(0,0,0)',
              'rgba(0,0,0)',
              'rgba(0,0,0)',
              'rgba(0,0,0)',
              'rgba(0,0,0)',
              'rgba(0,0,0)',
              'rgba(0,0,0)'
            ],
            borderColor: [
              'rgb(255,0,0)',
              'rgb(255,0,0)',
              'rgb(255,0,0)',
              'rgb(255,0,0)',
              'rgb(255,0,0)',
              'rgb(255,0,0)',
              'rgb(255,0,0)'
            ],
            borderWidth: 1
          }]
        };

        const labels32 = <?php echo json_encode($month32) ?>;
        const data32 = {
          labels: labels32,
          datasets: [{
            label: 'Уровень воды',
            data: <?php echo json_encode($urov32) ?>,
            backgroundColor: [
              'rgba(0,0,255)',
              'rgba(0,0,255)',
              'rgba(0,0,255)',
              'rgba(0,0,255)',
              'rgba(0,0,255)',
              'rgba(0,0,255)',
              'rgba(0,0,255)'
            ],
            borderColor: [
              'rgb(0,255,255)',
              'rgb(0,255,255)',
              'rgb(0,255,255)',
              'rgb(0,255,255)',
              'rgb(0,255,255)',
              'rgb(0,255,255)',
              'rgb(0,255,255)'
            ],
            borderWidth: 1
          }]
        };

        const config11 = {
          type: 'line',
          data: data11,
          options: {
          
            
          },
        };
        const config12 = {
          type: 'line',
          data: data12,
          options: {
          
          },
        };
        const config21 = {
          type: 'line',
          data: data21,
          options: {
          
          },
        };
        const config22 = {
          type: 'line',
          data: data22,
          options: {
        
          },
        };
        const config31 = {
          type: 'line',
          data: data31,
          options: {
          
          },
        };
        const config32 = {
          type: 'line',
          data: data32,
          options: {
        
          },
        };

        var myChart = new Chart(
          document.getElementById('base11'),
          config11
        );
        var myChart = new Chart(
          document.getElementById('base12'),
          config12
        );
        var myChart = new Chart(
          document.getElementById('base21'),
          config21
        );
        var myChart = new Chart(
          document.getElementById('base22'),
          config22
        );
        var myChart = new Chart(
          document.getElementById('base31'),
          config31
        );
        var myChart = new Chart(
          document.getElementById('base32'),
          config32
        );
</script>
    </body>
  </html>
<div class="container">
    <canvas id="myChart" width="600" height="400"></canvas>
</div>