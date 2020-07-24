<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
$con=mysqli_connect("localhost","root","","quizzer");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$username=$_POST['upassword']; 
echo "GEZIRA COLLEGE©:"; 

$result = mysqli_query($con,"SELECT * FROM users WHERE upassword='$username'");



echo "<table border='2'>

<tr>

<th>Question Number</th>

<th>Correct Answer</th>

<th></th>

<th></th>

</tr>";



while($row = mysqli_fetch_array($result))
 {




 

  echo "<td>" . $row['question_number'] . "</td>";

  

  echo "<td>" . $row['choice'] . "</td>";

  echo "</tr>";

  

}


mysqli_close($con);
?>
