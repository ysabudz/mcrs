<!DOCTYPE html>
<html>
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css%22%3E">

    <!-- Bootstrap JS (needed for some Bootstrap functionalities) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">

    <title>Miriam College Reservation System </title>


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
  padding: 8px 180px;
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
    background-color: ;
    border-radius: 20px;
    height: ;
    width: 250%;
    text-align: center;
}

.container-fluid {
    padding-left: 0;
    margin-left: 0;
    padding-top: 0;
    margin-top: 0;
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
    height: 1000px;
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
    height: 100%;
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

 /*WEEK NAVIGATION*/

.week-nav {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    font-weight: bold;
    gap: 20px; /* Space between elements */
    margin-bottom: 50px;
    margin-right: 700px;
        }

#weekHeader {
    display: flex; /* Use Flexbox */
    justify-content: space-between; /* Space items evenly */
    align-items: center; /* Center items vertically */
    padding: 10px;
    font-size: 18px;
    font-weight: bold;
}

#weekHeader span#weekYear {
    flex-grow: 1; /* Allow the weekYear span to grow and take up available space */
    text-align: center; /* Center the text */
    line-height: 20px;
}

.weekLeft, .weekRight {
    display: inline-block;
    width: 0;
    height: 0;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    cursor: pointer;
}

.weekLeft {
    border-right: 15px solid cornflowerblue;
    margin-left: 90px;
}

.weekRight {
    border-left: 15px solid cornflowerblue;
    margin-right: 900px;
}

    .week-text {
    font-size: 24px;
    font-weight: bold;
    text-align: center;
    min-width: 300px;  /* Adjust width to fit the longest week name */
    text-align: center;
    display: inline-block;
}

 .calendar-box {
    background-color: white;
    padding: 30px;
    border-radius: 20px;
    text-align: center;
    font-size: 18px;
    width: 100%;
    max-width: 1100px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    margin-right: 130px; /* Adjust or remove as needed */
    margin-top: -80px;
    position: relative; /* For positioning dropdown if needed */
    display: flex; /* Enable flexbox for initial layout */
    flex-direction: column; /* Stack month-nav and table vertically */
    align-items: stretch; /* Make children take full width */
}

.calendar-navigation {
    display: flex;
    align-items: center; /* Vertically align items in the navigation bar */
    margin-bottom: 10px; /* Add some space below the navigation */
    gap: 20px; /* Space between month, year selectors, and week navigation */
}

.month-selector,
.year-selector {
    display: flex;
    align-items: center;
    gap: 5px;
}

/* MONTH FILTERS */

.month-selector select,
.year-selector select  {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 10px;
    font-size: 20px;
    text-align: center;
    width: 200px;
    font-weight: bold;
    background-color: lightblue;
    padding: 10px;
}

/* FILTERS */
.dropdown {
    margin-right: auto; /* Changed to auto to potentially help with overall positioning */
    margin-bottom: -10px;
    margin-top: -10px;
    position: relative;
    width: 250px; /* Keep the button width */
}

.dropdown > button {
    padding: 10px 20px;
    cursor: pointer;
    width: 100%; /* Make the button take the full width of the dropdown container */
    font-weight: bold;
    font-size: 20px;
    color: white;
    background-color: darkblue;
    text-align: center; /* Align text to the left for better readability */
    border-radius: 10px;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 100%; /* Make it at least as wide as the button */
    list-style: none;
    padding: 0;
    margin: 0;
    box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
    z-index: 2;
    left: 0; /* Align the left side with the button */
    top: 100%;

}

.dropdown:hover > .dropdown-content {
    display: block; /* Keep as block */
}

.dropdown-content li {
    position: relative;
    width: 100%;
}

.dropdown-content li a,
.submenu li a,
.subsubmenu li a {
    display: block;
    padding: 12px 16px;
    text-decoration: none;
    color: black;
    white-space: nowrap; /* Prevent text from wrapping */
}

.dropdown-content li a:hover,
.submenu li a:hover,
.subsubmenu li a:hover {
    background-color: cornflowerblue;
    color: white;
}

