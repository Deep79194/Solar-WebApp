
<?php 
session_start();


?>
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
      #a1{
        border:2px solid black;
        border-radius:7px;
        color:white;
        text-decoration:none;
        margin-left:8px;
        padding:6px;
      }
      
      .navbar{
        background-image:linear-gradient(to right,#de6262,#ffb88c)
      }
      .myfooter{
        background-image:linear-gradient(to right,#de6262,#ffb88c)
        position:fixed;
     
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
              <a class="nav-link disabled" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="presentation.html"
                >presentation</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="profile.php?user=<?php echo $_SESSION['username']?>"
                >profile setting</a
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
          <div>
          <a href="index.php" id="a1" class="bg-primary ">Logout</a>
          </div>
        </div>
      </div>
    </nav>
<?php

if($_SESSION['loggedin']){

  
  echo "welcome:".$_SESSION['username'];
 
}
?>




    <div>
        <table id="mytab" class="compact">
			
		
			<thead>
				<tr>
					<th >Date</th>
					<th >Electricity Generated</th>
					<th >Electricity Used</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="col">1/4/2023</th>
					<td>15kw</td>
					<td>11kw</td>
				</tr>
				<tr>
					<th scope="col">2/4/2023</th>
					<td>20kw</td>
					<td>18kw</td>
				</tr>
				<tr>
					<th scope="col">3/4/2023</th>
					<td>22kw</td>
					<td>16kw</td>
				</tr>
				<tr>
					<th scope="col">4/4/2023</th>
					<td>22kw</td>
					<td>18kw</td>
				</tr>
				<tr>
					<th scope="col">5/4/2023</th>
					<td>21kw</td>
					<td>20kw</td>
				</tr>
					<tr>
					<th scope="col">6/4/2023</th>
					<td>20kw</td>
					<td>20kw</td>
				</tr>
				<tr>
					<th scope="col">7/4/2023</th>
					<td>25kw</td>
					<td>23kw</td>
				</tr>
				<tr>
					<th scope="col">8/4/2023</th>
					<td>28kw</td>
					<td>26kw</td>
				</tr>
				<tr>
					<th scope="col">9/4/2023</th>
					<td>30kw</td>
					<td>28kw</td>
				</tr>
				<tr>
					<th scope="col">11/4/2023</th>
					<td>23kw</td>
					<td>23kw</td>
				</tr>
				<tr>
					<th scope="col">12/4/2023</th>
					<td>28kw</td>
					<td>22kw</td>
				</tr>
				<tr>
					<th scope="col">13/4/2023</th>
					<td>25kw</td>
					<td>23kw</td>
				</tr>
				<tr>
					<th scope="col">14/4/2023</th>
					<td>20kw</td>
					<td>18kw</td>
				</tr>
				<tr>
					<th scope="col">15/4/2023</th>
					<td>28kw</td>
					<td>26kw</td>
				</tr>
				<tr>
					<th scope="col">10/4/2023</th>
					<td>25kw</td>
					<td>23kw</td>
				</tr>
				<tr>
					<th scope="col">10/4/2023</th>
					<td>25kw</td>
					<td>23kw</td>
				</tr>
				<tr>
					<th scope="col">10/4/2023</th>
					<td>25kw</td>
					<td>23kw</td>
				</tr>
				<tr>
					<th scope="col">10/4/2023</th>
					<td>25kw</td>
					<td>23kw</td>
				</tr>
				<tr>
					<th scope="col">10/4/2023</th>
					<td>25kw</td>
					<td>23kw</td>
				</tr>
				<tr>
					<th scope="col">10/4/2023</th>
					<td>25kw</td>
					<td>23kw</td>
				</tr>
				<tr>
					<th scope="col">10/4/2023</th>
					<td>25kw</td>
					<td>23kw</td>
				</tr>
				<tr>
					<th scope="col">10/4/2023</th>
					<td>25kw</td>
					<td>23kw</td>
				</tr>
				<tr>
					<th scope="col">10/4/2023</th>
					<td>25kw</td>
					<td>23kw</td>
				</tr>
				<tr>
					<th scope="col">10/4/2023</th>
					<td>25kw</td>
					<td>23kw</td>
				</tr>
				<tr>
					<th scope="col">10/4/2023</th>
					<td>25kw</td>
					<td>23kw</td>
				</tr>

				</tbody>
				<tfoot>
				
				</tfoot>
<hr >
        <table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">AC Output Power</th>
      <th scope="col">Daily Generation</th>
      <th scope="col">Monthly Generation</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>670.80W</td>
      <td>9.00kWh</td>
      <td>19.00kWh</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td colspan="2" style="text-align:center;">Annual Generation</td>
      <td>283.50kWh</td>
      
    </tr>
    <tr>
      <th scope="row"></th>
      <td colspan="2" style="text-align:center;">Total Generation</td>
      <td>8.05MWh</td>
    </tr>
  </tbody>
</table>
    </div>
    <footer class="bg-dark text-center text-white myfooter" style="background-image:linear-gradient(to right,#de6262,#ffb88c);">
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


    <!-- <footer class="bg-dark text-center text-white myfooter">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
         © 2020 Copyright:
         <a class="text-white" href="#">mysonalpanel.com</a>
       </div>
    </footer> -->
  </body>
</html>
