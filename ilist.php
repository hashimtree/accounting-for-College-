<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
$con=mysqli_connect("localhost","root","","hajir");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect " . mysqli_connect_error();
  }
echo "GEZIRA COLLEGE©: Payments"; 

$result = mysqli_query($con,"SELECT * FROM i");



echo "<table border='2'>

<tr>

<th>Id</th>

<th>الاسم</th>
<th> الرقم الجامعي</th>

<th>الكلية</th>
<th>الدفعة</th>
<th>Exam</th>
<th>المبلغ</th>
<th>المقرر</th>

<th>وصف</th>
<th>الفصل</th>
<th>التأريخ</th>

</tr>";



while($row = mysqli_fetch_array($result))
 {


echo "<tr>";

  echo "<td>" . $row['id'] . "</td>";

  echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['univn'] . "</td>";

  echo "<td>" . $row['college'] . "</td>";

  echo "<td>" . $row['batch'] . "</td>";
echo"<td>" . $row['exam'] . "</td>";

  echo "<td>" . $row['amount'] . "</td>";

  echo "<td>" . $row['type'] . "</td>";

  echo "<td>" . $row['sem'] . "</td>";
  echo "<td>" . $row['Time'] . "</td>";

  echo "</tr>";

  

}


mysqli_close($con);
?><br>
<a href="index.php">HOME</a>

   	       <!-- Print -->
    <a href="javascript:;" onclick="window.print()">
        <img src="https://simplesharebuttons.com/images/somacro/print.png" alt="Print" />
    </a>

