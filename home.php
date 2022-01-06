<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hissab Kitab</title>
    <link rel="stylesheet" href="file01.css">
  
</head>
<body>
    <header class="header">
        <!-- Left box for logo -->
        <div class="left">
            <img src="pic2.png" alt="">
            <h4 style='color:white'>
            <?php echo $_SESSION['adminname'];?>
        </h4>
        </div>
        <div class="mid">
        <ul class="navbar">
            
            <li><a href="#" class="active">Home</a></li>
            <li><a href="pay.php">Payable</a></li>
            <li><a href="reciev.php">Receivable</a></li>
            <li><a href="remain.php">Remaining</a></li>
            <li><a href="Rules.php">Rules</a></li>
            <li><a href="About.html">About us</a></li>
            <li><a href="Contact.php">Contact us</a></li>
           
           
        </ul>
        </div>
        <div class="right">
            <button class="btn02"><a href="creat.php">Create</a></button>
            <button class="btn02"><a href="logout.php">Logout</a></button>
        </div>
        <div >
            <div class="box">
                <h2>Total Payable</h2>
                <ul>
                    <li><span>1</span></li>
                    <li><span>2</span></li>
                    <li><span>3</span></li>
                    <li><span>4</span></li>
                    <li><span>5</span></li>
                    <li><span>6</span></li>
                </ul>
            </div>

            <div class="box" id="dv">
                <h2>Total Receivable</h2>
                <ul>
                    <li><span>1</span></li>
                    <li><span>2</span></li>
                    <li><span>3</span></li>
                    <li><span>4</span></li>
                    <li><span>5</span></li>
                    <li><span>6</span></li>
                </ul>
            </div>

            <div class="box" id="dv1">
                <h2>Total Balance</h2>
                <ul>
                    <li><span>1</span></li>
                    <li><span>2</span></li>
                    <li><span>3</span></li>
                    <li><span>4</span></li>
                    <li><span>5</span></li>
                    <li><span>6</span></li>
                </ul>
            </div>
        </div>
    </header>
</body>

</html>