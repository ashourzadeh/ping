<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">
<head>
  <title>Pinger (Insert)</title>
<link rel="icon" type="image/x-icon" href="img/favicon.ico">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<a id="addipspan" href="index.html">برگشت</a>
<span id="addipspan" onclick="showfrm('vasatfrm')">اضافه کردن IP</span>


<div id="vasatfrm" style="display: none;">
<div id="dakhel">
<span id="clsall" onclick="funfrmcls('vasatfrm')">X</span>
<h3 id="topnewheder">فرم ورود IP</h3>
<form id="frminsert">

<label id="lblnoip">نوع IP</label>
<select id="selectbar">
  <option value="DVR">DVR</option>
  <option value="Ant">Anten</option>
  <option value="CAM">IP Camera</option>
</select>
<label for="nameip">نام</label>
<input type="text" id="nameip" name="nam0" placeholder="نام مرتبط با IP ..." onkeypress="nextfild(this,'ip03')">
<label>IP</label>
<fieldset>
<input type="text" id="ip01" value="192" placeholder="192" onkeypress="nextfild(this,'ip02')">
<input type="text" id="ip02" value="168" placeholder="168" onkeypress="nextfild(this,'ip03')">
<input type="text" id="ip03" placeholder="" onkeypress="nextfild(this,'ip04')">
<input type="text" id="ip04" placeholder="" onkeypress="keyupsend(this);">
</fieldset>
<div id="buttdown">
<a id="sendtodatabase" onclick="sendtodatabase();">ذخیره</a>
</div>
</form>
</div>
<div id="savealert"></div>
</div>


<div id="listdvr">
<div id="buttshowtbl">
  <span id="tbl1" onclick="funshowtbl('tbl1')">Anten</span>
  <span id="tbl2" onclick="funshowtbl('tbl2')">DVR</span>
  <span id="tbl2" onclick="funshowtbl('tbl3')">IP Camera</span>
</div>
<!---------Table-------------------------------------------------->
<div id="qm">
<div id="divlistcool1">
<h3 id="topnewheder">لیست کل IP آنتن ها</h3>
  <table id="tblips">
  <thead>
    <tr>
      <th>ردیف</th>
      <th>موضوع</th>
      <th>دریافت کننده</th>

      <th>خدمات</th>
    </tr>
  </thead>
  <tbody id="tblipsb">
<?php

include 'connection.php';

$sql = "SELECT * FROM antens";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
?>

    <tr>

<td><?php  echo $row["id0"];   ?></td>
<td><?php  echo $row["name0"];   ?></td>
<td><?php  echo $row["ip0"];   ?></td>
<td id="edittd">
<span id="editbut" onclick="deletrowtbl('<?php echo $row['id0']; ?>','ANT');">حذف</span>

<span id="dellbut" onclick="editrowtbl('<?php echo $row['id0']; ?>','<?php echo $row['name0']; ?>','<?php echo $row['ip0']; ?>','<?php echo 'ANT'; ?>');">تغییرات</span>
</td>
    </tr>

<?php
  }
} else {
  //echo "0 results";
}

$conn->close();
?>
  </tbody>

</table>



</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("searchqm").addEventListener("keyup", function() {
    let value = this.value.toLowerCase();
    Array.from(document.querySelectorAll("#tableqm tr")).filter(function(row) {
      row.style.display = (row.textContent.toLowerCase().indexOf(value) > -1) ? '' : 'none';
    });
  });
});
</script>

</div>
<!---------Table-------------------------------------------------->




<!---------Table-------------------------------------------------->
<div id="qm">
<div id="divlistcool2">
<h3 id="topnewheder">لیست کل IP DVR ها</h3>
  <table id="tblips">
  <thead>
    <tr>
      <th>ردیف</th>
      <th>موضوع</th>
      <th>دریافت کننده</th>
      
      <th>خدمات</th>
    </tr>
  </thead>
  <tbody id="tblipsb">
<?php

