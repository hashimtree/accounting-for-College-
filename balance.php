<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php echo "DAILY PAYMENT REPORT. ";
echo "TIME: " . date("h:i:sa") . "    ";
echo "DATE: " . date("Y/m/d") . "<br>";?><br>
<?php $con = mysql_connect("localhost","root",""); if (!$con) { die('Could not connect: ' . mysql_error()); } mysql_select_db("hajir", $con);






 $result = mysql_query("select count(1) FROM p"); 
$resultt=mysql_query("select count(1) FROM p WHERE  amount < 0");
$roww=mysql_fetch_array($resultt);
$totall=$roww[0];

$row = mysql_fetch_array($result); 
$total = $row[0];


    $result = mysql_query("select (1) FROM p"); 
$resultt=mysql_query("select id FROM p WHERE DATE(Time)= DATE(NOW()) and amount < 0");
$roww=mysql_fetch_array($resultt);
    $id=$roww[0];










 





 $result = mysql_query("select count(1) FROM bank"); 
$resultt=mysql_query("select count(1) FROM bank WHERE DATE(bTime)= DATE(NOW())");
$roww=mysql_fetch_array($resultt);

$b=$roww[0];



  
  
$row = mysql_fetch_array($result); $btotal = $row[0]; 

$result = mysql_query("select count(1) FROM i"); 
$resultt=mysql_query("select count(1) FROM i WHERE DATE(Time)= DATE(NOW())");
$roww=mysql_fetch_array($resultt);
  
$i=$roww[0];



$row = mysql_fetch_array($result); $itotal = $row[0]; 

$result = mysql_query("select count(1) FROM usd"); 
$resultt=mysql_query("select count(1) FROM usd WHERE DATE(Time)= DATE(NOW())");
$roww=mysql_fetch_array($resultt);
  
$d=$roww[0];
  
  $row = mysql_fetch_array($result); $dtotal = $row[0];
  
  
  
  $result = mysql_query("select (1) FROM p"); 
$resultt=mysql_query("select id FROM p WHERE DATE(Time)= DATE(NOW()) and amount < 0");
$roww=mysql_fetch_array($resultt);
$totalll=$roww[0];
  
  
  $result = mysql_query("select count(1) FROM p"); 
$resultt=mysql_query("select count(1) FROM p WHERE DATE(Time)= DATE(NOW())");
$roww=mysql_fetch_array($resultt);
$ttoday=$roww[0];
  
  $result = mysql_query("select count(1) FROM p"); 
$resultt=mysql_query("select count(1) FROM p WHERE DATE(Time)= DATE(NOW()) and amount < 0"); 
$roww=mysql_fetch_array($resultt);
  
$de=$roww[0];
  
  $row = mysql_fetch_array($resultt); $detotal = $row[0];
  


echo "<table border='2'>

<tr>
<th>  اجمالي حركات الدفع كاش   </th>


<th>  اجمالي حركة الكاش اليوم </th>


<th>  رقم الحذف </th>


<th>  حركة البنك يومي </th>


<th>  اجمالي حركة البنك </th>


<th>  يومي البدائل+ </th>


<th>  اجمالي البدائل </th>


<th>  $ اليومي </th>


<th>  اجمالي $ </th>


<th>  اجمالي الحذ </th>


<th>  الحذف اليومي </th>




</tr>";




echo "<tr>";


  
echo "<td>" . $total . "</td>";
echo "<td>" . $ttoday . "</td>";

echo "<td>" . $id . "</td>";
echo "<td>" . $b . "</td>";
echo "<td>" . $btotal . "</td>";
echo "<td>" . $i . "</td>";
echo "<td>" . $itotal . "</td>";
echo "<td>" . $d . "</td>";

echo "<td>" . $dtotal . "</td>";
echo "<td>" . $totall . "</td>";
echo "<td>" . $de . "</td>";
echo "</tr>";

  






 





   
   
        
mysql_free_result($result);

mysql_close($con);

 ?>





<?php
$con=mysqli_connect("localhost","root","","hajir");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }



    


$unpaid=mysqli_query($con,"SELECT SUM(unpaid) FROM p");
     
     
     echo "<table border='2'>
<tr>
<th>UNPAID CASH</th>
</tr>";
while($row=mysqli_fetch_array($unpaid)){
echo "<tr>"; 
echo"<td>" . $row['SUM(unpaid)'] . "</td>";
echo"</tr>";
}
 
     $sql = "SELECT SUM(bamount) AS bamount_sum FROM bank WHERE DATE(bTime)= DATE(NOW())";
     $resultt= $con->query($sql);

if ($resultt->num_rows > 0) {
    // output data of each row
    
     while($row = $resultt->fetch_assoc()) {
$s=$row["bamount_sum"];
    }}

     
     
    $sqlbanksum = "SELECT SUM(bamount) AS bamount_sum FROM bank ";
     $resulttt= $con->query($sqlbanksum);

if ($resulttt->num_rows > 0) {
    // output data of each row
    
     while($row = $resulttt->fetch_assoc()) {
$st=$row["bamount_sum"];
    }}

 
     
   


     
     echo "<table border='2'>

