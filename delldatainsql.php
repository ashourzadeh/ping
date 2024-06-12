<?php
// ini_set('display_errors', 0);
include 'connection.php';
//////////////////////////////////////

$q0 = $_REQUEST["ipid"];
$noe0 = $_REQUEST["noe"];

if($noe0 == "ANT"){
$sql = "DELETE FROM antens WHERE id0='$q0'";

if ($conn->query($sql) === TRUE) {echo "حذف شد";echo '<meta http-equiv="refresh" content="1">';} else {
	echo "---";
  echo '<meta http-equiv="refresh" content="1">';
}
 $conn->close();
}//$noe0 == "ANT"

if($noe0 == "DVR"){
$sql = "DELETE FROM dvrs WHERE id0='$q0'";

if ($conn->query($sql) === TRUE) {echo "حذف شد";echo '<meta http-equiv="refresh" content="1">';} else {
	echo "---";
  echo '<meta http-equiv="refresh" content="1">';
}
 $conn->close();	
}//$noe0 == "DVR"

if($noe0 == "CAM"){
$sql = "DELETE FROM cams WHERE id0='$q0'";

if ($conn->query($sql) === TRUE) {echo "ذخیره شد";echo '<meta http-equiv="refresh" content="1">';} else {
  //echo "0 results";
//header("location:dashboard.php");
	echo "فیلد تکراری";
}
 $conn->close();	
}//$noe0 == "CAM"

?>