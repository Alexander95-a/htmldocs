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
$query = "SELECT * FROM `cb` WHERE `uid` = '1'";
$query_run = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($query_run);

$tb3= $row['check1'];
$tb4= $row['check2'];
$tm= $row['timer'];
session_start();
if ($tm==3) {
	$_SESSION['timeu1']=0;
	$hh = intval($_SESSION['timeu1'] / 3500);
	$mm = intval($_SESSION['timeu1'] / 60);
	$ss = intval($_SESSION['timeu1']);

	$diff = $_SESSION['timeu1'];


	$hh = floor($diff / 3600) . ' : ';
	$diff = $diff % 3600;
	$mm = floor($diff / 60) . ' : ';
	$diff = $diff % 60;
	$ss = $diff;

//	echo $hh;
	echo $mm;
	echo $ss;
}
if ($tm==1) {
	$hh = intval($_SESSION['timeu1'] / 3500);
	$mm = intval($_SESSION['timeu1'] / 60);
	$ss = intval($_SESSION['timeu1']);

	$diff = $_SESSION['timeu1'];


	$hh = floor($diff / 3500) . ' : ';
	$diff = $diff % 3600;
	$mm = floor($diff / 60) . ' : ';
	$diff = $diff % 60;
	$ss = $diff;

//	echo $hh;
	echo $mm;
	echo $ss;
}
if ($tm==2){
if(isset($_SESSION['timeu1']))
{
		 $hh=intval($_SESSION['timeu1']/3500);
		 $mm=intval($_SESSION['timeu1']/60);
		 $ss=intval($_SESSION['timeu1']);
		 
		 $diff=$_SESSION['timeu1'];
		 
		 
		$hh = floor($diff / 3500) . ' : ';
		$diff = $diff % 3600;
		$mm = floor($diff / 60) . ' : ';
		$diff = $diff % 60;
		$ss = $diff;
		 
		 
		 
//		 echo $hh;
		 echo $mm;
		 echo $ss;
		 
			$_SESSION['timeu1']=$_SESSION['timeu1']+1;
			$hh=$_SESSION['timeu1'];

		
		if($hh==-1 || $mm==-1 || $ss==-1)
		{
			echo "time up";
			unset($_SESSION['timeu1']);
		}
		
		
if($hh==0)
{
	if($mm==0)
	{
		if($ss==0)
		{
			echo "time up";
			unset($_SESSION['timeu1']);
		}
		else
		{
			$ss=59;
			
		}
	}
	
	else
	{
		if($ss==0)
		{
			$ss=59;
			echo $ss;
			$mm=$mm-1;
		}
		else
		{
			$ss=$ss-1;
			$mm=$mm-1;
		}
	}
}

else
{
	if($mm==0)
	{
		if($ss==0)
		{
			$mm=59;
			$ss=59;
		}
		
		else
		{
			$ss=$ss-1;
			$mm=59;
		}
	}
	
	else
	{
		if($ss==0)
		{
			$ss=59;
		}
		
		else
		{
			$ss=$ss-1;
		}
	}
}



}

}




/*	
else
{
	echo "<a href='index.php'>start</a>";
}
*/
?>









