<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="file02.css">
</head>
<body>
<?php
$dsn = "hisab";
$username = "root";
$password = "";
@$db = new mysqli('localhost', $username, $password,$dsn);
 if (mysqli_connect_errno()) {
  echo 'Connection error: ' . $db->connect_errno;
 exit;
 }
 
 if(isset($_POST['jj']))
 {
  
  $email=$_POST["email"];
  $password=$_POST["psw"];
  
  $emailquery="SELECT * FROM `admin` WHERE Email='$email' ";
  $stmt = $db->query($emailquery);
 
  $emailcount=mysqli_num_rows($stmt );
 
  if ($emailcount) 
  {
    $emailpass=mysqli_fetch_assoc($stmt);
    $pass=$emailpass["Password"];
    $_SESSION['adminname']=$emailpass['Name'];
    if($password==$pass)

    {
     echo"<script>
      alert ('Sucessfully login');
     window.location.href='home.php';
      </script>";
    }
    else{
      echo "incorrect password";
    }
  }
  else{
    echo "email invalid";
  }
 }
?>
  
  <form class="#" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" >
    <div class="imgcontainer">
      
      <img src="pic2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" name="jj"> Login</button>
      
    </div>
    <!-- <div class="container" style="background-color:white">
        <button type="submit"> Cancel</button>
   
    </div> -->
  </form>
</div>



</body>
</html>