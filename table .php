
<html>
<body>
     <?php
$dsn = "hisaab";
$username = "root";
$password = "";
$count=0;
@$db = new mysqli('localhost', $username, $password,$dsn);
 if (mysqli_connect_errno()) {
  echo 'Connection error: ' . $db->connect_errno;
 exit;
 }
 $query = "SELECT ID, Total_Payable, Total_Receiveable, Total_Balance
 FROM home Where ID=?" ;
//  $PID = (int)$_GET["PID"];
$CID = (int)$_GET["ID"];
 $stmt = $db->prepare($query);
 $stmt->bind_param('s',$CID); 
 $stmt->execute();
 $stmt->store_result();
 $stmt->bind_result($tpayable, $treceive,  $tBalance);
 
 echo "<table      cellspacing='40px'>";
 echo "<tr >";
	
	while($stmt->fetch()) 
	{
	
		
		echo '<td  padding="10px" width=20% height=20% >
      <h3> '.$tpayable.'</h3><br><h3>PKR '.$treceive.'</a><br><br>
      <h3> '.$tBalance.'</h3><br><h3>PKR '.$tpayable.'</h3><br>';
   
    echo "</tr><tr>";
    }
   
    echo "</tr></table>";
    $stmt->free_result();
    $db->close();
 ?>
<br>

<?php include 'footer.php';?>
</body>
</html>