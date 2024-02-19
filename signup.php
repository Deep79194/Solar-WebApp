<?php 
    $name=$_POST["name"];
    $password1=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    $email=$_POST["email"];
    $phoneno=$_POST["phoneno"];
    $birthdate=$_POST["date"];
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
   


      $servername="localhost";
      $username="root";
      $password="";
      $database="sPanel";


      $conn=mysqli_connect($servername,$username,$password,$database);

      if($password1 == $cpassword ){
      $sql="INSERT INTO `signup`(`name`, `password`,`date`,`email`,`phoneno`,`birthdate`,`name1`,`surname`) VALUES ('$name','$password1',current_timestamp(),'$email','$phoneno','$birthdate','$fname','$lname')";
      $row=mysqli_query($conn,$sql);

      if($row){
        echo "your response succesfully added";
      }
      else{
        echo "your response not added";
      }
    }
    else{

      echo "password is not same";
    }


?>


<a href="index.php">back to login page</a>