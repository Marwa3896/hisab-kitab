<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="file02.css">
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
 if(isset($_POST['submit']))
 {
 
  $Name=$_POST["Name"];
  $email=$_POST["email"];
  $password=$_POST["psw"];
  $cpassword=$_POST["psw-repeat"];
  $emailquery="SELECT * FROM `admin` WHERE Email='$email'";
  $stmt = $db->query($emailquery);
  
  if ($stmt->num_rows > 0) 
  {
    echo "email exist";
  }
  else{
    if($password=== $cpassword)
    {
     $insertquery= "INSERT INTO `admin`( `Name`, `Email`, `Password`, `CPassword`) 
      VALUES ('$Name','$email',' $password',' $cpassword')";
      $stmt = $db->prepare($insertquery);
      $stmt->execute();
      if($insertquery)
      {
        echo"<script>
        alert ('sucessfully register');
  window.location.href='login.php';
        </script>";
      }
      else{
        
        echo "not sucessfully";
      }
    }
    else{
      echo "password not matching";
    }
  }
 }
 ?>
  <form class="modal-content" action="" method="POST">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to join hisab kitab website.</p>
      <hr>
      <label for="Name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="Name" required>

      <!-- <label for="Name"><b> Last Name</b></label>
      <input type="text" placeholder="Enter Last Name" name=" Last Name" required> -->

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Confirm Password</b></label>
      <input type="password" placeholder="Confirm Password" name="psw-repeat" required>
      <button type="submit" name="submit">Sign up</a></button>
    

      
    <!-- </div>
    <div class="container" style="background-color:#f1f1f1">
    <button class="btn" ><a href="login.php">login</a> </button>
    </div> -->
   
  </form>
</div>



</body>
</html>