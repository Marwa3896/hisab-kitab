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

        </div>
        <div class="mid">
            <ul class="navbar">
                <li><a href="home.php" >Home</a></li>
                <li><a href="pay.php">Payable</a></li>
                <li><a href="reciev.php">Receivable</a></li>
                <li><a href="#">Remaining</a></li>
                <li><a href="Rules.php">Rules</a></li>
                <!-- <li><a href="About.html">About us</a></li> -->
                <li><a href="Contact.php">Contact us</a></li>
            </ul>

        </div >
        <div class="right">
            <button class="btn02"><a href="creat.php">Create</a></button>
            <button class="btn02"><a href="logout.php">Logout</a></button>
        </div>
        <div >
            <div class="box">
                <h2>Total Payable</h2>
                <ul>
                    <li><span>1</span>57000</li>
                    <li><span>2</span>45000</li>
                    <li><span>3</span>6534</li>
                    <li><span>4</span>2378</li>
                    <li><span>5</span>4579</li>
                    <li><span>6</span>2345</li>
                </ul>
            </div>

            <div class="box" id="dv">
                <h2>Total Receivable</h2>
                <ul>
                    <li><span>1</span>2300</li>
                    <li><span>2</span>2345</li>
                    <li><span>3</span>9876</li>
                    <li><span>4</span>4567</li>
                    <li><span>5</span>6723</li>
                    <li><span>6</span>1267</li>
                </ul>
            </div>

            <div class="box" id="dv1">
                <h2>Remaining Amount</h2>
                <ul>
                    <li><span>1</span>10000</li>
                    <li><span>2</span>20000</li>
                    <li><span>3</span>40884</li>
                    <li><span>4</span>54367</li>
                    <li><span>5</span>56000</li>
                    <li><span>6</span>89000</li>
                </ul>
            </div>
        </div>
    </header>
</body>

</html>