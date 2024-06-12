<?php
// ini_set('display_errors', 0);
include 'connection.php';
include 'jdf.php';
//////////////////////////////////////
$port = 80;
$timeout = 1;
$colorOnline = "#7bc901";
$colorOffline = "#ff4848";
//////////////////////////////////////////////////////////
$out=jdate('Y / F / j');
$timeoutshamsi_H=date("H") - 1;
$timeoutshamsi_M=date("i");
$timeoutshamsi_S=date("s");
$timeoutshamsi=$timeoutshamsi_H.":".$timeoutshamsi_M.":".$timeoutshamsi_S;
/////////////////////////////////////////////////////////
if (strpos($out, "خرداد") !== false) {
$new_string = str_replace("خرداد", "۳", $out);
}
if (strpos($out, "تیر") !== false) {
$new_string = str_replace("تیر", "۴", $out);
}
if (strpos($out, "مرداد") !== false) {
$new_string = str_replace("مرداد", "۵", $out);
}
if (strpos($out, "شهریور") !== false) {
$new_string = str_replace("شهریور", "۶", $out);
}
if (strpos($out, "مهر") !== false) {
$new_string = str_replace("مهر", "۷", $out);
}
if (strpos($out, "آبان") !== false) {
$new_string = str_replace("آبان", "۸", $out);
}
if (strpos($out, "آذر") !== false) {
$new_string = str_replace("آذر", "۹", $out);
}
if (strpos($out, "دی") !== false) {
$new_string = str_replace("دی", "۱۰", $out);
}
if (strpos($out, "بهمن") !== false) {
$new_string = str_replace("بهمن", "۱۱", $out);
}
if (strpos($out, "اسفند") !== false) {
$new_string = str_replace("اسفند", "۱۲", $out);
}
if (strpos($out, "فروردین") !== false) {
$new_string = str_replace("فروردین", "۱", $out);
}
if (strpos($out, "اردیبهشت") !== false) {
$new_string = str_replace("اردیبهشت", "۲", $out);
}
?>

<table id="tblanten">
  <thead>
    <tr>
      <th>نام</th>
      <th>IP</th>
      <th>تاریخ قطع</th>
    </tr>
  </thead>
  <tbody>
<td>
<?php
$allmedateandtime = $new_string." - ".$timeoutshamsi;
$dattimeqati = date('Y-m-d');
$timedatqati = date('H:i:s');
$sql = "SELECT * FROM antens";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
if(($fp = fsockopen($row["ip0"], $port, $errno, $errstr, $timeout)) === false) {
?>

<?php
if($dattimeqati >= $row["dateofqati0"]){
    $time1 = strtotime($row["timeofqati0"]);
    $time2 = strtotime($timedatqati);
    $diff = abs($time2 - $time1);
    $hours = floor($diff / 3600);
    $minutes = floor(($diff % 3600) / 60);
    if ($minutes >= 20) {
      $rang = 1;
     }else{
      $rang = 0;
     }
}
?>
        <td <?php if($rang == 1){ echo 'style="background-color: #ff5b5b;color: #fff;"'; } ?> ><?php  echo $row["name0"];   ?></td>
        <td><?php  echo $row["ip0"];   ?></td>

   
        <td id="tarikhtd">
        <?php
            if($row["qati0"] == "0"){
$sqlupdate1 = "UPDATE antens SET dateofqati0='".$dattimeqati."',timeofqati0='".$timedatqati."',tarikhqat0='".$allmedateandtime."', qati0=1 WHERE id0='".$row["id0"]."'";
if ($conn->query($sqlupdate1) === TRUE) {}
            }//QATI = 0
        echo $row["tarikhqat0"];
       ?>
        </td>
        <td id="tarikhtd"><?php echo $allmedateandtime; ?></td>
    </tr>
<?php

}else{
    fclose($fp);

            if($row["qati0"] == "1"){
$sqlupdate1 = "UPDATE antens SET tarikhvasl0='".$allmedateandtime."', qati0=0 WHERE id0='".$row["id0"]."'";
if ($conn->query($sqlupdate1) === TRUE) {}

if($dattimeqati >= $row["dateofqati0"]){

$time1 = strtotime($row["timeofqati0"]);
$time2 = strtotime($timedatqati);

$diff = abs($time2 - $time1);
$hours = floor($diff / 3600);
$minutes = floor(($diff % 3600) / 60);

if ($minutes >= 30) {
$sqlinsert1 = "INSERT INTO reporttbl (name0, ip0, tarikhqat0, tarikhvasl0) VALUES ('".$row["name0"]."', '".$row["ip0"]."', '".$row["tarikhqat0"]."', '".$allmedateandtime."')";
if ($conn->query($sqlinsert1) === TRUE) {}
}


}
            }//QATI = 1

}

    }//while
}//num_rows > 0


$sql0 = "SELECT * FROM dvrs";
$result0 = $conn->query($sql0);
if ($result0->num_rows > 0) {
while($row0 = $result0->fetch_assoc()) {
if(($fp = fsockopen($row0["ip0"], $port, $errno, $errstr, $timeout)) === false) {

?>




<?php
if($dattimeqati >= $row0["dateofqati0"]){
$time1 = strtotime($row0["timeofqati0"]);
$time2 = strtotime($timedatqati);
$diff = abs($time2 - $time1);
$hours = floor($diff / 3600);
$minutes = floor(($diff % 3600) / 60);
if ($minutes >= 20) {
$rang = 1;
 }else{
$rang = 0;
 }
}
?>






    <tr>
        <td <?php if($rang == 1){ echo 'style="background-color: #ff5b5b;color: #fff;"'; } ?> ><?php  echo $row0["name0"];   ?></td>
        <td><?php  echo $row0["ip0"];   ?></td>



        <td id="tarikhtd">
        <?php
            if($row0["qati0"] == "0"){
$sqlupdate2 = "UPDATE dvrs SET dateofqati0='".$dattimeqati."',timeofqati0='".$timedatqati."',tarikhqat0='".$allmedateandtime."', qati0=1 WHERE id0='".$row0["id0"]."'";
if ($conn->query($sqlupdate2) === TRUE) {}
            }//QATI = 0
        echo $row0["tarikhqat0"];
       ?>
        </td>


    </tr>
<?php
}else{
    fclose($fp);

            if($row0["qati0"] == "1"){
$sqlupdate4 = "UPDATE dvrs SET tarikhvasl0='".$allmedateandtime."', qati0=0 WHERE id0='".$row0["id0"]."'";
if ($conn->query($sqlupdate4) === TRUE) {}

if($dattimeqati >= $row0["dateofqati0"]){

$time1 = strtotime($row0["timeofqati0"]);
$time2 = strtotime($timedatqati);

$diff = abs($time2 - $time1);
$hours = floor($diff / 3600);
$minutes = floor(($diff % 3600) / 60);

if ($minutes >= 30) {
$sqlinsert3 = "INSERT INTO reporttbl (name0, ip0, tarikhqat0, tarikhvasl0) VALUES ('".$row0["name0"]."', '".$row0["ip0"]."', '".$row0["tarikhqat0"]."', '".$allmedateandtime."')";
if ($conn->query($sqlinsert3) === TRUE) {}
}


}
            }//QATI = 1





}


    }//while
}//num_rows > 0
?>



  </tbody>
</table>



