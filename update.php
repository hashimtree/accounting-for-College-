<html><meta name="viewport" content="width=device-width, initial-scale=1.0">
<html><h3><head>
<style>body{
background-color:#A9A9A9;
color:#DC143C;
text-align:center;
}</style></head>
<title>Gezira College©</title>




<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hajir";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$id=$_POST['id'];
$batch=$_POST['batch'];
$sql = "UPDATE p SET  batch='$batch'WHERE id ='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
echo"for id"; echo$id;} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>




<h2>تحديث رقم الدفعة  
<h2>


<form method="post" action="update.php">
<input type="int" name="id" placeholder="id"/><br>
<br>
<input type="int" name="batch" placeholder="Batch"/><br>
<br><input type="submit" value="submit"/>

</form>


<a href="index.php">HOME</a>
<a href="plist.php">LIST</a>






<a href="index.php">HOME</a>
<a href="plist.php">LIST</a>

