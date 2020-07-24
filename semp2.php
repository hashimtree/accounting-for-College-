<meta name="viewport" content="width=device-width, initial-scale=1.0"><?php$con=mysqli_connect("localhost","root","","hajir");// Check connectionif (mysqli_connect_errno())  {  echo "Failed to connect to MySQL: " . mysqli_connect_error();  }$batch=$_POST['batch']; $sem=$_POST['sem'];echo "GEZIRA COLLEGE©"; 

echo "" . date("Y/m/d") . "<br>";
echo"Semester:";
echo$sem;
echo"<br>";



  $result = mysqli_query($con,"SELECT * FROM p where batch=$batch AND sem=$sem");
if($batch==42){echo" الثانية صيدلة";}
elseif
($batch==41){echo" الرابعة طب";}
elseif($batch==21){echo"الدفعة الثانية طب";}
elseif($batch==45){echo"الدفعة الرابعة ادارة";}
elseif($batch==35){echo"الدفعة الثالثة ادارة";}
elseif($batch==25){echo"الدفعة الثانية ادارة";}
elseif($batch==51){echo"الدفعة الاولى ادارة";}

elseif($batch==21){echo"الدفعة الثانية طب";}
elseif($batch==31){echo"الدفعة الثالثة طب";}
elseif($batch==43){echo"الدفعة الرابعة مختبرات";}

elseif($batch==44){echo"الدفعة الرابعة تمريض";}

elseif($batch==34){echo"الدفعة الثالثة تمريض";}

elseif($batch==24){echo"الدفعة الثانية تمريض";}

elseif($batch==14){echo"الدفعة الاولي تمريض";}

elseif($batch==36){echo"الدفعة الثالثة تقانة";}
elseif($batch==46){echo"الدفعة الرابعة تقانة";}
echo"<br>";
echo"تقرير كاش حسب الدفعة";

echo "<table border='2'><tr><th>Id</th><th>Name</th><th>الرقم الجامعي</th><th>Batch</th><th>College</th><th>المدفوع</th><th>الفصل</th><th>غير مدفوع</th><th>الغرض</th><th>TIME</th></tr>";while($row = mysqli_fetch_array($result)) {echo "<tr>";  echo "<td>" . $row['id'] . "</td>";  echo "<td>" . $row['name'] . "</td>";  echo "<td>" . $row['univn'] . "</td>";echo "<td>" . $row['batch'] . "</td>";echo "<td>" . $row['college'] . "</td>";  echo "<td>" . $row['amount'] . "</td>";echo "<td>" . $row['sem'] . "</td>";echo "<td>" . $row['unpaid'] . "</td>";echo "<td>" . $row['description'] . "</td>";echo "<td>" . $row['Time'] . "</td>";  echo "</tr>";  }mysqli_close($con);?><br>
<a href="semp.php">تقرير لدفعة أخرى      </a>

<a href="index.php">HOME</a> 



  	       <!-- Print -->    <a href="javascript:;" onclick="window.print()">        Print</a>