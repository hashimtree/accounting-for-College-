<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
$con=mysqli_connect("localhost","root","","hajir");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect " . mysqli_connect_error();
  }
echo "GEZIRA COLLEGE©: Payments"; 
echo "TIME: " . date("h:i:sa") . "    ";
echo "DATE: " . date("Y/m/d") . "<br>";
$result = mysqli_query($con,"SELECT * FROM bank");
$s=mysqli_query($con,"SELECT SUM(bamount)          
FROM bank");

echo "<table border='2'>
<tr>
<th>TOTAL</th>
</tr>";
while($row = mysqli_fetch_array($s))
 {

echo "<tr>";
  echo "<td>" . $row['SUM(bamount)'] . "</td>";
  echo "</tr>";
}
$sql = "SELECT SUM(bamount) AS amount_sum FROM bank WHERE DATE(bTime)= DATE(NOW())";
$resultt= $con->query($sql);

if ($resultt->num_rows > 0) {
    // output data of each row
    while($row = $resultt->fetch_assoc()) {
$s=$row["bamount_sum"];
    }}
$resulttt = mysqli_query($con,"SELECT * FROM bank");
$ss=mysqli_query($con,"SELECT SUM(amount)          
FROM p");
echo "<table border='2'>
<tr>
<th>TOTAL</th>
</tr>";
while($row = mysqli_fetch_array($ss))
 {
echo "<tr>";
  echo "<td>" . $row['SUM(amount)'] . "</td>";
  echo "</tr>";
}
echo "DAILY PAYMENT REPORT"; 
echo"<br>";
echo"TODAY SUM=";
echo$s;
echo"<br>";
echo "<table border='2'>

<tr>

<th>Id</th>

<th>الاسم</th>
<th>UNIVERSTY NO</th>

<th>الكلية</th>
<th>الدفعة</th>

<th>المبلغ</th>

<th>وصف</th>
<th>الفصل</th>
<th>التأريخ</th>

</tr>";
while($row = mysqli_fetch_array($result))
 {

echo "<tr>";

  echo "<td>" . $row['idb'] . "</td>";

  echo "<td>" . $row['bname'] . "</td>";
echo "<td>" . $row['bunivn'] . "</td>";

  echo "<td>" . $row['bcollege'] . "</td>";

  echo "<td>" . $row['batch'] . "</td>";

  echo "<td>" . $row['bamount'] . "</td>";

  echo "<td>" . $row['bdescription'] . "</td>";

  echo "<td>" . $row['bsem'] . "</td>";
  echo "<td>" . $row['bTime'] . "</td>";

  echo "</tr>";

  

}


mysqli_close($con);
?><br>
<a href="index.php">HOME</a>
<a href="p.php">CASH</a>

   	       <!-- Print -->
    <a href="javascript:;" onclick="window.print()">
        <img src="https://simplesharebuttons.com/images/somacro/print.png" alt="Print" />
    </a>

