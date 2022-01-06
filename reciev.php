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
                <li><a href="home.php" class="active">Home</a></li>
                <li><a href="pay.php">Payable</a></li>
                <li><a href="#">Receivable</a></li>
                <li><a href="remain.php">Remaining</a></li>
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
                <h2>Discription Receivable</h2>
                <ul>
                    <li><span>1</span>A</li>
                    <li><span>2</span>B</li>
                    <li><span>3</span>X</li>
                    <li><span>4</span>Y</li>
                    <li><span>5</span>X</li>
                    <li><span>6</span>C</li>
                </ul>
            </div>

            <div class="box" id="dv">
                <h2>Date</h2>
                <ul>
                    <li><span>1</span>1-10-2021</li>
                    <li><span>2</span>10-10-2021</li>
                    <li><span>3</span>18-10-2021</li>
                    <li><span>4</span>17-10-2021</li>
                    <li><span>5</span>21-10-2021</li>
                    <li><span>6</span>91-10-2021</li>
                </ul>
            </div>

            <div class="box" id="dv1">
                <h2>Amount</h2>
                <ul>
                    <li><span>1</span>10000 <button class="btn"><a href="edit.php">Edit</a> </button><button class="btn"><a href="delet.php">Delete</a> </button></li>
                    <li><span>2</span>20000 <button class="btn"><a href="edit.php">Edit</a> </button><button class="btn"><a href="delet.php">Delete</a> </button></li>
                    <li><span>3</span>40884 <button class="btn"><a href="edit.php">Edit</a> </button><button class="btn"><a href="delet.php">Delete</a> </button></li>
                    <li><span>4</span>54367 <button class="btn"><a href="edit.php">Edit</a> </button><button class="btn"><a href="delet.php">Delete</a> </button></li>
                    <li><span>5</span>56000 <button class="btn"><a href="edit.php">Edit</a> </button><button class="btn"><a href="delet.php">Delete</a> </button></li>
                    <li><span>6</span>89000 <button class="btn"><a href="edit.php">Edit</a> </button><button class="btn"><a href="delet.php">Delete</a> </button></li>
                </ul>
            </div>
        </div>
    </header>
</body>

</html>