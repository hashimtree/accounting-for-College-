<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
$con=mysqli_connect("localhost","root","","hajir");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "SELECT SUM(amount) AS amount_sum FROM i WHERE DATE(Time)= DATE(NOW())";
$resultt= $con->query($sql);

if ($resultt->num_rows > 0) {
    // output data of each row
    while($row = $resultt->fetch_assoc()) {
$it=$row["amount_sum"];
    }}


$resulttt = mysqli_query($con,"SELECT * FROM i");

$its=mysqli_query($con,"SELECT SUM(amount)          
FROM p");

echo "<table border='2'>

<tr>
<th>TOTAL</th>



</tr>";



while($row = mysqli_fetch_array($its))
 {


echo "<tr>";


  echo "<td>" . $row['SUM(amount)'] . "</td>";

  

  echo "</tr>";

  

}




echo "DAILY PAYMENT REPORT"; 
echo"<br>";
echo"TODAY SUM=";
echo$it;
echo"<br>";
$t=time();
echo($t . "<br>");
echo"<br>";
echo "TIME: " . date("h:i:sa") . "    ";
echo "DATE: " . date("Y/m/d") . "<br>";

$result = mysqli_query($con,"SELECT * FROM i WHERE DATE(Time) = DATE(NOW())
");

echo "<table border='2'>

<tr>

<th>Id</th>

<th>Name</th>

<th>الرقم الجامعي</th>
<th>دفعة</th>
<th>الكلية</th>

<th>المدفوع</th>
<th>الفصل</th>
<th>تاريخ الايصال </th>
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
echo "<td>" . $row['Time'] . "</td>";
echo "<td" . $row['exam'] . "</td>";

  echo "</tr>";

  

}


mysqli_close($con);
?>



<br>
<a href="sum.php">SUM</a>
<br><a href="p.php">HOME</a>

   	       <!-- Print -->
    <a href="javascript:;" onclick="window.print()">
        <img src="https://simplesharebuttons.com/images/somacro/print.png" alt="Print"/>
</a>




