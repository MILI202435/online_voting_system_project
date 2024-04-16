<?php 
include("connect.php");
$name=$_POST('name');
$mobile=$_POST('mobile');
$password=$_POST('password');
$cpassword=$_POST('cpassword');
$address=$_POST('address');
$address=$_POST('address');
$image=$_FILES('name') ('photo');
$tmp_name=$_FILES('tmp_name')('photo');
$role=$_POST('role');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voting";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if($password==$cpassword){
    move_uploaded_file($tmp_name,"../uploads/$image");
    $insert=mysqli_query($connect,"INSERT INTO user(name,mobile,address,password,photo,role,status,votes) VALUES('$name','$mobile','$password','$address','$image','$role',0,0)");
     if($insert){
        echo '
    <script>
    ("Registration successful!");
     window.loction="../";
     </script>    
    ';
     }
     else{
        echo '
    <script>
    ("Some error occured!")
     window.loction="../routs/register.html";
     </script>    
    ';
     }
    
}


else{
    echo '
    <script>
    ("password and confirm password does not match!");
     window.loction="../routs/register.html";
     </script>    
    ';
}