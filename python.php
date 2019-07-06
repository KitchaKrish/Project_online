<?php
include 'init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mobile</title>

    <style>
        @keyframes anm {
            0%{transform: translatex(-100%);}
            100%{transform: translatex(0%);}

        }
        
    </style>
</head>
<body style="margin: 0;">
<p style="margin-left: 40%;font-size: 26px;">
    PYTHON
</p>
<div style="background-color: #000;margin-left: 0%;height: 45px;margin-top: -28px;color: #fff;">

    <font color="#ffe4c4"></font><p><font style="text-decoration: none;" color="#ffe4c4"> <a style="cursor: pointer;margin-left: 5%;font-size: 25px;color: #fff;text-decoration: none;" onclick="document.getElementById('divop').style.display='block';document.getElementById('divop1').style.display='none';">course details</a><a onclick="document.getElementById('divop').style.display='none';document.getElementById('divop1').style.display='block';" style="margin-left: 3%;font-size: 25px;color: #fff;text-decoration: none;cursor: pointer">
    assignment</a><a href="main.html" style="margin-left: 64%;font-size: 30px;color: #fff;text-decoration: none;">
    logout</a></font></p>

</div>
<div id="divop" style="background-color: #fff;width: 366px;height: 40em;box-shadow: 0px 0px 6px -2px;margin-top: -1.2%;animation: 0.5s ease-in-out anm;display: none;">


    <h3>Unit I</h3>
    <ul>
        <li>indroduction of python
        </li><li>variable
    </li></ul>
    <h3>Unit II</h3>
    <ul>
        <li>operator
        </li><li>function
    </li></ul>
    <h3>Unit III</h3>
    <ul>
        <li>class
        </li><li>file
    </li></ul>




</div>

<div id="divop1" style="background-color: rgb(255, 255, 255); width: 366px; height: 40em; box-shadow: 0px 0px 6px -2px; margin-top: -1.2%; animation: 0.5s ease-in-out 0s normal none 1 running anm; display: none;cursor: pointer">


    <h3>Assignment 1</h3>
    <ul>
        <li>Quiz 1
        </li><li>Quiz 2
    </li></ul>
    <h3>Assignment 2</h3>
    <ul>
        <li>Quiz 1
        </li><li>Quiz 2
    </li></ul>

    <h3>Assignment 1</h3>
    <ul>
        <li>Quiz 1
        </li><li>Quiz 2
    </li></ul>





</div>

<div style="font-size: 3em;text-align: center;color: #ba00ff;text-shadow: -3px 0px 2px #000;">
    <h1>Welcome <?php echo $_SESSION['user']?></h1>

</div>
</body>
</html>