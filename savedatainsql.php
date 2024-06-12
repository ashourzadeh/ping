<?php
// ini_set('display_errors', 0);
include 'connection.php';
//////////////////////////////////////

$noe0 = $_REQUEST["noead"];
$q1 = $_REQUEST["ipname0"];
$q2 = $_REQUEST["ipall"];
if($noe0 == "Ant"){
$sql = "INSERT INTO antens (name0, ip0)
VALUES ('".$q1."', '".$q2."')";

	if ($conn->query($sql) === TRUE) {echo "ذخیره شد";} else {
	  //echo "0 results";
	//header("location:dashboard.php");
		echo "فیلد تکراری";
	}
 $conn->close();
}//$noe0 == "Ant"

if($noe0 == "DVR"){
$sql = "INSERT INTO dvrs (name0, ip0)
VALUES ('".$q1."', '".$q2."')";

	if ($conn->query($sql) === TRUE) {echo "ذخیره شد";} else {
	  //echo "0 results";
	//header("location:dashboard.php");
		echo "فیلد تکراری";
	}
 $conn->close();	
}//$noe0 == "DVR"

if($noe0 == "CAM"){
$sql = "INSERT INTO cams (name0, ip0)
VALUES ('".$q1."', '".$q2."')";

	if ($conn->query($sql) === TRUE) {echo "ذخیره شد";} else {
	  //echo "0 results";
	//header("location:dashboard.php");
		echo "فیلد تکراری";
	}
 $conn->close();	
}//$noe0 == "CAM"

?>