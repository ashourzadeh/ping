<?php
//ini_set('display_errors', 0);
include 'connection.php';
//////////////////////////////////////
$port = 80;
$timeout = 1;
$colorOnline = "#7bc901";
$colorOffline = "#ff4848";
?>

<fieldset id='antenfild'>
<div id='insidediv'><img src='img/antenna.svg' class='icofildset'><h3>آنتن</h3></div>
<hr>

<table id="tblanten">
  <thead>
    <tr>
      <th>نام آنتن</th>
      <th>IP</th>
      <th>وضعیت</th>
    </tr>
  </thead>
  <tbody>
<?php
$sql = "SELECT * FROM antens";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
?>

    <tr>

<td><?php  echo $row["name0"];   ?></td>
<td><?php  echo $row["ip0"];   ?></td>
<td>
<?php
if(($fp = fsockopen($row["ip0"], $port, $errno, $errstr, $timeout)) === false) {
?>
    <span class="cheraq" style="background: <?php echo $colorOffline; $oflinecode = 0; ?>;"></span>
<?php
}else{
    fclose($fp);
?>
    <span class="cheraq" style="background: <?php echo $colorOnline; $oflinecode = 1; ?>;"></span>
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






