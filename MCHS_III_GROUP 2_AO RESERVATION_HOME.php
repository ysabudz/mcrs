
<!DOCTYPE html>
<html>
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css%22%3E">

    <title>Miriam College Reservation System </title>


     <form method="POST" action="MCHS_III_GROUP 2_AO RESERVATION_REQUEST FOR RESERVATION SUBMITTED.php">


<style>

img {
  object-position: top left;
  margin-left:80px;

}


.text {
  font-size: 20px;
  padding-left: 20px; /*spacing away from the mc logo image */
  letter-spacing: 1px;

}

  .container {
  display: flex;
  align-items:top left;
  justify-content: top left;
}

.p {

  display: flex;
  align-items:top left;
  justify-content: top left;
  font-family:Arial, Helvetica, sans-serif;

}

 /* NAV BAR*/
  ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden; /* box for the navigation bar*/
  background-color: #001488; /* blue nav color */
}

li {
  float: left;
}

li a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 10px 135px; /* DONT TOUCH*/
  text-decoration: none;
  height: 20px;
  font-family:Arial, Helvetica, sans-serif;
  font-size: 18px;
  white-space: nowrap; /* Prevents text from wrapping */

}
.navbar-custom ul {
  display: flex;
  justify-content: space-evenly; /* Distributes links evenly */
  padding: 0;
  margin: 0;
  width: 100%;
}
/* nav bar color hover*/
li a:hover {
  background-color: rgba(255, 255, 255, 0.2);
  border-radius: 5px;
  background-color: #ffcd1b;
}

 ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

li {
  display: inline;
}

/* nav bar active page */
.active {
  background-color: #ffcd1b;
}

.h1
{
  font-family:Montserrat, Century Gothic, sans-serif;
  font-size: ;
}

.navbar-custom {
 height: 35px;
 background-color: #001488; /* RED */
 width: 100%;
 margin-bottom: 0; /* Remove gap */
 display: flex;
 left: 15px;
 justify-content: space-around; /* Even spacing for links */
 padding: 0; /* Adjust side spacing */

}
}

.h1
{

  font-family:Montserrat, Century Gothic, sans-serif;

}

.whiteinfobox{

    width: 1450px; /* Adjust width as needed */
    padding: 200px;
    border-radius: 25px; /* Optional rounded corners */
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1); /* Optional shadow */
    flex: 1;
    min-height: 300px;

}


 /*for the main reservation box */
.container {
    background-color: ;
    border-radius: 20px;
    box-shadow: 2px 8px 9px rgba(0, 0, 0, 0.2);
    width: 220%;
    text-align: center;
}

/* Main Content Wrapper */ /* vh = spacing going down from the grey box (white box) */

.wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: calc(110vh - 90px); /* Adjust height based on navbar, the white box */
    padding: 20px;
}

/* white box shadow */
.form-container {
    background-color: white;
    padding: 25px;
    border-radius: 20px;
    width: 70%; /* width of the white text box */
    box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
    text-align: center;
}

.container-fluid {
    padding-left: 0 !important;
    padding-right: 0 !important;
}

/*info in the text box*/
.form-group {
    margin-bottom: 15px;
    text-align: left;

}

label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
    
}
/* the input rectangle boxes */
input {
    width: 98%;
    padding: 8px;
    border: 1px solid #ccc;
}

/* make a reservation button */

.button {
  background-color: #1728c1;
  border: none;
  color: white;
  padding: 8px 45px;
  text-align: right;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}


.button {
  background-color: #001488; 
  color: #ffffff; 
  border: 2px solid #001488;
}

.button:hover {
  background-color: #4d5cb8;
  color: #1728c1;
}

/* grey box */
.page-container {
    display: flex;
    justify-content: center; /* centers everything */
    align-items: stretch; /* Makes sidebars extend fully */
    width: 100%px;
    background-color: #D3D3D3; 
}

a {
    color: white;

}

a:visited {
    color: white; /* Ensures it stays white after being clicked */
}

p
{
    font-family: 'Poppins', sans-serif;
    font-weight: 450;
    letter-spacing: 1.5px;

}

