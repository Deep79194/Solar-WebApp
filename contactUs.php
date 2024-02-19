<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <script src="jquery-3.6.0.min.js"></script>
		<link rel="stylesheet" href="datatables.css">
		<script src="datatables.js"></script>
        <script src="home.js"></script>

        <style>
          
.navbar{
        background-image:linear-gradient(to right,#de6262,#ffb88c);
      }
      
          .myfooter{
        background-image:linear-gradient(to right,#de6262,#ffb88c);
      }

           .container{
            padding: 25px 80px;
    margin: 89px 100px;
    width: 93%;
    border: 2px solid black;
    border-radius: 41px

        }
        .form-group input{
            text-align: center;
            display: block;
            width: 508px;
            padding: 1px;
            border: 2px solid black;
            margin: 11px auto;
            font-size: 25px;
            border-radius: 8px;
        }
        .container{
          background-image:linear-gradient(to right,#de6262,#ffb88c);
        }
        .container h3{
            text-align: center;
            font-size: 25px;
        }
        .container button{
            display: block;
            width: 45%;
            margin: 20px auto;
        }
        .form-group textArea{
          margin: 15px 325px;
    width: 507px;
    border: 2px solid black;
    border-radius: 11px;
    text-align: center;
        }    

        .btn{
            color: white;
            background-color: black;
            border: 2px solid gray;
            border-radius: 10px;
            margin: 0px 9px;
            padding: 4px 14px;
            cursor: pointer;
            font-size: 20px;
        }
        .btn:hover{
            background-color: rgb(66, 62, 62);
        }

        #a1{
        border:2px solid black;
        border-radius:7px;
        color:white;
        text-decoration:none;
        margin-left:8px;
        padding:6px;
      }
      </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <img src="" alt="" />
        <a class="navbar-brand" href="#">Solar Panel Monitoring App</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="presentation.html"
                >presentation</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="profile.php"
                >profile setting</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-current="page" href="presentation.html"
                >Contact Us</a
              >
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
          <div>
          <a href="index.php" id="a1" class="bg-primary ">Logout</a>
          </div>
        
        </div>
      </div>
    </nav>




    <div class="container">
        <h3>Enter Your Query Here.</h3>
        <form action="contactUs1.php" method="post">
      
        <div class="form-group">
            <input type="text" name="name" id="" placeholder="enter your name">
        </div>
        <div class="form-group" >

            <input type="text" name="email" id="" placeholder="enter your email">
        </div>
        <div class="form-group" >

            <input type="text" name="locality" id="" placeholder="enter your locality">
        </div>
        <div class="form-group" >

            <textarea name="textArea" id="" cols="30" rows="10" placeholder="enter your query"></textarea>
        </div>
        <button class="btn">submit</button>
        </form>
    </div>
    
    <footer class="bg-dark text-center text-white myfooter">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
         © 2020 Copyright:
         <a class="text-white" href="#">mysonalpanel.com</a>
       </div>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
      integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
      integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
