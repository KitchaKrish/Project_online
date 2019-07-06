<?php
/**
 * Created by PhpStorm.
 * User: KrIsHnAmOoRtHy
 * Date: 9/23/2017
 * Time: 12:33 PM
 */

//name=vignesh&email=vi%40gmail.com&phono=19097423&age=23&pass=vicky&gen=male&course=Python
$name=$_GET['name'];
$email=$_GET['email'];
$phono=$_GET['phono'];
$age=$_GET['age'];
$pass=$_GET['pass'];
$gen=$_GET['gen'];
$course=$_GET['course'];


include 'init.php';

$sql="create table if not EXISTS `reg_tb` (`name` varchar(20), `email` varchar(20), `phono` varchar(20), `age` varchar(20), `pass` varchar(20), `gen` varchar(20), `cors` varchar(20))";

$reg=mysqli_query($con,$sql);

$sql="INSERT INTO `reg_tb` (`name`, `email`, `phono`, `age`, `pass`, `gen`, `cors`) VALUES ('$name', '$email', '$phono', '$gen', '$pass', '$gen', '$course')";

$reg=mysqli_query($con,$sql);

$_SESSION['user']=$name;

?>
<script>
    function fun() {


        <?php
        if($course=='Python'){
            echo " window.location.href=\"/online/python.php\";";
        }
        else
        {
            echo " window.location.href=\"/online/mad.php\";";
        }
        ?>


    }
    fun();
</script>
