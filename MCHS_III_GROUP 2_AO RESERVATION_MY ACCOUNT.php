
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

h1, p {
    font-family: 'Montserrat', sans-serif;
    font-weight: 400; /* Adjust for boldness */
    letter-spacing: 0.5px; /* Optional: Adjust spacing */
}

.container {
    display: flex;
    justify-content: center; /* Centers horizontally */
    align-items: center; /* Centers vertically */
    padding: 20px;
    flex-wrap: wrap; /* Prevents stretching */
    width: 100%; /* Ensures full width */
    padding-top: 0;
    margin-top: 0;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
 left: 0;
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
  padding: 8px 110px;
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

.container {
    display: flex;
    justify-content: center; /* Centers horizontally */
    align-items: center; /* Centers vertically */
    padding: 20px;
    flex-wrap: wrap; /* Prevents stretching */
    width: 100%; /* Ensures full width */
    padding-top: 0;
    margin-top: 0;
}
.navbar-custom {
 height: 35px;
 background-color: #001488; /* RED */
 width: 100%;
 margin-bottom: 0; /* Remove gap */
 bottom: 0;
 display: flex;
 left: 15px;
 justify-content: space-around; /* Even spacing for links */
 padding: 0; /* Adjust side spacing */
    position: relative;
    z-index: 1000;
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
    min-height: auto;
    padding-top: 20px;
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

 .profile-container {
        display: flex;
        align-items: left;
        justify-content: flex-start;
    }

.profile-pic {
    width: 250px;
    height: 250px;
    border-radius: 50%;
    object-fit: cover;
    margin-left: 1px;
    }

.profile-box {
    background-color: white;
    padding: 30px;
    border-radius: 40px;
    text-align: left;
    margin-top: -10px;
    width: 900px;
    height: 200px;
    margin-bottom: 20px;
    margin-left: 50px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    }

.profile-text {
    text-align: left;
    margin-top: -10px;
    }

.reservation-container {
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }

.reservation-box {
   background-color: white;
   padding: 10px;
   border-radius: 20px;
   text-align: center;
   margin-top: 0px;
   margin-bottom: 15px;
   font-size: 18px;
   width: 1215px;
   height: 250px;
   box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
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
    width: 92.5%; /* Full width */
    padding: 40px;
    background-color: #D3D3D3; /* Light grey background */
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    min-height: 150px; /* Adjust height */
    display: block; /* Ensures full width */
    margin-top: -20px; /* connects to the light blue bar */
    position: relative;
    z-index: 1; 
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

.sidebar-left {
    width: 20px; 
    background-color: #f0f0f0; 
    min-height: 100vh; /* Match grey-box1 height */
    margin-top: -35px; 
    top: 55px; /* Move it below the light blue bar */
}

.sidebar-right {
    right: 0; 
}

   table {
       width: 100%;
   }

   th, td {
       padding: 12px;
       text-align: center;
       border-bottom: 1px solid #ddd;
       width:200px;
   }

   th {
       background-color: #001488;
       color: white;
       text-align: center;
       font-weight: bold;
       font-size: 20px;
   }

   table tr > td:nth-child(2) {
          font-weight: bold;
    }

</style>
    
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

                   <b> <li class="nav-item"><a class="nav-link" href="MCHS_III_GROUP 2_AO RESERVATION_RESERVE A ROOM.php" style ="text-decoration: underline" >Reserve a Room</a></li> </b>

                   <b> <li class="nav-item"><a class="nav-link" href="MCHS_III_GROUP 2_AO RESERVATION_CALENDAR.php"style ="text-decoration: underline">Calendar</a></li> </b>

                   <b> <li class="nav-item"><a class="active" href="MCHS_III_GROUP 2_AO RESERVATION_MY ACCOUNT.php" style ="text-decoration: underline">My Account</a></li> </b>

                   <b> <li class="nav-item"><a class="nav-link" href="MCHS_III_GROUP 2_AO RESERVATION_LOG OUT.php"style ="text-decoration: underline">Log out</a></li> </b>
                </ul>
            </div>
        </div>
    </nav>


<!-- Light Blue Bar (Directly Below Navbar) -->
<div class="nav-shadow">
</div>

<!-- Page Container Holding the Sidebars and Main Content -->
<div class="page-container"> 

<!-- Left Sidebar -->
    <div class="sidebar-left"></div>

<!-- Grey Background Area --> <div class="grey-box1">
        <div class="profile-container">
            <div class="profile-pic">
                <img class="profile-pic" src="PFP.png" alt="Profile Picture">
            </div>
            <div class="profile-box">
                <div class="profile-text">
                <p style="font-family: 'Poppins', sans-serif; letter-spacing: 1px; font-size: 24px;"> <b>Name: Ysabelle Budikey</b> </p>
                <p style="font-family: 'Poppins', sans-serif; letter-spacing: 1px; font-size: 24px;"> <b>ID No.: 2020900082</b> </p>
                <p style="font-family: 'Poppins', sans-serif; letter-spacing: 1px; font-size: 24px;"> <b>Grade and Section: 12-Agnesi</b> </p>
                <p style="font-family: 'Poppins', sans-serif; letter-spacing: 1px; font-size: 24px;"> <b>Email Address: ybudikey0082@mc-knoller.edu.ph</b> </p>
                </div>
            </div>
        </div>

<div class="reservation-box">

<table>
<thead>
    <tr>
        <th>Reservation Details</th>
        <th>Status</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>Status of request for LIS 204 on April 24, 3:00PM - 5:00PM</td>
        <td>PENDING</td>
    </tr>
    <tr>
        <td>Status of request for VR 4 on April 3, 1:00PM - 3:30PM</td>
        <td>APPROVED</td>
    </tr>
</tbody>
</table>
</div>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>