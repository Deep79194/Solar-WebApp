<?php 

$servername="localhost";
$username="root";
$password="";
$database="sPanel";


$conn=mysqli_connect($servername,$username,$password,$database);
if($_SERVER["REQUEST_METHOD"] == "POST"){
         $name=$_POST["name"];
         $password1=$_POST["password"];



         $sql="Select * from signup where name='$name' AND password='$password1'";
         $result=mysqli_query($conn,$sql);
       
         $num=mysqli_num_rows($result);
         echo $num;

    if($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin']= true;
        $_SESSION['username']=$name;
        header("location: home.php");
 
    }
    else{

      // header("location: index.php");
    }

}
?>