include 'connection.php';

$sql = "SELECT * FROM dvrs";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
?>

    <tr>

<td><?php  echo $row["id0"];   ?></td>
<td><?php  echo $row["name0"];   ?></td>
<td><?php  echo $row["ip0"];   ?></td>
<td id="edittd">
<span id="editbut" onclick="deletrowtbl('<?php echo $row['id0']; ?>','DVR');">حذف</span>

<span id="dellbut" onclick="editrowtbl('<?php echo $row['id0']; ?>','<?php echo $row['name0']; ?>','<?php echo $row['ip0']; ?>','<?php echo 'DVR'; ?>');">تغییرات</span>
</td>

    </tr>

<?php
  }
} else {
  //echo "0 results";
}

$conn->close();
?>
  </tbody>

</table>



</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("searchqm").addEventListener("keyup", function() {
    let value = this.value.toLowerCase();
    Array.from(document.querySelectorAll("#tableqm tr")).filter(function(row) {
      row.style.display = (row.textContent.toLowerCase().indexOf(value) > -1) ? '' : 'none';
    });
  });
});
</script>

</div>
<!---------Table-------------------------------------------------->




<!---------Table-------------------------------------------------->
<div id="qm">
<div id="divlistcool3">
<h3 id="topnewheder">لیست کل IP Camera ها</h3>
  <table id="tblips">
  <thead>
    <tr>
      <th>ردیف</th>
      <th>موضوع</th>
      <th>دریافت کننده</th>
      
      <th>خدمات</th>
    </tr>
  </thead>
  <tbody id="tblipsb">
<?php

include 'connection.php';

$sql = "SELECT * FROM cams";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
?>

    <tr>

<td><?php  echo $row["id0"];   ?></td>
<td><?php  echo $row["name0"];   ?></td>
<td><?php  echo $row["ip0"];   ?></td>
<td id="edittd">
<span id="editbut" onclick="deletrowtbl('<?php echo $row['id0']; ?>','CAM');">حذف</span>

<span id="dellbut" onclick="editrowtbl('<?php echo $row['id0']; ?>','<?php echo $row['name0']; ?>','<?php echo $row['ip0']; ?>','<?php echo 'CAM'; ?>');">تغییرات</span>
</td>

    </tr>

<?php
  }
} else {
  //echo "0 results";
}

$conn->close();
?>
  </tbody>

</table>



</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("searchqm").addEventListener("keyup", function() {
    let value = this.value.toLowerCase();
    Array.from(document.querySelectorAll("#tableqm tr")).filter(function(row) {
      row.style.display = (row.textContent.toLowerCase().indexOf(value) > -1) ? '' : 'none';
    });
  });
});
</script>

</div>
<!---------Table-------------------------------------------------->
</div>








<script>

function nextfild(me,namefild){
const frmnm0 = document.getElementById(namefild);
  me.addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        frmnm0.focus();
      event.preventDefault();
    }
  });
}




function showfrm(frmnm){
const frmnm0 = document.getElementById(frmnm);
  frmnm0.style.display = "block";
}
function funfrmcls(frmnm){
const frmnm0 = document.getElementById(frmnm);
  frmnm0.style.display = "none";
}


//setInterval(alerthide, 3000);
function alerthide(){
  const savealert0 = document.getElementById("savealert");
    if(savealert0.style.visibility == "visible"){
      savealert0.style.visibility = "hidden";
    }
}


function funshowtbl(tblnm){
const ip01 = document.getElementById("divlistcool1");
const ip02 = document.getElementById("divlistcool2");
const ip03 = document.getElementById("divlistcool3");
if(tblnm == "tbl1"){
  ip01.style.display = "block";
  ip02.style.display = "none";
  ip03.style.display = "none";
}
if(tblnm == "tbl2"){
  ip01.style.display = "none";
  ip02.style.display = "block";
  ip03.style.display = "none";
}
if(tblnm == "tbl3"){
  ip01.style.display = "none";
  ip02.style.display = "none";
  ip03.style.display = "block";
}


}

