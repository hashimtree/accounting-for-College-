<html><meta name="viewport" content="width=device-width, initial-scale=1.0">
<html><h3><head><style>body{
background-color: red;
}</style></head>
<?php include "database.php"; ?>

<?php 
if (isset($_POST['submit'])){
   //Get Post variables
   $id = $_POST['id'];      
   $n= $_POST['name'];
   $a=$_POST['amount'];
   $d=$_POST['description'];
$tto=$_POST['tto'];
$nn=$_POST['no'];
$ca=$_POST['cash'];
$f=$_POST['ffrom'];
$dd=$_POST['DATE'];
   $query="insert into exp (id, name, amount,  description, tto, no,  cash, ffrom, DATE) 
   	 values('$id', '$n', '$a',  '$d', '$tto',  '$nn', '$ca', '$f', '$dd')";
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
        <div class="container">
          <h1>المصروفات<h1>
	</div>
      </header>


      <main>
	<div class="container">
	   <h2></h2>
	     
	     <form method="post" action="exp.php">
	     	   <p>
			
		   </p>
	     	   <p>
			<label></label>
			<input type="hidden" name="id" />
		   </p>
	     	   <p><h2>
			<label> <p>الاسم </label>
			<input type="text" name="name" />
		   </p>
	     	   <p>
			<label>AMOUNT</label>
			<input type="int" name="amount" />
		   </p>
	     	   <p>
			<label>DESCRIPTION</label>
<input type="text" name="description"/><p>
<label>CHECK NO</label>
<input type="int" name="no"/><p>
<label>TO</label>
<input type="text" name="tto"/><p>
<label>CASH</label><input type="int" name="cash"/><p>
<label>PAID BY</label>
<input type="text" name="ffrom"/><p>
<p><p><label>CHECK DATE</label>
<input type="DATE" name="DATE"/><p>
<p>


			
			<input type="submit" name="submit" value="اضغط للادخال" />
		   </p>
	     </form>
	</div>
      </main><p><p><br><br><h3>
<a href="plist.php">التقرير العام للدفع</a><br>
<a href="precord.php">طباعة ايصال للطالب</a><br>
<a href="sum.php">SUM</a><br>
<a href="today.php">Daily Report</a><br>
<a href="p.php">HOME</a>
<a href="btoday.php">BANK DAILY REPORT</a>
<a href="btotal.php">BANK TOTAL REPORT</a>



    <footer>
      <div class="container">
كلية الجزيرة للعلوم الطبية و التكنولوجيا السودان</div>
    </footer>
  </body>
</html>
