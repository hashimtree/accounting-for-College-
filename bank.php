<html><meta name="viewport" content="width=device-width, initial-scale=1.0">
<html><h3><head><style>body{
background-color: lightgrey;
}</style></head>
<title>Gezira College©</title>
<?php include "database.php";?>
<?php 
if (isset($_POST['submit'])){
   //Get Post variables
   $id = $_POST['idb'];      
   $n= $_POST['bname'];
   $c= $_POST['bcollege'];
   $b=$_POST['bbatch'];
   $a=$_POST['bamount'];
   $unp=$_POST['bunpaid'];
   $d=$_POST['bdescription'];
$univn=$_POST['bunivn'];
$s=$_POST['bsem'];

   
   $query="insert into bank (idb, bname, bcollege, bbatch, bamount, bunpaid, bdescription, bunivn, bsem) 
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
          <h2> شيك و تحويا ادخال رسوم بنك</h2>
	</div>
      </header>
   
	     <form method="post" action="bank.php">   
			<input type="hidden" name="idb" />
	     	   <h2>
			<label> الاسم </label>
			<input type="text" name="bname" />	   <br>
			<label>الكلية</label>
			<input type="text" name="bcollege" />   <br>
			<label>الدفعة</label>
<input type="int" name="bbatch"/><br>
<label>المبلغ المدفوع الان</label>
<input type="int" name="bamount"/><br>
<label>المتبقي</label>
<input type="int" name="bunpaid"/><br>
<label> رقم و تاريخ الشيك او الايصال او التحويل</label><input type="text" name="bdescription"/><br>
<label>الرقم الجامعي</label>
<input type="int" name="bunivn"/><br>
<label>سمستر</label>
<input type="int" name="bsem"/><br>
<input type="submit" name="submit" value="اضغط للادخال" />
		   </br>
	     </form>
	</div>
      </main><h4>
 o=Other fees paid r=Remaining fees in full<br><br><h3>
<a href="index.php">HOME</a><br>
<a href="i.php">I/N/F</a><br>
<a href="plist.php">التقرير العام للدفع  الكاش</a><br><a href="pp.php">رابط ادخال ايصالات البنك<br>
<a href="precord.php">طباعة ايصال توريد للطالب</a><br>
<a href="today.php">التقرير العام للكاش</a><br>
<a href="crudedit.php">التعديل</a>

كلية الجزيرة  السودان</div>
    
  </body>
</html>

