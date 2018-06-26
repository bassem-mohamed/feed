<?php
include_once ('plugin.php');
include_once ('connection.php');
$name =$_POST['name'];
$email =$_POST['email'];
$posts =$_POST['posts'];

$sql = "INSERT INTO news(name,email,posts) VALUES ('$name','$email','$posts')";
mysqli_query($conn,$sql);
$conn = exit();
//$vaild =true;
//if( empty($name)){
//    echo "enter your name";
//    $vaild =false;
//}
//if( empty($email)){
//   echo "enter your email";
//    $vaild =false;
//}
//if( empty($posts)){
///   echo "write some thing";
//    $vaild =false;
//}
//elseif($vaild) {
//    echo $posts;
//
//
//
//}
//header("Location: select.php");;
?>