function keyupsend(me){
const nameip0 = document.getElementById("nameip");
const ip01 = document.getElementById("ip01");
const ip02 = document.getElementById("ip02");
const ip03 = document.getElementById("ip03");
const ip04 = document.getElementById("ip04");

me.addEventListener("keypress", function(event) {
  if (event.key === "Enter") {



const slcdvranten = document.getElementById("selectbar");
var ipall0;
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
  document.getElementById("savealert").innerHTML = this.responseText;
  document.getElementById("savealert").style.visibility = "visible";

        nameip0.focus();
        nameip0.value = "";
        ip03.value = "";
        ip04.value = "";

}
};
ipall0 = ip01.value +"."+ ip02.value +"."+ ip03.value +"."+ ip04.value;
str = "ipname0=" + nameip0.value + "&ipall=" + ipall0 + "&noead=" + slcdvranten.value;
  xmlhttp.open("GET", "savedatainsql.php?" + str, true);
  xmlhttp.send();



    event.preventDefault();
  }
});


}
function sendtodatabase(){
const nameip0 = document.getElementById("nameip");
const ip01 = document.getElementById("ip01");
const ip02 = document.getElementById("ip02");
const ip03 = document.getElementById("ip03");
const ip04 = document.getElementById("ip04");

const slcdvranten = document.getElementById("selectbar");
var ipall0;
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
  document.getElementById("savealert").innerHTML = this.responseText;
  document.getElementById("savealert").style.visibility = "visible";
}
};
ipall0 = ip01.value +"."+ ip02.value +"."+ ip03.value +"."+ ip04.value;
str = "ipname0=" + nameip0.value + "&ipall=" + ipall0 + "&noead=" + slcdvranten.value;
  xmlhttp.open("GET", "savedatainsql.php?" + str, true);
  xmlhttp.send();
}



function deletrowtbl(idm,noe0){
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
  document.getElementById("savealert").innerHTML = this.responseText;
  document.getElementById("savealert").style.visibility = "visible";
}
};
str = "ipid=" + idm + "&noe=" + noe0;
  xmlhttp.open("GET", "delldatainsql.php?" + str, true);
  xmlhttp.send();
}//deletrowtbl

function editrowtbl(idm,name0,ip0,noe0){

  let nameip = prompt("لطفا نام را وارد نمایید");
  if (nameip != null && nameip != "") {
  }else{nameip = name0;}
  let ip00 = prompt("IP را واارد نمایید");
  if (ip00 != null && ip00 != "") {
  }else{ip00 = ip0;}

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
  document.getElementById("savealert").innerHTML = this.responseText;
  document.getElementById("savealert").style.visibility = "visible";
}
};
str = "ipid=" + idm + "&name0=" + nameip + "&ip0=" + ip00 + "&noe=" + noe0;
  xmlhttp.open("GET", "editdatainsql.php?" + str, true);
  xmlhttp.send();
}
</script>




