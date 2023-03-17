<?php
$connect=mysqli_connect("localhost","root","","myapp9");
$a = $_POST['name'];
$b = $_POST['password'];
if($a!='' && $b!='')
{
    $sql = "SELECT * FROM iot2 WHERE names = '$a' AND pass = '$b'"; }
    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        echo "Login";
      } else {
        echo "Login failed";
      }
    

?>
