<?php
// ini_set('display_errors', 0);
include 'connection.php';
//////////////////////////////////////

$q0 = $_REQUEST["ipid"];
$q1 = $_REQUEST["name0"];
$q2 = $_REQUEST["ip0"];
$noe0 = $_REQUEST["noe"];

if($noe0 == "ANT"){
$sql = "UPDATE antens SET name0='".$q1."', ip0='".$q2."' WHERE id0='$q0'";
if ($conn->query($sql) === TRUE) {echo "تغییرات انجام شد";echo '<meta http-equiv="refresh" content="1">';} else {
	echo "--";
  echo '<meta http-equiv="refresh" content="1">';
}
 $conn->close();	
}


if($noe0 == "DVR"){
$sql = "UPDATE dvrs SET name0='".$q1."', ip0='".$q2."' WHERE id0='$q0'";
if ($conn->query($sql) === TRUE) {echo "تغییرات انجام شد";echo '<meta http-equiv="refresh" content="1">';} else {
	echo "--";
  echo '<meta http-equiv="refresh" content="1">';
}
 $conn->close();	
}


if($noe0 == "CAM"){
$sql = "UPDATE cams SET name0='".$q1."', ip0='".$q2."' WHERE id0='$q0'";
if ($conn->query($sql) === TRUE) {echo "تغییرات انجام شد";echo '<meta http-equiv="refresh" content="1">';} else {
	echo "--";
  echo '<meta http-equiv="refresh" content="1">';
}
 $conn->close();	
}

?>