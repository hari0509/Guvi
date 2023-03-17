<?php
$connect=mysqli_connect("localhost","root","","myapp9");
//iot 
$a = $_POST['name'];
$b = $_POST['password'];
if($a!='' && $b!='')
{
    $sql = "INSERT INTO iot2(names,pass) VALUES ('".addslashes($a)."','".addslashes($b)."')";
    $connect->query($sql);
    echo "register";
}

?>