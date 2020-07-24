<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
$con=mysqli_connect("localhost","root","","hajir");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$univn=$_POST['bunivn']; 
echo "GEZIRA COLLEGE©: NOT FOR STUDENT USE"; 


$t=time();
echo($t . "<br>");


$result = mysqli_query($con,"SELECT * FROM bank where bunivn=$univn");



echo "<table border='2'>

<tr>

<th>Id</th>

<th>Name</th>

<th>الرقم الجامعي</th>
<th>Batch</th>
<th>College</th>

<th>المدفوع</th>
<th>الفصل</th>
<th>غير مدفوع</th>
<th>الغرض</th>
<th>TIME</th>

</tr>";

while($row = mysqli_fetch_array($result))
 {

echo "<tr>";

  echo "<td>" . $row['idb'] . "</td>";

  echo "<td>" . $row['bname'] . "</td>";

  echo "<td>" . $row['bunivn'] . "</td>";
echo "<td>" . $row['bbatch'] . "</td>";
echo "<td>" . $row['bcollege'] . "</td>";
  echo "<td>" . $row['bamount'] . "</td>";
echo "<td>" . $row['bsem'] . "</td>";
echo "<td>" . $row['bunpaid'] . "</td>";
echo "<td>" . $row['bdescription'] . "</td>";
echo "<td>" . $row['bTime'] . "</td>";

  echo "</tr>";

  

}


mysqli_close($con);
?>


<h1>لا يسمح بدخول الامتحانات و  المحاضرات ما لم يساوي غير المدفوع صفرا</h2>لا يسمح بدخول اي امتحان الا باحضار الايصالات/// ..تاخير الدفع عن آخر يوم للتسجيل يوقع الغرامة
<br>
<a href="brecord.php"> طباعة ايصال آخر</a>
<br><a href="p.php">HOME</a>

   	       <!-- Print -->
    <a href="javascript:;" onclick="window.print()">
        <img src="https://simplesharebuttons.com/images/somacro/print.png" alt="Print"/>
</a>




