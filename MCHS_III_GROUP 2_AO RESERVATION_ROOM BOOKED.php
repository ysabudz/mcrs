
<!DOCTYPE html>
<html>
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css%22%3E">

    <title>Miriam College Reservation System </title>


     <form method="POST" action="">


<style>

img {
  object-position: top left;
  margin-left:80px;

}

  .container {
  display: flex;
  align-items:top left;
  justify-content: top left;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
 left: 10px;
  overflow: hidden; /* box for the navigation bar*/
  background-color: #001488;
}

li {
  float: left;
}

/* nav bar texts */
li a {
  display: block;
  color: white;
  font-family: ;
  text-align: center;
  padding: 8px 100px;
  text-decoration: none;
  height: 20px;
  font-family:Arial, Helvetica, sans-serif;
  font-size: 18.8px;

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

h1, p {
    font-family: 'Montserrat', sans-serif;
    font-weight: 400; /* Adjust for boldness */
    letter-spacing: 0.5px; /* Optional: Adjust spacing */
}

.navbar-custom {
 height: 35px;
 background-color: #001488;
 width: 100%;
 margin-bottom: 0; /* Remove gap */
 display: flex;
 left: 15px;
 justify-content: space-around; /* Even spacing for links */
 padding: 0; /* Adjust side spacing */

}

}
 /*for the main reservation box */
.container {
    background-color: white;
    border-radius: 20px;
    height:;
    box-shadow: 2px 8px 9px rgba(0, 0, 0, 0.2);
    width: 215%;
    text-align: center;
}


/* Main Content Wrapper */ /* vh = spacing going down from the grey box (white box) */

.wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: calc(110vh - 90px); /* Adjust height based on navbar */
    padding: 20px;
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

input {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.confirmation-box {
            background-color: white;
            padding: 55px;
            border-radius: 40px;
            text-align: center;
            font-size: 18px;
            max-width: 1200px;
            margin: auto;
            margin-top: 55px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            letter-spacing: 1.0px;
}

/* light blue bar below navbar */
.nav-shadow {
    background-color: #6C7ED2; /* light Blue */
    height: 15px; /* adjust thickness */
    width: 100%vw;
    left: 18px;
    position: relative; 
    z-index: 10; 
    box-shadow: 0px 5px 15px rgba(0, 0, 255, 0.3); /* Blue shadow effect */

   
}

/* grey Box (below light blue bar) */
.grey-box1 {
    width: 101%; /* Full width */
    padding: 40px;
    background-color: #D3D3D3; /* Light grey background */
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    min-height: 150px; /* Adjust height */
    display: block; /* Ensures full width */
    margin-top: -20px; /* connects to the light blue bar */
}

/* grey box */
.page-container {
    display: flex;
    justify-content: center; /* centers everything */
    align-items: stretch; /* Makes sidebars extend fully */
    width: 100%;
    background-color: white; 
    padding: 20px 0; 
}

/* grey sidebars */
.sidebar-left,
.sidebar-right {
    width: 20px; 
    background-color: #f0f0f0; 
    min-height: 100vh; /* Match grey-box1 height */
    margin-top: -35px; 
    top: 55px; /* Move it below the light blue bar */
}

.sidebar-right {
    right: 0; 
}

</style>


</form>
</head>



<body>

<br>
<br>


<div style="display: flex; align-items: center;">
    <img src="mclogo.png" alt="Miriam College Logo" style="margin-right: 15px;" width="128" height="128">
    <div>
        <h1 style="margin: 0;" style="font-family: Montserrat, Century Gothic, sans-serif; font-size: 24px;">Miriam College Reservation System (MCRS)</h1>
        <p style="margin: 0;">Miriam College High School</p>
    </div>
</div>


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


<!-- Page Container Holding the Sidebars and Main Content -->
<div class="page-container">

<!-- Left Sidebar -->
    <div class="sidebar-left"></div>

<!-- Grey Background Area -->
<div class="grey-box1">

    <!-- Main Content Section -->
    <div class="wrapper">
        <div class="confirmation-box">
            <p style="font-family: 'Poppins', sans-serif;letter-spacing: 1.5px; font-size: 32px;"><b>Sorry, this room has already booked.</b></p>
            <p style="font-family: 'Poppins', sans-serif;letter-spacing: 1.5px; font-size: 26px;">Please refresh your page.</p>
        </div>
    </div>

</div>

<script>
  window.onload = function() {
    if (performance.navigation.type === performance.navigation.TYPE_RELOAD) {
      window.location.replace("MCHS_III_GROUP 2_AO RESERVATION_RESERVE A ROOM.php"); //goes back to forms when refreshed
    }
  };
</script>

  <!-- Right Sidebar -->
<div class="sidebar-right"></div>
</div>

</div>

</center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>


