q<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
$con=mysqli_connect("localhost","root","","hajir");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$univn=$_POST['univn']; 
echo "GEZIRA COLLEGE©: NOT FOR STUDENT USE"; 


$t=time();
echo($t . "<br>");



 	      

$result = mysqli_query($con,"SELECT * FROM p where univn=$univn");



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

  echo "<td>" . $row['id'] . "</td>";

  echo "<td>" . $row['name'] . "</td>";

  echo "<td>" . $row['univn'] . "</td>";
echo "<td>" . $row['batch'] . "</td>";
echo "<td>" . $row['college'] . "</td>";
  echo "<td>" . $row['amount'] . "</td>";
echo "<td>" . $row['sem'] . "</td>";
echo "<td>" . $row['unpaid'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
echo "<td>" . $row['Time'] . "</td>";

  echo "</tr>";

  

}


mysqli_close($con);
?>


<h3>لا يسمح بدخول الامتحانات و  المحاضرات ما لم يساوي غير المدفوع صفرا/////</h3>لا يسمح بدخول اي امتحان الا باحضار الايصالات/// ..تاخير الدفع عن آخر يوم للتسجيل يوقع الغرامة
<br>
<br>
<a href="precord.php">Print next student reciept</a>
<br><a href="p.php">HOME</a>

   	       <!-- Print -->
    <a href="javascript:;" onclick="window.print()">
        <img src="https://simplesharebuttons.com/images/somacro/print.png" alt="Print"/>
</a>