<tr>
<th> دخل البنك اليومي</th><th>  البنك الكلي<th/>
     
     </tr>";




     
     echo "<tr>";


  
echo "<td>" . $s . "</td>";
     
  
echo "<td>" . $st . "</td>";   

echo "</tr>";
 
     
     
    
    ?>

     
     
<?php
$con=mysqli_connect("localhost","root","","hajir");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect " . mysqli_connect_error();
  }

  



$result = mysqli_query($con,"SELECT * FROM p");
$bankresult=mysqli_query($con,'SELECT * FROM bank');


$sumbank=mysqli_query($con,"SELECT SUM(bamount) FROM bank");
$t=mysqli_query($con,"SELECT SUM(amount)          
FROM p");



echo "<table border='2'>
<tr>
<th>  إجمالي الرسوم الدراسية</th>
</tr>";
while($row = mysqli_fetch_array($t))
 {
echo "<tr>";
  echo "<td>" . $row['SUM(amount)'] . "</td>";

  echo "</tr>";
}
$sql = "SELECT SUM(amount) AS amount_sum FROM p WHERE DATE(Time)= DATE(NOW())";
$resultt= $con->query($sql);
if ($resultt->num_rows > 0) {
    // output data of each row
    while($row = $resultt->fetch_assoc()) {
$d=$row["amount_sum"];
    }}
echo "<tr><th> الدخل اليومي</th></tr>";
echo"<tr>";
echo"<td>" . $d . "</td>";
echo"</tr>";








$sql = "SELECT SUM(amount) AS amount_sum FROM i WHERE DATE(Time)= DATE(NOW())";
$resultt= $con->query($sql);

if ($resultt->num_rows > 0) {
    // output data of each row
    while($row = $resultt->fetch_assoc()) {
$it=$row["amount_sum"];
    }}


$resulttt = mysqli_query($con,"SELECT * FROM i");

$its=mysqli_query($con,"SELECT SUM(amount)          
FROM i");


$sql = "SELECT SUM(amount) AS amount_sum FROM exp WHERE DATE(DATE)= DATE(NOW())";
$resultt= $con->query($sql);

if ($resultt->num_rows > 0) {
    // output data of each row
    while($row = $resultt->fetch_assoc()) {
$s=$row["amount_sum"];
    }}

$ss=mysqli_query($con,"SELECT SUM(amount)          
FROM exp");

echo$s;
echo "
<tr>
<th>اجمالي المنصرفات</th>
</tr>";
while($row = mysqli_fetch_array($ss))
 {
echo "<tr>";
  echo "<td>" . $row['SUM(amount)'] . "</td>";
  echo "</tr>";
}
$result = mysqli_query($con,"SELECT * FROM i");
$i=mysqli_query($con,"SELECT SUM(amount)          
FROM i");

echo "
<tr>
<th>اجمالي البدائل و أخرى</th>
</tr>";
while($row = mysqli_fetch_array($i))
 {

echo "<tr>";
  echo "<td>" . $row['SUM(amount)'] . "</td>";
  echo "</tr>";
}
$sql = "SELECT SUM(amount) AS amount_sum FROM i WHERE DATE(Time)= DATE(NOW())";
$resultt= $con->query($sql);
if ($resultt->num_rows > 0) {
    // output data of each row
    while($row = $resultt->fetch_assoc()) {
$i=$row["amount_sum"];
    }}
$result = mysqli_query($con,"SELECT * FROM usd");
$usd=mysqli_query($con,"SELECT SUM(amount)          
FROM usd");

echo "
<tr>
<th>الدولار</th>
</tr>";
while($row = mysqli_fetch_array($usd))
 {

echo "<tr>";
  echo "<td>" . $row['SUM(amount)'] . "</td>";
  echo "</tr>";
}
$sql = "SELECT SUM(amount) AS amount_sum FROM usd WHERE DATE(Time)= DATE(NOW())";
$resultt= $con->query($sql);
if ($resultt->num_rows > 0) {
    // output data of each row
    while($row = $resultt->fetch_assoc()) {
$usd=$row["amount_sum"];
    }}


$tttt=$d+$it;
$net=$d-$s;
$ttt=$it+$net;
echo"<br>";

mysqli_close($con);
?>
<?php
echo"
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>

<h2></h2>

<table>
  <tr>
    <th>دخل رسوم الدراسة اليوم</th>
    <th>$d</th>
  </tr>
  <tr>
    <td>دخل البدائل اليوم</td>
    <td>$it</td>
  </tr>
  <tr>
    <td>اجمالي دخل الكاش</td>
    <td>$tttt</td>
  <tr>
    <th> منصرفات اليوم</th>
    <th>$s</th>
  </tr>
  <tr>
    <td>وارد الخزنة</td>
    <td>$ttt </td>
  </tr>
  <tr>
    <td>الرجاء كتابة التقفيلة</td>
    <td></td>
  </tr>
</table>
</body>
</html>";

   	?>      

