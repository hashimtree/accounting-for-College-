<meta name="viewport" content="width=device-width, initial-scale=1.0"><a href="precord(1).php">  طباعة إذن إمتحانات </a><a href="index.php"> Home </a><?php
echo "GEZIRA COLLEGE";echo" "; echo"" . date("h:i:sa") . " ";
echo " DATE: " . date("Y/m/d") . " ";?>
<?php
$con=mysqli_connect("localhost","root","","hajir");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$unpaidp=0;
$row['amount']=0;



$totalp=0;
$totalb=0;
$sem=0;
$univn=$_POST['univn']; 
$sem=$_POST['sem']; 
echo "<h2> رسوم السمستر:  " . $sem. "</h2>";


echo "<b>الرقم الجامعي=" . $univn . "";

$resultp=mysqli_query($con,"select SUM(amount) FROM p where univn=$univn  and sem=$sem");
$roww=mysqli_fetch_array($resultp);
global $sum;
$f=0;
$sum=0;
$sum=$roww[0];

echo"<br> اجمالي الدفع كاش =" . @$sum . " ";


$resultb=mysqli_query($con,"select SUM(bamount) FROM bank where bunivn=$univn and bsem=$sem");
$roww=mysqli_fetch_array($resultb);
$bsum=$roww[0];

echo"<br> اجمالي الدفع شيك =" . @$bsum . "<br> ";




$totalsum=$sum+@$bsum;
echo" <b>الدفع الاجمالي=" . $totalsum . "<br> ";

if($totalsum==0){
echo"<center><h1>لم تسدد أي رسوم للفصل الدراسي:" .$sem."</h1>";
}



$resultf = mysqli_query($con,"SELECT     f.batch, p.batch,p.univn, p.sem,p.name,p.college, bank.bsem, bank.bunivn, bank.bbatch,bank.bamount,f.fees from f left join p on p.batch=f.batch 
  left join bank on bank.bbatch=f.batch where univn = $univn and sem=$sem");
$roww=mysqli_fetch_array($resultf);
$bsum=0;
$f=$roww['fees'];
if($totalsum==$f and $f>0 ){echo"<br><h2>***يسمح بالدخول و الامتحانات***</h2><br>";}else if ($totalsum<$f and $f>0 and $sum>0 or $totalsum==0){echo"<h2>**لا يسمح بالدخول و الامتحانات **</h2>";}else {echo "";}



if($sum>0){



$resultf = mysqli_query($con,"SELECT     f.batch, p.batch,p.univn, p.sem,p.name,p.college, bank.bsem, bank.bunivn, bank.bbatch,bank.bamount,f.fees from f left join p on p.batch=f.batch 
  left join bank on bank.bbatch=f.batch where univn = $univn and sem=$sem");

$roww=mysqli_fetch_array($resultf);
$bsum=0;
$f=$roww['fees'];
$c=$roww['college'];
$n=$roww['name'];
$b=$roww['batch'];
$s=$roww['sem'];
$amub=$roww['bamount'];


echo" سمستر:" . $s . " ";
echo" الكلية:" . $c . " ";
echo"الدفعة:" . $b . " <br> "; echo"الاسم: ".$n." <br>";

echo "الرسوم المقررة =" . @$f . " <br> ";








if($bsum>0){

if($bsum>0){echo $f;
echo "<br>" . $totalsum . "<br>اجمالي";}else{echo"";}
if($sum>0){
@$unpaid=$f-$totalsum;}else{echo"";}


echo "الرسوم المقررة =" . $f . " <br> ";

echo "غير مدفوع =" . @$unpaid . " <br> ";





}else{echo"";}





}




$result = mysqli_query($con,"SELECT  p.id, p.univn, p.batch , p.amount , p.unpaid , p.sem , p.name ,p.Time , p.description , p.college  , p.batch,bank.bname ,bank.bamount , bank.bunpaid,bank.bbatch, bank.bTime,bank.idb ,bank.bcollege,bank.bdescription,bank.bsem from p LEFT JOIN bank ON p.univn=bank.bunivn  

where univn=$univn and sem=$sem");



if ($sum>0){

echo "<table border='1' width='2'><tr>
<th>Id cash</th><th>كاش</th><th>وصف  </th><th>غير مدفوع</th><th>التاريخ</th><th>سمستر</th><th>بنك</th><th>رقم البنك</th>
<th>بنك  </th><th>id bank</th></tr>";
while($row = mysqli_fetch_array($result))
 {
echo "<tr>";
  echo "<b><td>" . $row['id'] . "</td>";
  
  echo "<td>" . $row['amount'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
  
echo "<td>" . $row['unpaid'] . "</td>";
  

echo "<td>" . $row['Time'] . "</td>";

echo "<td>" . $row['sem'] . "</td>";
echo "<td>" . $row['bamount'] . "</
td>";

echo "<td>" . $row['bdescription'] . "</
td>";

echo "<td>" . $row['bTime'] . "</
td>";
echo "<td>" . $row['idb'] . "</
td>";
}



}








if($sum==0){




$resultt = mysqli_query($con,"SELECT    distinct  bank.bname,     bank.bcollege,bank.bbatch,bank.bamount,f.batch,f.fees from bank left join f on bank.bbatch= f.batch where bunivn  = $univn and bsem=$sem ");
while($row = mysqli_fetch_array($resultt))
 { 

global $f;
$f=$row['fees'];
$unqamountb=$row['bamount'];


}






echo"<br> الرسوم المقررة:" . $f . " ";

if($f==@$unqamountb and $sum==0){echo"<h2>***يسمح له بالدخول و الامتحان***</h2>";}else if($unqamountb<$f and $sum==0){echo"<center><h2>لا يسمح  له بالدخول و أداء الامتحانات</h2>";}



$result = mysqli_query($con,"SELECT     bank.idb,bank.bbatch,f.fees, bank.bunivn , bank.bname ,bank.bamount , bank.bunpaid,p.amount, bank.bTime ,bank.bcollege,bank.bdescription,bank.bsem from bank left join p on p.univn=bank.bunivn LEFT JOIN f  ON bank.bbatch=f.batch  

where bunivn=$univn and bsem=$sem");


echo "<table border='1' width='2' alighn='center'><tr>
<th>Id</th><th>الاسم</th><th>مبلغ </th><th>غير مدفوع</th><th>رقم الشيك</th>
<th>التاريخ</th><th> سمستر</th>
<th>الدفعة</th>
<th>الكلية</th><th>الرسوم</th>
</tr>";
while($row = mysqli_fetch_array($result))
 {



$p=0;
$p=$row['amount'];

$b=$row['bamount'];
$fb=$row['fees'];

if($p==0){
$unpaidb=$fb-$b;

echo " متاخرات السمستر=" . $unpaidb . "";



echo "<tr>";
  echo "<td>" . $row['idb'] . "</td>";
 
echo "<td>" . $row['bname'] . "</td>";
 
echo "<td>" . $row['bamount'] . "</td>";
  
echo "<td>" . @$row['bunpaid'] . "</td>";
  echo "<td>" . @$row['bdescription'] . "</td>";

echo "<td>" . @$row['bTime'] . "</td>";
 
echo "<td>" . $row['bsem'] . "</td>";

echo "<td>" . $row['bbatch'] . "</td>";
echo "<td>" . $row['bcollege'] . "</td>";
echo "<td>" . $row['fees'] . "</td>";
echo "<td>" . $row['amount'] . "</td>";









}else{echo "";}




}}else{ echo"";}

?>