<style>
@font-face {
  font-family: 'aseman';
  src: url('font/aseman.ttf'); 
}
@font-face {
  font-family: 'Aref';
  src: url('font/Aref.ttf'); 
}
@font-face {
  font-family: 'TrafficB';
  src: url('font/TrafficB.ttf'); 
}
@font-face {
  font-family: 'Traffic';
  src: url('font/Traffic.ttf'); 
}
@font-face {
  font-family: 'Yekan';
  src: url('font/Yekan.ttf'); 
}
@font-face {
  font-family: 'SGbold';
  src: url('font/SGKara-SemiBold.ttf'); 
}
@font-face {
  font-family: 'SGLight';
  src: url('font/SGKara-Light.ttf'); 
}
@font-face {
  font-family: 'EstedadB';
  src: url('font/Estedad-Bold.ttf'); 
}
@font-face {
  font-family: 'Lalezar';
  src: url('font/Lalezar-Regular.ttf'); 
}
* {
    margin: 0;
    padding: 0;
}
html,body {
    font-family: 'EstedadB';
    margin: 0;
    padding: 0;
    width: 100%;
}
#vasatfrm {
    display: flex;
    align-content: center;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100vh;
    flex-direction: column;
}
#savealert {
  visibility: hidden;
    padding: 15px;
    width: 100%;
    text-align: center;
    border: 1px solid #adadad;
    position: fixed;
    bottom: 0;
    background-color: #ff7676;
    color: #fff;
}
#frminsert {
    direction: ltr;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    align-content: center;
    border: 1px solid #e0e0e0;
    padding: 10px;
    border-radius: 10px;
    gap: 10px;
    width: 40%;
    align-items: flex-start;
    justify-content: center;
}
#nameip {
    width: 95%;
    padding: 15px;
    border-radius: 10px;
    border: 1px solid #c5c5c5;
    margin: 0 auto;
}
fieldset {
    border: 0;
}
fieldset input[type="text"] {
    width: 10%;
    text-align: center;
    padding: 10px;
    border-radius: 10px;
    border: 1px solid #e1e1e1;
    background: #fdfdfd;
}
#sendtodatabase {
    border: 1px solid #000;
    padding: 15px;
    border-radius: 10px;
    text-align: center;
    width: 20%;
    margin: 0 auto;
    cursor: pointer;
    background: #727272;
    color: #fff;
}
#selectbar {
    padding: 15px;
    border-radius: 10px;
    display: block;
    margin: 0;
}
#lblnoip {
    margin-top: 10px;
}
#gotobackpage {
    border: 1px solid #000;
    padding: 15px;
    border-radius: 10px;
    text-align: center;
    width: 20%;
    margin: 0 auto;
    cursor: pointer;
    text-decoration: none;
}
#buttdown {
    display: flex;
    justify-content: space-around;
    align-items: center;
    width: 100%;
    margin-top: 15px;
    flex-direction: row-reverse;
}
#listdvr {
    width: 80%;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    height: 800px;
    overflow-y: scroll;
}
h3#topnewheder {
    margin-bottom: 15px;
    margin-top: 15px;
    text-align: center;
    width: 40%;
}
table {
    text-align: center;
    width: 100%;
}
thead {
    background-color: #fff;
}
thead, td {
  text-align: left;
  padding: 8px;
  font-weight: bold;
  text-align: center;
  font-family: 'EstedadB';
  width: 1%;
  overflow: hidden;
}

tr:nth-child(even){background-color: #bba8a81f}


tr:hover {background-color: #ddd;}

.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  display: flex;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
  font-family: 'EstedadB';
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

#editbut {
    border: 1px solid #a5a5a5;
    padding: 5px;
    border-radius: 5px;
    background-color: #ff6262;
    color: #fff;
    cursor: pointer;
}
#dellbut {
    border: 1px solid #a5a5a5;
    padding: 5px;
    border-radius: 5px;
    background-color: #ddcc18;
    color: #5f2121;
    cursor: pointer;
}

#buttshowtbl {
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
}
#tbl1,#tbl2 {
    border: 1px solid #e9e9e9;
    padding: 4px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 10px;
    background-color: #d5f9cb;
    cursor: pointer;
}
#vasatfrm {
    display: flex;
    width: 100%;
    height: 500px;
    position: absolute;
    background-color: #fff;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
#clsall {
    width: 40%;
    cursor: pointer;
    display: block;
}
#addipspan {
    text-decoration: none;
    border: 1px solid #dbdbdb;
    color: #000;
    padding: 5px;
    padding-right: 15px;
    padding-left: 15px;
    cursor: pointer;
    text-align: center;
    width: 90%;
    display: block;
    margin: 20px auto;
}
#dakhel {
    display: flex;
    flex-direction: column;
    align-content: center;
    justify-content: center;
    align-items: center;
}
</style>
</body>
</html> 