.password-container {
    justify-content: space-between;
}


/* grey sidebars */
.sidebar-left,
.sidebar-right {
    width: 35px; 
    background-color: #f0f0f0; 
    min-height: 100vh; /* Match grey-box1 height */
    top: 65px; /* Move it below the light blue bar */
}

.sidebar-left {
    left: 20px; /* Aligns it to the left */
    margin-top: -15px; /* up or down sa side bars */
    margin-right: 1420px; /* Increase this value to move it more left */
}

.sidebar-right {
    right: 0; /* Aligns it to the right */
}

/* light blue bar below navbar */
.nav-shadow {
    background-color: #6C7ED2; /* light Blue */
    height: 15px; /* adjust thickness */
    width: 100%vw;
    position: relative; 
    z-index: 10; 
    box-shadow: 0px 5px 15px rgba(0, 0, 255, 0.3); /* Blue shadow effect */
} 

</style>


</form>
</head>

<body>

<br>
<br>

<div class="header-container"> 
    <div class="header">
<div style="display: flex; align-items: center;">
    <img src="mclogo.png" alt="Miriam College Logo" style="margin-right: 15px;" width="128" height="128">
    <div>
        <h1 style="margin: 0;" style="font-family: Montserrat, Century Gothic, sans-serif; font-size: 24px;">Miriam College Reservation System (MCRS)</h1>
        <p style="margin: 0;">Miriam College High School</p>
    </div>
</div>


<br>
<br>
<br>

 <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                   <b> <li class="nav-item"><a class="active" href="MCHS_III_GROUP 2_AO RESERVATION_RESERVE A ROOM.php" style ="text-decoration: underline" >Reserve a Room</a></li> </b>

                   <b> <li class="nav-item"><a class="nav-link" href="MCHS_III_GROUP 2_AO RESERVATION_CALENDAR.php"style ="text-decoration: underline">Calendar</a></li> </b>

                   <b> <li class="nav-item"><a class="nav-link" href="MCHS_III_GROUP 2_AO RESERVATION_MY ACCOUNT.php" style ="text-decoration: underline">My Account</a></li> </b>

                   <b> <li class="nav-item"><a class="nav-link" href="MCHS_III_GROUP 2_AO RESERVATION_LOG OUT.php"style ="text-decoration: underline">Log out</a></li> </b>
                </ul>
            </div>
        </div>
    </nav>

   <!-- Light Blue Bar (Directly Below Navbar) -->
<div class="nav-shadow"></div>
    </div>

<!-- Page Container Holding the Sidebars and Main Content -->
<div class="page-container">

<!--------- Left Sidebar --------->
    <div class="sidebar-left"></div>

<!------------------------ White Box Info Area -------------------------------> 

<div class="whiteinfobox" style="position: absolute; top: 90px; right: -75px;">  

<!-- Main Content Section -->
    <div class="wrapper">
        <div class="form-container">

            <form>
                <div class="form-group">
                    <label> Name:</label>
                    <input type="text">
                </div>

                <div class="form-group">
                    <label>Grade & Section:</label>
                    <input type="text">
                </div>

                <div class="form-group">
                    <label>Purpose:</label>
                    <input type="text">
                </div>

                <div class="form-group">
                    <label>Venue:</label>
                    <input type="text">
                </div>

                <div class="form-group">
                    <label>Date:</label>
                    <input type="date">
                </div>

                <div class="form-group">
                    <label>Time:</label>
                    <input type="time">
                </div>

                <div class="form-group">
                    <label>Teacher in Charge:</label>
                    <input type="text">
                </div>

<div class="password-container">
<button class="button" style="text-decoration:underline; float:right; color: whitesmoke; text-decoration: none;"> <a href=" MCHS_III_GROUP 2_AO RESERVATION_REQUEST FOR RESERVATION SUBMITTED.php"> Make a Reservation </button> </a>

</div>
            </form>
        </div>
    </div>
</center>
</div>

 <!-- Right Sidebar -->
<div class="sidebar-right"></div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>



