<html><meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
<title>Gezira College©</title>
<body>
<?php
$con=mysqli_connect("localhost","id6829178_localhost","hajirrrr","id6829178_hajir");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$univn=$_POST['univn']; 
echo "GEZIRA COLLEGE©:"; 

echo"<br>";


$t=time();
echo($t . "<br>");
$result = mysqli_query($con,"SELECT * FROM p where univn=$univn");
echo "<table border='2'>

<tr>

<th>رقم الايصال</th>

<th>الاسم</th>

<th>الرقم الجامعي</th>
<th>الدفعة</th>
<th>الكلية</th>

<th>المدفوع</th>
<th>عن سمستر</th>
<th>غير مدفوع</th>
<th>الغرض</th>
<th> تاريخ الدفع</th>

</tr>";



while($row = mysqli_fetch_array($result))
 {


echo "<tr>";

  echo "<td>" . $row['id'] . "</td>";

  echo "<td>" . $row['name'] . "</td>";

  echo "<td>" . $row['univn'] . "</td>";
echo "<td>" . $row['batch'] . "</td>";
echo "<td>" . $row['college'] . "</td>";
  echo "<td>" . $row['amount'] . "</td>";
echo "<td>" . $row['sem'] . "</td>";
echo "<td>" . $row['unpaid'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
echo "<td>" . $row['Date'] . "</td>";

  echo "</tr>";

}

mysqli_close($con);
?>

<a href="studentpay.php">Print Again</a> . 
<a href="index.php"></a>
</body>
<footer>
   	       <!-- Print -->
    <a href="javascript:;" onclick="window.print()">
        <img src="https://simplesharebuttons.com/images/somacro/print.png" alt="Print"/>
</a>
<a href="https://api.whatsapp.com/send?phone&text=https://pensive-sips.000webhostapp.com/studentpay.php" target="_blank">	Send to WhatsApp </a>
</footer>

<img src="https://chart.googleapis.com/chart?chs=60x60&cht=qr&chl=https%3A%2F%2Fwww.pensive-sips.000webhostapp.com%2Fstudentpay.php&choe=UTF-8" title="" />
<h5>:رابط الحصول على ايصال الدفع<br>https://pensive-sips.000webhostapp.com/studentpay.php