.submenu {
    display: none;
    position: absolute;
    left: 100%;
    top: 0;
    background-color: #f9f9f9;
    min-width: 160px; /* Adjust as needed */
    list-style: none;
    padding: 0;
    margin: 0;
    box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
    z-index: 3;
    white-space: nowrap; /* Prevent wrapping */
}

.dropdown-content li:hover > .submenu {
    display: block;
}

.subsubmenu {
    display: none;
    position: absolute;
    left: 100%;
    top: 0;
    background-color: #f9f9f9;
    min-width: 10px; /* Adjust as needed */
    list-style: none;
    padding: 0;
    margin: 0;
    box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
    z-index: 4;
    white-space: nowrap; /* Prevent wrapping */
}

.submenu li:hover > .subsubmenu {
    display: block;
}

/* Ensure full visibility of sub-submenus */
.dropdown-content, .submenu, .subsubmenu {
    overflow: visible; /* Prevent clipping */
}

/*CALENDAR TABLE*/
        
        #calendarTable thead {
            height: 60px; /* Adjust this value as needed */
        }

        #calendarTable {
            width: 100%;
            table-layout: fixed;
            border-collapse: collapse;
            text-align: center;
        }
        
        #calendarTable th {
            text-align: center;
            vertical-align: middle; /* Center vertically */
            padding: 10px 5px;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            text-transform: uppercase;
            letter-spacing: 2px;
            border-bottom: 1px solid black;
            position: relative;
            width: 140px;
            border-bottom: none;
        }

        #calendarTable th::after {
            content: attr(data-date);
            display: block;
            font-size: 24px;
            font-weight: bold;
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            line-height: 1.2;
        }

        #calendarTable td {
            padding:10px;
            height: 10px;
        }

        #calendarTable td:nth-child(1),
        #calendarTable td:nth-child(2),
        #calendarTable td:nth-child(3),
        #calendarTable td:nth-child(4),
        #calendarTable td:nth-child(5),
        #calendarTable td:nth-child(6),
        #calendarTable th:nth-child(1),
        #calendarTable th:nth-child(2),
        #calendarTable th:nth-child(3),
        #calendarTable th:nth-child(4),
        #calendarTable th:nth-child(5),
        #calendarTable th:nth-child(6){
            border-right: 1px solid black;
        }

        #calendarTable th:first-child {
               border-right: none;
               margin-right: -20px;
           }

        #calendarTable td:first-child{
            border-bottom: 1px darkgray;
        }

        #calendarTable th:nth-child(2) {
               border-left: none;
           }


        #calendarTable td:nth-child(7) {
               border-left: none;
           }

        #calendarTable th:first-child, #calendarTable td:first-child {
            white-space: nowrap;
        }
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
                <ul class="navbar-nav">
                   <b> <li class="nav-item"><a class="nav-link" href="MCHS_III_GROUP 2_AO RESERVATION_AO_APPROVAL.php" style ="text-decoration: underline">Approval</a></li> </b>

                   <b> <li class="nav-item"><a class="active" href="MCHS_III_GROUP 2_AO RESERVATION_AO_CALENDAR.php"style ="text-decoration: underline">Calendar</a></li> </b>

                   <b> <li class="nav-item"><a class="nav-link" href="MCHS_III_GROUP 2_AO RESERVATION_AO_LOG OUT.php"style ="text-decoration: underline">Log out</a></li> </b>
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
    
  <div class="whiteinfobox" style="position: absolute; top: 90px; right: -75px;">  

<!-- Main Content Section -->
    <div class="wrapper">

<!-- Calendar Section-->

<!-- Calendar Month Header -->
<div class="container">

 <div class="calendar-box">
     
     <div class="calendar-navigation">
    <div class="month-selector">
        <select id="monthDropdown">
            <option value="0" data-month="0">January</option>
            <option value="1" data-month="1">February</option>
            <option value="2" data-month="2">March</option>
            <option value="3" data-month="3" selected>April</option>
            <option value="4" data-month="4">May</option>
            <option value="5" data-month="5">June</option>
            <option value="6" data-month="6">July</option>
            <option value="7" data-month="7">August</option>
            <option value="8" data-month="8">September</option>
            <option value="9" data-month="9">October</option>
            <option value="10" data-month="10">November</option>
            <option value="11" data-month="11">December</option>
        </select>
    </div>
    <div class="year-selector">
        <select id="yearDropdown">
            <option value="2023" data-year="2023">2023</option>
            <option value="2024" data-year="2024">2024</option>
            <option value="2025" data-year="2025" selected>2025</option>
            <option value="2026" data-year="2026">2026</option>
            <option value="2027" data-year="2027">2027</option>
            </select>
    </div>
     <!-- FILTERS -->
