<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/css/table.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/hammerjs@2.0.8"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-zoom/1.2.1/chartjs-plugin-zoom.js" integrity="sha512-7X7B4dUsqfSxUe5m8NELendyUKx+xwZg4wSFECgBIPGaMSLS6e6oDGkxfJsFOlPADqIwkrP/pI9PihypuWFbEw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <title>itech</title>
</head>
<body>

<nav class="navbar navbar-light bg-light fixed-top">

  <div class="container-fluid">
    
        <div class="navlinks">
            <ul>
                <li><a href="/chartTemp.php">Главная</a></li>
            </ul>
        </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width: 250px;">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Меню</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" href="/table.php">ш/р N 2 Хоробутской СЛО (НПУ - 137,00 м)</a>
            <a class="nav-link" href="/table2.php">Суон-Юрях (НПУ - 101,00 м)</a>
            <a class="nav-link" href="/table3.php">Тулагино (НПУ - 88,75 м)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/index.php">Выйти</a>
          </li>
        </ul>
      </div>
    </div> 
  </div>
</nav>

<?php 
$DB_HOST = "localhost";

// REPLACE with your Database name
$DB_NAME = "viewfim_level";
// REPLACE with Database user
$DB_USERNAME = "root";
// REPLACE with Database user password
$DB_PASSWORD = "";

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
          $urov12[] = ($data12['uroven']);
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
    
    $query11 = $con->query("SELECT * FROM (SELECT * FROM `level_1` ORDER BY id DESC LIMIT 10) t ORDER BY id");
    $query12 = $con->query("SELECT * FROM (SELECT * FROM `level_1` ORDER BY id DESC LIMIT 10) t ORDER BY id");
    foreach($query11 as $data11)
    {
      $month11[] = $data11['created_date'];
      $temperatura11[] = $data11['temp'];
    }
    foreach($query12 as $data12)
    {
      $month12[] = $data12['created_date'];
      $urov12[] = 133620-($data12['uroven']-3738);
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
?>

<h2 align="center" class="baseName">ш/р N 2 Хоробутской СЛО (НПУ - 137,00 м)</h2>
<div class="chartbase1">
  <canvas id="base11"></canvas>
</div>
<div class="chartbase1">
  <canvas id="base12"></canvas>
</div>
<div class="Station1" >
<form action="" method="GET">
                            <div class="row" >
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Начало</label>
                                        <input type="date" name="from_date" data="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Конец</label>
                                        
                                        <input type="date" name="to_date"data="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" value="" class="form-control"> 
                                    </div>
                                </div>
                                <div class="col-md-4" >
                                    <div class="form-group" style="display: inline-block;">
                                        <label>Сортировать</label> <br>
                                      <button type="submit" class="btn btn-primary">Обновить</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form style="float: left;">
   <div class="row">
      <div class="col-md-4">
        <div class="form-group">
           <label >Фильтр</label> <br>
           <button class="btn btn-danger" onclick="window.location.href='chartTemp.php'">сброс</button>
        </div>
        </div>
       </div>
       </form>
                        <form method="POST" action="" style="float: left; margin-left:10px;">
   <div class="row">
      <div class="col-md-4">
        <div class="form-group">
        <label > </label> <br>
           <input type="submit" name="daybtn1" class="btn btn-secondary" value="День" />
        </div>
       </div>
     </div>
 </form>
 <form method="POST" action="" style="float: left; margin-left:10px;">
   <div class="row">
      <div class="col-md-4">
        <div class="form-group">
           <label > </label> <br>
           <input type="submit" name="weekbtn1" class="btn btn-secondary" value="Неделя" />
        </div>
       </div>
     </div>
 </form>
 <form method="POST" action="" style="float: left; margin-left:10px;">
   <div class="row">
      <div class="col-md-4">
        <div class="form-group">
        <label > </label> <br>
           <input type="submit" name="monthbtn1" class="btn btn-secondary" value="Месяц" />
        </div>
       </div>
     </div>
 </form>
</div>
<h2 align="center" class="baseName" >Суон-Юрях (НПУ - 101,00 м)</h2>
<div class="chartbase1">
  <canvas id="base21"></canvas>
</div>
<div class="chartbase1">
  <canvas id="base22"></canvas>
</div>
<div class="Station1" >
<form action="" method="GET">
                            <div class="row" >
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Начало</label>
                                        <input type="date" name="from_date" data="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Конец</label>
                                        <input type="date" name="to_date"data="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4" >
                                    <div class="form-group" style="display: inline-block;">
                                        <label>Сортировать</label> <br>
                                      <button type="submit" class="btn btn-primary">Обновить</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <form style="float: left;">
   <div class="row">
      <div class="col-md-4">
        <div class="form-group">
           <label >Фильтр</label> <br>
           <button class="btn btn-danger" onclick="window.location.href='chartTemp.php'">сброс</button>
        </div>
        </div>
       </div>
       </form>

                        <form method="POST" action="" style="float: left; margin-left:10px;">
   <div class="row">
      <div class="col-md-4">
        <div class="form-group">
        <label > </label> <br>
           <input type="submit" name="daybtn2" class="btn btn-secondary" value="День" />
        </div>
       </div>
     </div>
 </form>
 <form method="POST" action="" style="float: left; margin-left:10px;">
   <div class="row">
      <div class="col-md-4">
        <div class="form-group">
           <label > </label> <br>
           <input type="submit" name="weekbtn2" class="btn btn-secondary" value="Неделя" />
        </div>
       </div>
     </div>
 </form>
 <form method="POST" action="" style="float: left; margin-left:10px;">
   <div class="row">
      <div class="col-md-4">
        <div class="form-group">
        <label > </label> <br>
           <input type="submit" name="monthbtn2" class="btn btn-secondary" value="Месяц" />
        </div>
       </div>
     </div>
 </form>
</div>
<h2 align="center" class="baseName">Тулагино (НПУ - 88,75 м)</h2>
<div class="chartbase1">
  <canvas id="base31"></canvas>
</div>
<div class="chartbase1">
  <canvas id="base32"></canvas>
</div>
<div class="Station1" >
<form action="" method="GET">
                            <div class="row" >
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Начало</label>
                                        <input type="date" name="from_date" data="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Конец</label>
                                        <input type="date" name="to_date"data="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4" >
                                    <div class="form-group" style="display: inline-block;">
                                        <label>Сортировать</label> <br>
                                      <button type="submit" class="btn btn-primary">Обновить</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form style="float: left;">
   <div class="row">
      <div class="col-md-4">
        <div class="form-group">
           <label >Фильтр</label> <br>
           <button class="btn btn-danger" onclick="window.location.href='chartTemp.php'">сброс</button>
        </div>
        </div>
       </div>
       </form>
                        <form method="POST" action="" style="float: left; margin-left:10px;">
   <div class="row">
      <div class="col-md-4">
        <div class="form-group">
        <label > </label> <br>
           <input type="submit" name="daybtn3" class="btn btn-secondary" value="День" />
        </div>
       </div>
     </div>
 </form>
 <form method="POST" action="" style="float: left; margin-left:10px;">
   <div class="row">
      <div class="col-md-4">
        <div class="form-group">
           <label > </label> <br>
           <input type="submit" name="weekbtn3" class="btn btn-secondary" value="Неделя" />
        </div>
       </div>
     </div>
 </form>
 <form method="POST" action="" style="float: left; margin-left:10px;">
   <div class="row">
      <div class="col-md-4">
        <div class="form-group">
        <label > </label> <br>
           <input type="submit" name="monthbtn3" class="btn btn-secondary" value="Месяц" />
        </div>
       </div>
     </div>
 </form>
</div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</body>
</html>
<div class="chartMenu">
      <p>WWW.CHARTJS3.COM (Chart JS <span id="chartVersion"></span>)</p>
    </div>
    <div class="chartCard">
      <div class="chartBox">
        <canvas id="myChart"></canvas>
      </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
    <script>
    // setup 
    const data = {
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
      datasets: [
        {
        label: 'Weekly Sales',
        data: [18, 12, 6, 9, 12, 3, 9],
        backgroundColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(0, 0, 0, 0.2)'
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1
      },
      {
        label: 'Weekly ',
        data: [146, 164, 66, 96, 166, 36, 96],
        backgroundColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(0, 0, 0, 0.2)'
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1,
        
      }
    ]
    };

    // config 
    const config = {
      type: 'line',
      data,
      options: {
        scales: {
          y: {
            beginAtZero: true
          },
          nd: {
            beginAtZero: true,
            position: 'right'
          }
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );

    // Instantly assign Chart.js version
    const chartVersion = document.getElementById('chartVersion');
    chartVersion.innerText = Chart.version;
    </script>