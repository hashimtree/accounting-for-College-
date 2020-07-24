<html><meta name="viewport" content="width=device-width, initial-scale=1.0">
<html><h3>
<title>Gezira College©</title>
<?php include "database.php";?>
<?php 
if (isset($_POST['submit'])){
   //Get Post variables
   $id = $_POST['id'];      
   $n= $_POST['name'];
   $c= $_POST['college'];
   $b=$_POST['batch'];
   $a=$_POST['amount'];
   $unp=$_POST['unpaid'];
   $d=$_POST['description'];
$univn=$_POST['univn'];
$s=$_POST['sem'];

   
   $query="insert into usd (id, name, college, batch, amount, unpaid, description, univn, sem) 
   	 values('$id', '$n', '$c', '$b', '$a', '$unp', '$d', '$univn', '$s')";
   $insert_row=$mysqli->query($query);
   //VALIDATE INSERT
	          if($insert_row){
	            echo"لقد تم الادخال بشكل صحيح";
	          }else {
	      		die("Error: (".$mysqli->errno.") ".$mysqli->eerror);
	    	}
        
    
   $msg="DATA has been added";
}

	?>          
       
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>كلية الجزيرة</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>
    <div id="container">
      <header>
        <div class="container"  color="fffggff">
          <h2>ادخال دولار</h2>
	</div>
      </header>
   
	     <form method="post" action="usd.php">   
			<input type="hidden" name="id" />
	     	   <h2>
			<label> الاسم </label>
			<input type="text" name="name" />	   <br>
			<label>الكلية</label>
			<input type="text" name="college" />   <br>
			<label>الدفعة</label>
<input type="int" name="batch"/><br>
<label>المبلغ المدفوع الان</label>
<input type="int" name="amount"/><br>
<label>المتبقي</label>
<input type="int" name="unpaid"/><br>
<label>غرض الدفع</label><input type="text" name="description"/><br>
<label>الرقم الجامعي</label>
<input type="int" name="univn"/><br>
<label>سمستر</label>
<input type="int" name="sem"/><br>
<input type="submit" name="submit" value="اضغط للادخال" />
		   </br>
	     </form>
	</div>
      </main><h4>
 o=Other fees paid r=Remaining fees in full<br><br><h3>
<a href="index.php">HOME</a><br>
<a href="i.php">I/N/F</a><br>
<a href="plist.php">التقرير العام للدفع  الكاش</a><br><a href="bank.php">رابط ادخال ايصالات البنك<br>
<a href="precord.php">طباعة ايصال توريد للطالب</a><br>
<a href="today.php">التقرير العام للكاش</a><br>
<a href="crudedit.php">التعديل</a>

كلية الجزيرة  السودان</div>
    
  </body>
</html>

