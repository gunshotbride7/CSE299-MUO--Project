<?php

$con=mysqli_connect('localhost', 'root', '', 'mypharmacy');
if(!$con){
    die(mysqli_error($con));
}
?>