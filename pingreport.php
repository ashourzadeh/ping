<?php
// ini_set('display_errors', 0);
include 'connection.php';
include 'jdf.php';
//////////////////////////////////////
?>
<table id="tblantenrep">
  <thead>
    <tr>
      <th>نام</th>
      <th>IP</th>
      <th>تاریخ قطع</th>
      <th>تاریخ وصل</th>
    </tr>
  </thead>
  <tbody>

<?php
$sql0 = "SELECT * FROM reporttbl";
$result0 = $conn->query($sql0);
if ($result0->num_rows > 0) {
while($row0 = $result0->fetch_assoc()) {
?>
    <tr>
<td id="tarikhtd"><?php  echo $row0["name0"];   ?></td>
<td id="tarikhtd"><?php  echo $row0["ip0"];   ?></td>
<td id="tarikhtd"><?php  echo $row0["tarikhqat0"];   ?></td>
<td id="tarikhtd"><?php  echo $row0["tarikhvasl0"];   ?></td>
    </tr>
<?php
    }//while
}//num_rows > 0
?>
  </tbody>
</table>