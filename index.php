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
    <style>
      .input1{
        margin:12px;
        border:2px solid black;
        border-radius:4px


      }
      .btn1{
        margin:2px;
        border:2px solid black;
        border-radius:7px;
      }
      .btn1:hover{
        background-image:linear-gradient(to right,#de6262,#ffb88c);
      }
      .navbar{
        background-image:linear-gradient(to right,#de6262,#ffb88c);
      }

      .modal-body{
        background-image:linear-gradient(to right,#de6262,#ffb88c);
      }

      .myfooter{
        background-image:linear-gradient(to right,#de6262,#ffb88c);
      }
     
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark  " >
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
              <a class="nav-link disabled" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href=""
                >About Us</a
              >
            </li>
         
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="contactUs.php"
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
          <button
            type="button"
            class="btn btn-primary m-2"
            data-bs-toggle="modal"
            data-bs-target="#loginModal"
          >
            login
          </button>
          <button
            type="button"
            class="btn btn-primary m-2"
            data-bs-toggle="modal"
            data-bs-target="#signupModal"
          >
            sign UP
          </button>
        </div>
      </div>
    </nav>

    <!-- Modal -->
    <div
      class="modal fade"
      id="loginModal"
      tabindex="-1"
      aria-labelledby="loginModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="loginModalLabel">login</h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form action="login.php" method="post">
              username: <input type="text" name="name" class="input1"><br>
              password: <input type="password" name="password" class="input1"><br>
              <button type="submit" class="btn1 btn-primary">Login</button>
            </form>
      
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="signupModal"
      tabindex="-1"
      aria-labelledby="signupModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="signupModalLabel">Sign Up</h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form action="signup.php" method="post">
              firstname: <input type="text" name="fname" class="input1"><br>
              lastname: <input type="text" name="lname" class="input1"><br>
              username: <input type="text" name="name"  class="input1"> <br>
              password: <input type="password" name="password" class="input1"> <br>
              confirm-password: <input type="password" name="cpassword" class="input1"> <br>

              Email: <input type="email" name="email" class="input1"><br>
              phoneno <input type="text" name="phoneno" class="input1"><br>
              BirthDate <input type="date" name="date" class="input1"><br>
              <button type="submit" class="btn1">submit</button>
            </form>


          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>


    <div id="carouselExample" class="carousel slide ml-8 mr-8" >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="photo-1545209575-704d1434f9cd.jpeg"
            class="d-block w-100"
            alt="..."
          />
        </div>
        <div class="carousel-item">
          <img
            src="photo-1497435334941-8c899ee9e8e9.avif"
            class="d-block w-100"
            alt="..."
          />
        </div>
        <div class="carousel-item">
          <img
            src="photo-1558449028-b53a39d100fc.avif"
            class="d-block w-100"
            alt="..."
          />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExample"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExample"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <footer class="bg-dark text-center text-white myfooter">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
         © 2023 Copyright:
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
