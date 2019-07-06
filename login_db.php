<?php
/**
 * Created by PhpStorm.
 * User: KrIsHnAmOoRtHy
 * Date: 9/23/2017
 * Time: 12:33 PM
 */

//name=vignesh&email=vi%40gmail.com&phono=19097423&age=23&pass=vicky&gen=male&course=Python
$name=$_GET['name'];
$pass=$_GET['pass'];


include 'init.php';

$sql="SELECT `cors`,`name` FROM `reg_tb` WHERE `email`='$name' and `pass`='$pass'";

$reg=mysqli_query($con,$sql);

if($row=mysqli_fetch_array($reg)) {

    $course=$row[0];
    $name=$row[1];
    $_SESSION['user']=$name;

    ?>
    <script>
        function fun() {


            <?php
            if ($course == 'Python') {
                echo " window.location.href=\"/online/python.php\";";
            } else {
                echo " window.location.href=\"/online/mad.php\";";
            }
            ?>


        }
        fun();
    </script>
    <?php
}
else {
    ?>

    <script>



            <?php

                echo " window.location.href=\"/online/login.html\";";

            ?>



    </script>
    <?php
}
    ?>
