<?php
session_start();
if(!isset($_SESSION['username']))
{
    echo "you are logged out";
    header ('file4.php');
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="file02.css">

<?php
 include_once 'includes/links.php'
 ?>

</head>
<body>
  $conn;
    <?php
  //   $sql = "SELECT * FROM users;";
  //   $result = mysqli_query($con,$sql);
  //   $resultCheck = mysqli_num_rows($result);
  //   if($resultCheck>0)
  //   {
  //     while($row = mysqli_fetch_assoc($result))
  //     {
  //       echo $row['user_email']. "<br>";
  //     }
  //   }
  // }
  
  //d******************************************************
  
include 'dbcon.php';
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "select * from registration where email = '$email'";
    $query = mysqli_query($con,$email_search);

    $email_count = mysqli_num_rows($query);
    
    if($email_count)
 {
    $email_pass = mysqli_fetch_assoc($query);

    $db_pass = $email_pass['password'];

    $db_SESSION['username'] = $email_pass['username'];

    $pass_decode = password_verify($password, $db_pass);

    if($pass_decode)
    {
        echo "Lgin Successful";
    }
    else
    {
      echo "Password Incorrect";
    }
 }
 else
 {
 echo "Invalid Email";
 }

}

?>

  <form class="modal-content animate" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"method="POST">
    <div class="imgcontainer">

      <img src="pic2.png" alt="Avatar" class="avatar">

    </div>
    <div class="container">
      <label for="uname"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit">  <a href="file2.html">Login</a></button>
      
    </div>

    <div class="container" style="background-color:white">
        <button type="submit"> Cancel</button>
   
    </div>
  </form>
</div>



</body>
</html>