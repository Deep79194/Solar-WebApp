
<?php
    $name1=$_POST["name"];
    $email1=$_POST["email"];
    $locality1=$_POST["locality"];
    $terxtArea1=$_POST["textArea"];


      $servername="localhost";
      $username="root";
      $password="";
      $database="sPanel";


      $conn=mysqli_connect($servername,$username,$password,$database);
      $sql="INSERT INTO `contactus`(`name`, `email`, `locality`, `textArea`) VALUES ('$name1','$email1','$locality1','$terxtArea1')";
      $row=mysqli_query($conn,$sql);

      if($row){
        echo "your response succesfully added";
      }
      else{
        echo "your response not added";
      }
    ?>