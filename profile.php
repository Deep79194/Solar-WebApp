<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="profile.css" />
    
   
  </head>
  <body>
 
    <hr class="mt-0 mb-4" />
    <div class="row">
      <div class="col-xl-4 padd">
        <!-- Profile picture card-->
        <div class="card mb-4 mb-xl-0">
          <div class="card-header">Profile Picture</div>
          <div class="card-body text-center">
            <!-- Profile picture image-->
            <img
              class="img-account-profile rounded-circle mb-2"
              src="http://bootdey.com/img/Content/avatar/avatar1.png"
              alt=""
            />
            <!-- Profile picture help block-->
            <div class="small font-italic text-muted mb-4">
              JPG or PNG no larger than 5 MB
            </div>
            <!-- Profile picture upload button-->
            <button class="btn btn-primary" type="button">
              Upload new image
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="row1">
      <div class="col-xl-8">
        <!-- Account details card-->
        <div class="card mb-4">
          <div class="card-header">Account Details</div>
          <div class="card-body">
            <form action="userinfo.php?user1=<?php echo $_GET['user']?>" method="post">
            username:<input
                  class="form-control"
                  id="inputUsername"
                  type="text"
                  placeholder="Enter your username"
                  
                  name="username"
                /><br>
            FirstName:    <input
                    class="form-control"
                    id="inputFirstName"
                    type="text"
                    placeholder="Enter your first name"
                 
                    name="fname"
                  /><br>
            LastName:<input
                    class="form-control"
                    id="inputLastName"
                    type="text"
                    placeholder="Enter your last name"
                  
                    name="lname"
                  /><br>
            Email:<input
                  class="form-control"
                  id="inputEmailAddress"
                  type="email"
                  placeholder="Enter your email address"
              
                  name="email"
                /><br>
            PhoneNumber:    <input
                    class="form-control"
                    id="inputPhone"
                    type="tel"
                    placeholder="Enter your phone number"
          
                    name="phoneno"
                  /><br>   
            BirthDate:      <input
                    class="form-control"
                    id="inputBirthday"
                    type="text"
                    name="birthday"
                    placeholder="Enter your birthday"
            
                  /><br>
            <button type="submit">Save changes</button>    
            </form>

          </div>
        </div>
      </div>
    </div>
    <?php

    
   $id =$_GET['user'];


     $servername="localhost";
     $username="root";
     $password="";
     $database="sPanel";


     $conn=mysqli_connect($servername,$username,$password,$database);

     $sql="select * from `signup` where name='$id'";
     $result=mysqli_query($conn,$sql);
     $num=mysqli_num_rows($result);
     

     if($num>0){
      $row = mysqli_fetch_assoc($result);
      
     }
    
    ?>

     <table style="    border: 2px solid black;
    border-radius: 12px;
    text-align: center;
    margin-left: 331px;
    width: 22%;
    height: 51%;
    margin-top: 18px;
    background-color: beige;
    color: firebrick;">
        <thead>
          <tr colspan="2"><td>user information</td> </tr>
        </thead>
        <tbody>
          <tr>
            <td>username:</td>
            <td><?php print_r($row["name"])?></td>
          </tr>
          <tr>
            <td>firstname:</td>
            <td><?php print_r($row["name1"])?></td>
          </tr>
          <tr>
            <td>lastname:</td>
            <td><?php print_r($row["surname"])?></td>
          </tr>
          <tr>
            <td>email:</td>
            <td><?php print_r($row["email"])?></td>
          </tr>
          <tr>
            <td>birthdate</td>
            <td><?php print_r($row["birthdate"])?></td>
          </tr>
          <tr>
            <td>phoneno:</td>
            <td><?php print_r($row["phoneno"])?></td>
          </tr>
        </tbody>
     </table>

     <button class="btn1"><a href="home.php">Go Back</a></button>
  </body>
</html>
