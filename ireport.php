<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
$con=mysqli_connect("localhost","root","","hajir");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$univn=$_POST['univn']; 
echo "GEZIRA COLLEGE©: <br>
ايصال بدائل"; 


$t=time();
echo($t . "<br>");


$result = mysqli_query($con,"SELECT * FROM i where univn=$univn");



echo "<table border='2'>

<tr>

<th>Id</th>

<th>الاسم</th>

<th>الرقم الجامعي</th>
<th>الدفعة</th>
<th>الكلية  </th>
<th>الفصل</th>
<th>المدفوع</th>
<th>المقرر</th>
<th>TIME</th>

</tr>";

while($row = mysqli_fetch_array($result))
 {

echo "<tr>";

  echo "<td>" . $row['id'] . "</td>";

  echo "<td>" . $row['name'] . "</td>";

  echo "<td>" . $row['univn'] . "</td>";
echo "<td>" . $row['batch'] . "</td>";
echo "<td>" . $row['college'] . "</td>";
  echo "<td>" . $row['sem'] . "</td>";
echo "<td>" . $row['amount'] . "</td>";
echo "" . $row['type'] . "</td>";

echo "<td>" . $row['exam'] . "</td>";
echo "<td>" . $row['Time'] . "</td>";

  echo "</tr>";

  

}


mysqli_close($con);
?>


<h1>لا يسمح بدخول الامتحانات و   يعتبر الطالب راسبا في حالة عدم الدفع  قبل وقت كاف من تاريخ امتحان البديل</h2>
<br>
<a href="irecord.php">Print next student reciept</a>
<br><a href="index.php">HOME</a>

   	       <!-- Print -->
    <a href="javascript:;" onclick="window.print()">
        <img src="https://simplesharebuttons.com/images/somacro/print.png" alt="Print"/>
</a>