<div class="dropdown">
    <button>Filters</button>
    <ul class="dropdown-content">
        <li class="dropdown-submenu">
            <a href="#" data-filter="Classrooms">Classrooms</a>
            <ul class="submenu">
                <a href="#" data-filter="LIS Building">LIS Building</a>
                <a href="#" data-filter="BER Building">BER Building</a>
                <a href="#" data-filter="JOS Building">JOS Building</a>
            </ul>
        </li>
        <li class="dropdown-submenu">
            <a href="#" data-filter="Laboratories">Laboratories</a>
            <ul class="submenu">
                <li><a href="#" data-filter="Science Laboratory">Science Laboratory</a></li>
                <li><a href="#" data-filter="Computer Laboratory">Computer Laboratory</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu">
            <a href="#" data-filter="Outdoor Venues">Sports Venues</a>
            <ul class="submenu">
                <li class="dropdown-sub-submenu">
                    <a href="#" data-filter="Sports Complex">Sports Complex</a>
                    <ul class="subsubmenu">
                        <li><a href="#" data-filter="Basketball Court">Basketball Court</a></li>
                        <li><a href="#" data-filter="Volleyball Court">Volleyball Court</a></li>
                    </ul>
                </li>
                <li><a href="#" data-filter="SMJ Field">SMJ Field</a></li>
                <li><a href="#" data-filter="College Field">College Field</a></li> <!---not exactly a part of hs reservations but ao can contact heu for this-->
            </ul>
        </li>
        <li class="dropdown-submenu">
            <a href="#" data-filter="Indoor Venues">Viewing Room</a>
        </li>
        <li class="dropdown-submenu">
            <a href="#" data-filter="Indoor Venues">Other Venues</a>
            <ul class="submenu">
                <li><a href="#" data-filter="Music Room">Music Room</a></li>
                <li><a href="#" data-filter="Art Room">Art Room</a></li>
            </ul>
        </li>
        <li>
            <a href="#" data-filter="all">Show All</a>
        </li>
    </ul>
</div>
</div>
<!--WEEK NAV-->

     <table style="width:100%" id="calendarTable">
         <thead>
             <tr>
                 
                 <th><span id = "weekYear" style="display: none;"></span><span class="weekLeft" onclick="prevWeek()"></span></th>
                 <th>Mon</th>
                 <th>Tue</th>
                 <th>Wed</th>
                 <th>Thu</th>
                 <th>Fri</th>
                 <th rowspan="8">Sat</th>
                 <th><span class="weekRight" onclick="nextWeek()"></span></th>
             </tr>
         </thead>
         <tbody id="calendarBody">
             </tbody>
     </table>
 </div>
