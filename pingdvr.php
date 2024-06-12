<?php
//ini_set('display_errors', 0);
include 'connection.php';
//////////////////////////////////////
$port = 80;
$timeout = 1;
$colorOnline0 = "#7bc901";
$colorOffline0 = "#ff4848";
?>

<fieldset id='dvrfild'>
<div id='insidediv'><img src='img/DVR.png' class='icofildsetdvr'><h3>DVR</h3></div>
<hr>

<table id="tbldvr">
  <thead>
    <tr>
      <th>نام آنتن</th>
      <th>IP</th>
      <th>وضعیت</th>
    </tr>
  </thead>
  <tbody id="tabledvr">
<?php
$sql0 = "SELECT * FROM dvrs";
$result0 = $conn->query($sql0);
if ($result0->num_rows > 0) {
while($row0 = $result0->fetch_assoc()) {
?>

    <tr>

<td><?php  echo $row0["name0"];   ?></td>
<td><?php  echo $row0["ip0"];   ?></td>
<td>
<?php
if(($fp = fsockopen($row0["ip0"], $port, $errno, $errstr, $timeout)) === false) {
    //The IP address $ip is offline!;
?>
    <span class="cheraq" style="background: <?php echo $colorOffline0; $oflinecode = 0; ?>;"></span>
    <span id="tarikhspan"><?php  $row0["tarikh0"]   ?></span>
<?php
}else{
    fclose($fp);
    //The IP address $ip is online";
?>
    <span class="cheraq" style="background: <?php echo $colorOnline0; $oflinecode = 1; ?>;"></span>
<?php
}
?>
</td>
<td style="display: none;"><?php echo $oflinecode; ?></td>


    </tr>

<?php
    }
}

?>
  </tbody>

</table>

</fieldset>