</div>

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
    (function() {
        // DOM Elements
        const weekYear = document.getElementById("weekYear");
        const monthDropdown = document.getElementById("monthDropdown");
        const yearDropdown = document.getElementById("yearDropdown");
        const calendarBody = document.getElementById("calendarBody");

        // Calendar State
        let currentMonth = parseInt(monthDropdown.options[monthDropdown.selectedIndex].dataset.month);
        let currentYear = parseInt(yearDropdown.options[yearDropdown.selectedIndex].dataset.year);
        let currentDate = getFirstWeekContainingFirst(currentYear, currentMonth);
        const weekdaysToShow = 6;

        // Data Constants
        const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        const daysOfWeek = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

        // Dummy Reservation Data (Replace with your actual data)
        let reservations = [
            { roomName: "LIS 204", date: "2025-04-10", startTime: "11:30 AM", endTime: "12:30 AM", type: "LIS Room", building: "LIS Building", roomNumber: "LIS 204", venueType: "Classrooms" },
            { roomName: "LIS 205", date: "2025-04-21", startTime: "11:30 AM", endTime: "1:00 PM", type: "LIS Room", building: "LIS Building", roomNumber: "LIS 205", venueType: "Classrooms" },
            { roomName: "Science Laboratory A", date: "2025-04-11", startTime: "11:30 AM", endTime: "1:00 PM", type: "Sci Lab", building: "Laboratories", roomNumber: "Sci Lab A", venueType: "Laboratories" },
            { roomName: "Computer Laboratory B", date: "2025-04-15", startTime: "09:00 AM", endTime: "10:30 AM", type: "Comp Lab", building: "Laboratories", roomNumber: "CL 1", venueType: "Laboratories" },
            { roomName: "BER 123", date: "2025-04-22", startTime: "02:00 PM", endTime: "03:30 PM", type: "BER Room", building: "BER Building", roomNumber: "BER 123", venueType: "Classrooms" },
            { roomName: "JOS 144", date: "2025-04-03", startTime: "09:00 AM", endTime: "10:00 AM", type: "JOS Room", building: "JOS Building", roomNumber: "JOS 144", venueType: "Classrooms" },
            { roomName: "Basketball Court", date: "2025-04-23", startTime: "03:00 PM", endTime: "05:00 PM", type: "Sports Complex", building: "Sports Complex", roomNumber: "Basketball Court", venueType: "Indoor Venues" },
            { roomName: "Volleyball Court", date: "2025-04-24", startTime: "01:00 PM", endTime: "02:30 PM", type: "Sports Complex", building: "Sports Complex", roomNumber: "Volleyball Court", venueType: "Indoor Venues" },
            { roomName: "SMJ Field", date: "2025-04-11", startTime: "04:30 PM", endTime: "06:00 PM", type: "SMJ Field", building: "Outdoor", roomNumber: "SMJ Field", venueType: "Outdoor Venues" },
            { roomName: "College Field", date: "2025-04-18", startTime: "10:00 AM", endTime: "12:00 PM", type: "College Field", building: "Outdoor", roomNumber: "CF 1", venueType: "Outdoor Venues" },
            { roomName: "Music Room", date: "2025-04-07", startTime: "08:00 AM", endTime: "09:00 AM", type: "Music Room", building: "LMC Building", roomNumber: "LMC 401", venueType: "Other Venues" },
            { roomName: "Art Room", date: "2025-04-08", startTime: "01:00 PM", endTime: "02:30 PM", type: "Art Room", building: "Art Room", roomNumber: "LMC 402", venueType: "Other Venues" },
            { roomName: "Viewing Room 1", date: "2025-03-31", startTime: "10:30 AM", endTime: "2:30 PM", type: "Viewing Room", building: "Viewing Room", roomNumber: "VR 1", venueType: "Indoor Venues" },
            { roomName: "Viewing Room 2", date: "2025-04-10", startTime: "1:30 PM", endTime: "4:30 PM", type: "Viewing Room", building: "Viewing Room", roomNumber: "VR 2", venueType: "Indoor Venues" },
            { roomName: "Viewing Room 3", date: "2025-04-02", startTime: "11:00 AM", endTime: "1:30 PM", type: "Viewing Room", building: "Viewing Room", roomNumber: "VR 3", venueType: "Indoor Venues" },
             { roomName: "Marian Auditorium (BLUE'S GRADUATION <3)", date: "2025-05-22", startTime: "07:30 AM", endTime: "12:30 PM", type: "Other Venues", building: "Other Venues", roomNumber: "Marian Auditorium", venueType: "Other Venues" }
        ];
        let filteredReservations = [...reservations];

        // --- Helper Functions ---
        function getFirstWeekContainingFirst(year, month) {
            let firstDay = new Date(year, month, 1);
            let dayOfWeek = firstDay.getDay();
            let daysToSubtract = dayOfWeek === 0 ? 6 : dayOfWeek - 1;
            firstDay.setDate(firstDay.getDate() - daysToSubtract);
            return firstDay;
        }

        function formatDate(date) {
            return `${date.getFullYear()}-${(date.getMonth() + 1).toString().padStart(2, '0')}-${date.getDate().toString().padStart(2, '0')}`;
        }

        function generateTimeSlots() {
            let startTime = 7;
            let endTime = 18;
            let timeSlots = [];
            for (let hour = startTime; hour < endTime; hour++) {
                const formattedHour = formatHourForMerge(hour);
                timeSlots.push({ time: formattedHour, isHourStart: true });
                timeSlots.push({ time: formattedHour, isHourStart: false });
            }
            return timeSlots;
        }

        function formatHourForMerge(hour) {
            let period = hour >= 12 ? "PM" : "AM";
            let formattedHour = hour > 12 ? hour - 12 : hour;
            if (hour === 12) formattedHour = 12;
            if (hour === 0) formattedHour = 12;
            return `${formattedHour}:00 ${period}`;
        }

        function convertTo24Hour(hour, period) {
            let res24Hour = parseInt(hour);
            if (period === 'PM' && hour !== 12) res24Hour += 12;
            if (period === 'AM' && hour === 12) res24Hour = 0;
            return res24Hour;
        }

        function getHourFromTime(timeString) {
            const [time, period] = timeString.split(' ');
            let [hour, minute] = time.split(':').map(Number);
            if (period === 'PM' && hour !== 12) hour += 12;
            if (period === 'AM' && hour === 12) hour = 0;
            return hour;
        }

        function getMinuteFromTime(timeString) {
            const [time] = timeString.split(' ');
            return parseInt(time.split(':')[1]);
        }

        function calculateDurationInHalfHours(startTime, endTime) {
            const startHour = getHourFromTime(startTime);
            const startMinute = getMinuteFromTime(startTime);
            const endHour = getHourFromTime(endTime);
            const endMinute = getMinuteFromTime(endTime);
            const startTotalMinutes = startHour * 60 + startMinute;
            const endTotalMinutes = endHour * 60 + endMinute;
            const durationMinutes = endTotalMinutes - startTotalMinutes;
            return Math.ceil(durationMinutes / 30);
        }

        // --- Calendar Update Functions ---
        function updateWeek() {
            let startDate = new Date(currentDate);
            const dayHeaders = document.querySelectorAll("#calendarTable th");
            for (let i = 1; i < dayHeaders.length - 1; i++) {
                let day = new Date(startDate);
                day.setDate(startDate.getDate() + (i - 1));
                dayHeaders[i].textContent = daysOfWeek[day.getDay()];
                dayHeaders[i].setAttribute("data-date", day.getDate());
            }
            const weekStart = formatDate(startDate);
            const weekEnd = formatDate(new Date(startDate.getTime() + (weekdaysToShow - 1) * 24 * 60 * 60 * 1000));
            weekYear.textContent = `${weekStart} - ${weekEnd}`;
        }

        function updateMonth() {
            monthDropdown.value = currentMonth;
        }

        function updateYear() {
            yearDropdown.value = currentYear;
        }

        function updateMonthBasedOnFirstOfMonth() {
            let firstDayOfCurrentMonth = new Date(currentYear, currentMonth, 1);
            let firstDisplayedDay = new Date(currentDate);
            if (firstDisplayedDay.getMonth() !== firstDayOfCurrentMonth.getMonth() ||
                firstDisplayedDay.getFullYear() !== firstDayOfCurrentMonth.getFullYear()) {
                currentMonth = firstDisplayedDay.getMonth();
                currentYear = firstDisplayedDay.getFullYear();
                updateMonth();
                updateYear();
            }
        }

        function populateCalendar(reservationsToDisplay = filteredReservations) {
            calendarBody.innerHTML = "";
            let startTime = 7;
            let endTime = 18;
            let startDate = new Date(currentDate);
            let occupiedCells = {};

            const buildingColors = {
                "LIS Building": "darkseagreen",
                "BER Building": "lightcoral",
                "JOS Building": "skyblue",
                "Sports Complex": "darksalmon",
                "Viewing Room": "khaki",
                "Sports Venues": "plum",
                "Laboratories": "lightpink",
                "Outdoor Venues": "lightgreen",
                "Other Venues": "lightblue",
                "Science Laboratory": "lightpink",
                "Computer Laboratory": "lightpink",
                "Outdoor": "lightgreen",
                "Art Room": "lightblue",
                "Music Room": "lightblue"
            };

            for (let hour = startTime; hour < endTime; hour++) {
                const hourFormatted = formatHourForMerge(hour);
                for (let half = 0; half < 2; half++) {
                    let row = document.createElement("tr");
                    if (half === 0) {
                        let timeCell = document.createElement("td");
                        timeCell.textContent = hourFormatted;
                        timeCell.rowSpan = 2;
                        row.appendChild(timeCell);
                    }
                    for (let dayIndex = 0; dayIndex < weekdaysToShow; dayIndex++) {
                        let cellId = `${formatDate(new Date(startDate.getTime() + dayIndex * 86400000))}-${hour}-${half}`;
                        if (occupiedCells[cellId]) continue;
                        let cell = document.createElement("td");
                        let currentDateForCell = new Date(startDate);
                        currentDateForCell.setDate(currentDateForCell.getDate() + dayIndex);
                        let formattedDate = formatDate(currentDateForCell);

                        reservationsToDisplay.forEach(reservation => {
                            if (reservation.date === formattedDate) {
                                const resStartHour = getHourFromTime(reservation.startTime);
                                const resStartMinute = getMinuteFromTime(reservation.startTime);
                                const resEndHour = getHourFromTime(reservation.endTime);
                                const resEndMinute = getMinuteFromTime(reservation.endTime);
                                const currentSlotStartMinute = half === 0 ? 0 : 30;
                                const currentSlotEndHour = hour + (half === 1 ? 1 : 0);
                                const currentSlotEndMinute = half === 0 ? 30 : 0;
                                const resStartTotalMinutes = resStartHour * 60 + resStartMinute;
                                const resEndTotalMinutes = resEndHour * 60 + resEndMinute;
                                const currentSlotStartTotalMinutes = hour * 60 + currentSlotStartMinute;
                                const currentSlotEndTotalMinutes = currentSlotEndHour * 60 + currentSlotEndMinute;
                                if (currentSlotEndHour === 24) currentSlotEndTotalMinutes = Infinity;

                                if (resStartTotalMinutes >= currentSlotStartTotalMinutes && resStartTotalMinutes < currentSlotEndTotalMinutes && !occupiedCells[cellId]) {
                                    const durationInHalfHours = calculateDurationInHalfHours(reservation.startTime, reservation.endTime);
                                    cell.textContent = reservation.roomName;
                                    cell.style.backgroundColor = buildingColors[reservation.building] || 'lightblue';
                                    if (durationInHalfHours > 1) {
                                        cell.rowSpan = durationInHalfHours;
                                        for (let spanRow = 0; spanRow < durationInHalfHours; spanRow++) {
                                            const spanHour = hour + Math.floor(spanRow / 2);
                                            const spanHalf = (half + spanRow) % 2;
                                            occupiedCells[`${formattedDate}-${spanHour}-${spanHalf}`] = true;
                                        }
                                    }
                                } else if (resStartTotalMinutes < currentSlotEndTotalMinutes && resEndTotalMinutes > currentSlotStartTotalMinutes && occupiedCells[cellId]) {
                                    cell.style.display = 'none';
                                }
                            }
                        });
                        row.appendChild(cell);
                    }
                    calendarBody.appendChild(row);
                }
            }
        }

        // --- Event Handlers ---
        function prevWeek() {
            currentDate.setDate(currentDate.getDate() - 7);
            updateWeek();
            populateCalendar();
            updateMonthBasedOnFirstOfMonth();
        }

        function nextWeek() {
            currentDate.setDate(currentDate.getDate() + 7);
            updateWeek();
            populateCalendar();
            updateMonthBasedOnFirstOfMonth();
        }

        function handleMonthChange() {
            currentMonth = parseInt(this.value);
            currentDate = getFirstWeekContainingFirst(currentYear, currentMonth);
            updateWeek();
            updateMonth();
            populateCalendar();
        }

        function handleYearChange() {
            currentYear = parseInt(this.value);
            currentDate = getFirstWeekContainingFirst(currentYear, currentMonth);
            updateWeek();
            updateYear();
            populateCalendar();
        }

        function handleFilterClick(event) {
            event.preventDefault();
            const filterValue = this.getAttribute('data-filter');
            if (filterValue) {
                filterCalendar(filterValue);
            }
        }

        function filterCalendar(filterValue) {
            console.log("Filtering by:", filterValue);
            filteredReservations = reservations.filter(reservation => {
                if (filterValue === 'all') return true;
                if (reservation.venueType === filterValue) return true;
                if (reservation.building === filterValue) return true;
                return false;
            });
            populateCalendar(filteredReservations);
        }

        // --- Initialization and Event Listeners ---
        updateWeek();
        updateMonth();
        updateYear();
        populateCalendar();

        // Calendar Navigation Event Listeners
        document.querySelector('.weekLeft').addEventListener('click', prevWeek);
        document.querySelector('.weekRight').addEventListener('click', nextWeek);

        // Month and Year Dropdown Event Listeners
        monthDropdown.addEventListener('change', handleMonthChange);
        yearDropdown.addEventListener('change', handleYearChange);

        // Dropdown Menu Event Listeners
        const dropdownButton = document.querySelector('.dropdown > button');
        const dropdownContent = document.querySelector('.dropdown-content');
        const dropdownSubmenus = document.querySelectorAll('.dropdown-submenu');
        const submenus = document.querySelectorAll('.submenu');
        const dropdownSubSubmenus = document.querySelectorAll('.dropdown-sub-submenu');
        const subsubmenus = document.querySelectorAll('.subsubmenu');
        const filterLinks = document.querySelectorAll('.dropdown-content a[data-filter]');


        if (dropdownButton && dropdownContent) {
            dropdownButton.addEventListener('click', function(event) {
                event.stopPropagation();
                dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
                submenus.forEach(submenu => submenu.style.display = 'none');
                subsubmenus.forEach(subsubmenu => subsubmenu.style.display = 'none');
            });
        }

        function showSubmenu(targetSubmenu) {
            targetSubmenu.style.display = 'block';
        }

        function hideSubmenu(targetSubmenu) {
            targetSubmenu.style.display = 'none';
        }

        function hideAllDirectSubmenus(parentItem) {
             const allSubmenusInParent = parentItem.parentNode.querySelectorAll('.submenu');
             allSubmenusInParent.forEach(submenu => {
                if (submenu !== parentItem.querySelector('.submenu')) {
                    hideSubmenu(submenu);
                }
             });
        }

        function hideAllSubSubmenus() {
            subsubmenus.forEach(hideSubmenu);
        }

        dropdownSubmenus.forEach(item => {
            const submenu = item.querySelector('.submenu');
             const anchor = item.querySelector('a');
            if (submenu && anchor) {
                anchor.addEventListener('mouseenter', function(event) {
                    event.stopPropagation();
                    hideAllDirectSubmenus(item);
                    hideAllSubSubmenus();
                    showSubmenu(submenu);
                });

                item.addEventListener('mouseleave', function(event) {
                    submenu.addEventListener('mouseenter', function() {
                        showSubmenu(this);
                    });
                    submenu.addEventListener('mouseleave', function() {
                        hideSubmenu(this);
                    });
                });
            }
        });

        dropdownSubSubmenus.forEach(item => {
            const subsubmenu = item.querySelector('.subsubmenu');
            const anchor = item.querySelector('a');
            if (subsubmenu && anchor) {
               anchor.addEventListener('mouseenter', function(event) {
                    event.stopPropagation();
                    showSubmenu(subsubmenu);
                });

                item.addEventListener('mouseleave', function(event) {
                    subsubmenu.addEventListener('mouseenter', function() {
                        showSubmenu(this);
                    });
                    subsubmenu.addEventListener('mouseleave', function() {
                        hideSubmenu(this);
                    });
                });
            }
        });

        filterLinks.forEach(link => {
            link.addEventListener('click', handleFilterClick);
        });

        document.addEventListener('click', function(event) {
            if (!event.target.closest('.dropdown')) {
                if (dropdownContent) {
                    dropdownContent.style.display = 'none';
                }
                submenus.forEach(hideSubmenu);
                subsubmenus.forEach(hideSubmenu);
            }
        });
    })();
});
</script>
<br>
<br>

</div>
</div>
</div>

  <!-- Right Sidebar -->
<div class="sidebar-right"></div>
</div>

</div>

</center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>

