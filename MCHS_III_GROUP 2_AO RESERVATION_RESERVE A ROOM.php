<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css%22%3E">
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
        .whiteinfobox{
            width: 1450px; /* Adjust width as needed */
            padding: 200px;
            border-radius: 25px; /* Optional rounded corners */
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1); /* Optional shadow */
            flex: 1;
            min-height: 300px;
            align-items: center;
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
            margin-top: -40px;
            height:700px;
            padding: 20px;
        }
        /* white box shadow */
        .form-container {
            background-color: white;
            padding: 25px;
            border-radius: 20px;
            width: 800px; /* Adjusted width */
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
            margin: 0 auto; /* Center the form */
                }
.instructions {
            background-color: white;
            padding: 25px;
            border-radius: 20px;
            width: 300px; /* Adjusted width */
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
            text-align: left;
            align-content: center;
            margin: 0 auto; /* Center the form */
            margin-left: 50px;
            height: 505px;
            font-size: 21px;
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
          padding: 8px 12px;
          display: inline-block;
          font-size: 16px;
          transition-duration: 0.4s;
          cursor: pointer;
          width:390px;
          height: 60px;
        }
        .button {
          background-color: #001488;
          color: #ffffff;
          border: 2px solid #001488;
        }
        .button:hover {
          background-color: #4d5cb8;
          color: white;
        }
        /* grey box */
        .page-container {
            display: flex;
            justify-content: center;
            align-items: stretch;
            width: 100%;
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
        .sidebar-left {
            width: 30px;
            background-color: #f0f0f0;
            min-height: 100vh; /* Match grey-box1 height */
            margin-top: -35px;
            margin-left: -40px;
            top: 55px; /* Move it below the light blue bar */
        }
        .sidebar-right {
            right: 0;
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
        /*NOTIFICATIONS*/
.popup-overlay {
            position: fixed; /* Cover the whole viewport */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000; /* Ensure it's on top of other content */
}
.popup-notification {
            background-color: white;
            width: 40%;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            z-index: 1001; /* Ensure it's on top of the overlay */
}
.popup-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
}
.popup-button:hover {
            background-color: #0056b3;
}
    .form-group-inline {
        display: flex;
        gap: 20px; /* Adjust the spacing between the elements */
        margin-bottom: 15px; /* Add some margin below the inline groups */
    }
    .form-group-inline .form-group {
        flex: 1; /* Distribute available space equally */
    }
    .form-group label {
        display: block;
        margin-bottom: 5px;
    }
    .form-group input[type="text"],
    .form-group input[type="date"],
    .form-group input[type="time"],
    .form-group select {
        width: 100%; /* Make the input/select take full width of their container */
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box; /* Include padding and border in the element's total width and height */
        height: auto; /* Reset fixed height if needed */
    }
    /* Adjust width for the selects if needed when inline */
    .form-group-inline .form-group select {
        width: 100%; /* Let flexbox control the width */
    }
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-button {
            background-color: white;
            color: black;
            padding: 4px;
            border-radius: 5px;
            border: 1px solid #ccc;
            cursor: pointer;
            width: 380px; /* Adjust width as needed */
            text-align: left;
            font-size: 13.5px;
            height: 25px;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            width: 193px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            border: 1px solid #ccc;
            border-top: none;
            border-radius: 5px;
            font-size: 13.5px;
        }
        .dropdown-content > div { /* Style for the main categories */
            color: black;
            padding: 8px 12px;
            text-decoration: none;
            display: block;
            cursor: pointer;
        }
        .dropdown-content > div:hover {background-color: #ddd;}
        .sub-menu {
            display: none;
            position: absolute;
            left: 100%;
            top: 0;
            background-color: white;
            border: 1px solid #ccc;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 2;
            width: 193px;
            border-radius: 5px;
            font-size: 13.5px;
        }
        .sub-menu div {
            color: black;
            padding: 8px 12px;
            text-decoration: none;
            display: block;
            cursor: pointer;
        }
        .sub-menu div:hover {background-color: #eee;}
        .show {
            display: block; /* For the main tic-ddcontent */
        }
        .show-submenu {
            display: block; /* For the sub-menus */
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
        <div class="nav-shadow"></div>
        <div class="page-container">
            <div class="sidebar-left"></div>
            <div class="wrapper">
                <div class="form-container">
                    <form id="reservationForm">
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" name="name">
                        </div>
                        <div class="form-group-inline">
                        <div class="form-group">
                            <label>Grade Level:</label>
                            <select id="gradeLevel" name="gradeLevel">
                                <option>Choose an option:</option>
                                <option value="grade7">Grade 7</option>
                                <option value="grade8">Grade 8</option>
                                <option value="grade9">Grade 9</option>
                                <option value="grade10">Grade 10</option>
                                <option value="grade11">Grade 11</option>
                                <option value="grade12">Grade 12</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="section">Section:</label>
                            <select id="section" name="section">
                                    <option value="">Choose your grade level first</option>
                            </select>
                        </div>
                        </div>
                        <div class="form-group">
                            <label>Purpose:</label>
                            <input type="text" name="purpose">
                        </div>
                        <div class="form-group-inline">
                        <div class="form-group">
                        <div class="dropdown">
                            <label for="venue">Venue</label>
                            <div onclick="toggleVenueDropdown()" class="dropdown-button" id="venueButton">Choose an option:</div>
                            <div id="venueDropdown" class="dropdown-content">
                                </div>
                            <input type="hidden" id="venue" name="venue" value="">
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="teacherInCharge">Teacher In Charge:</label>
                            <div class="dropdown">
                                <div onclick="toggleTeacherDropdown()" class="dropdown-button" id="teacherInChargeButton">Choose an option:</div>
                                <div id="teacherInChargeDropdown" class="dropdown-content">
                                    </div>
                                <input type="hidden" id="teacherInCharge" name="teacherInCharge" value="">
                            </div>
                        </div>
                        </div>
                        <div class="form-group-inline">
                        <div class="form-group">
                                                <label>Time Start:</label>
                                                <input type="time" name="timeStart">
                                        </div>
                        <div class="form-group">
                            <label>Date:</label>
                            <input type="date" name="date">
                        </div>
                        </div>
                        <div class="form-group-inline">
                                        <div class="form-group">
                                                <label>Time End:</label>
                                                <input type="time" name="timeEnd">
                                        </div>
                        <button type="submit" class="button">Make a Reservation</button>
                        </div>
                    </form>
                </div>
                <div class="instructions">
                    <p style="text-align: center; font-size: 28px"><b> How to Use the Website </b></p>
                            <p><b>To reserve a room</b> - Click on the ‘Reserve a Room’ tab and fill out the digital form </p>
                            <p><b>To view booked dates</b>- Click on the ‘Calendar’ tab </p>
                            <p><b>To view your account and bookings</b>- Click on the ‘My Account’ tab </p>
                            <p><b>To log out</b> - Click the ‘Log out’ tab </p>
                        </ul>
                </div>
            </div>
        </div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const reservationForm = document.getElementById('reservationForm');
    const gradeLevelDropdown = document.getElementById('gradeLevel');
    const sectionDropdown = document.getElementById('section');
    const venueDropdownElement = document.getElementById('venue'); // Corrected ID
    const teacherInChargeButton = document.getElementById('teacherInChargeButton');
    const teacherInChargeDropdownDiv = document.getElementById('teacherInChargeDropdown');
    const hiddenTeacherInChargeInput = document.getElementById('teacherInCharge');
    const venueButton = document.getElementById('venueButton');
    const venueDropdownDiv = document.getElementById('venueDropdown');
    const hiddenVenueInput = document.getElementById('venue');

    const sectionsByGradeLevel = {
        grade7: [
            { value: 'Agoncillo', text: 'Agoncillo' },
            { value: 'Aquino', text: 'Aquino' },
            { value: 'De Jesus', text: 'De Jesus' },
            { value: 'Dela Rama', text: 'Dela Rama' },
            { value: 'Escoda', text: 'Escoda' },
            { value: 'Kasilag', text: 'Kasilag' },
            { value: 'Magbanua', text: 'Magbanua' },
            { value: 'Silang', text: 'Silang' },
        ],
        grade8: [
            { value: 'Badjao', text: 'Badjao' },
            { value: 'Bagobo', text: 'Bagobo' },
            { value: 'Ifugao', text: 'Ifugao' },
            { value: 'Ivatan', text: 'Ivatan' },
            { value: 'Kalinga', text: 'Kalinga' },
            { value: 'Mangyan', text: 'Mangyan' },
            { value: 'Manobo', text: 'Manobo' },
            { value: 'Maranao', text: 'Maranao' },
        ],
        grade9: [
            { value: 'Bermisa', text: 'Bermisa' },
            { value: 'Carpio', text: 'Carpio' },
            { value: 'Fabella', text: 'Fabella' },
            { value: 'Fenix', text: 'Fenix' },
            { value: 'Fitton', text: 'Fitton' },
            { value: 'Graham', text: 'Graham' },
            { value: 'Kalaw', text: 'Kalaw' },
            { value: 'Lichauco', text: 'Lichauco' },
            { value: 'McMahon', text: 'McMahon' },
        ],
        grade10: [
            { value: 'Bonifacio', text: 'Bonifacio' },
            { value: 'Burnett', text: 'Burnett' },
            { value: 'Fontana', text: 'Fontana' },
            { value: 'Florentino', text: 'Florentino' },
            { value: 'Goquingco', text: 'Goquingco' },
            { value: 'Licad', text: 'Licad' },
            { value: 'Mendoza', text: 'Mendoza' },
            { value: 'Murazaki', text: 'Murazaki' },
        ],
        grade11: [
            { value: 'Abbott', text: 'Abbott' },
            { value: 'Addams', text: 'Addams' },
            { value: 'Adriano', text: 'Adriano' },
            { value: 'Alzona', text: 'Alzona' },
            { value: 'Ban', text: 'Ban' },
            { value: 'Doronila', text: 'Doronila' },
            { value: 'Gandhi', text: 'Gandhi' },
            { value: 'Mead', text: 'Mead' },
            { value: 'Parks', text: 'Parks' },
            { value: 'Thatcher', text: 'Thatcher' },
            { value: 'Pecson', text: 'Pecson' },
            { value: 'Ramos', text: 'Ramos' },
        ],
        grade12: [
            { value: 'Agnesi', text: 'Agnesi' },
            { value: 'Barrion', text: 'Barrion' },
            { value: 'Coronel', text: 'Coronel' },
            { value: 'Cruz', text: 'Cruz' },
            { value: 'Curie', text: 'Curie' },
            { value: 'Del Mundo', text: 'Del Mundo' },
            { value: 'Dizon', text: 'Dizon' },
        ],
    };

    const venuesByCategory = {
        classrooms: [
            { value: 'room101', text: 'Room 101' },
            { value: 'room102', text: 'Room 102' },
            { value: 'room103', text: 'Room 103' },
        ],
        laboratories: [
            { value: 'labA', text: 'Laboratory A' },
            { value: 'labB', text: 'Laboratory B' },
        ],
        sports: [
            { value: 'gymnasium', text: 'Gymnasium' },
            { value: 'field', text: 'Field' },
        ],
        viewingroom: [
            { value: 'viewing1', text: 'Viewing Room 1' },
            { value: 'viewing2', text: 'Viewing Room 2' },
        ],
        others: [
            { value: 'auditorium', text: 'Auditorium' },
            { value: 'canteen', text: 'Canteen' },
        ],
    };

    const teachersByArea = {
        stem: [
            { value: 'teacherSTEM1', text: 'Ms. Christina Budikey' },
            { value: 'teacherSTEM2', text: 'Ms. Marie Lizares' },
        ],
        abm: [
            { value: 'teacherABM1', text: 'Ms. Jaelah Pagalilauan' },
            { value: 'teacherABM2', text: 'Ms. Loriemae Luz' },
        ],
        humss: [
            { value: 'teacherHUMSS1', text: 'Ms. Princess Nicasio' },
            { value: 'teacherHUMSS2', text: 'Ms. Hyunseo We' },
        ],
        // Add more areas and teachers as needed
    };

    function populateDropdown(dropdown, options) {
        dropdown.innerHTML = '<option value="">Choose an option</option>';
        options.forEach(optionData => {
            const option = document.createElement('option');
            option.value = optionData.value;
            option.textContent = optionData.text;
            dropdown.appendChild(option);
        });
        dropdown.disabled = false;
    }

    /*TEACHER IN CHARGE*/
    function populateTeacherCategories(dropdownDiv, categories) {
        dropdownDiv.innerHTML = ''; // Clear previous content
        for (const category in categories) {
            if (categories.hasOwnProperty(category)) {
                const categoryDiv = document.createElement('div');
                categoryDiv.textContent = category.toUpperCase(); // Display category name
                categoryDiv.addEventListener('click', function(event) {
                    // Prevent the main dropdown from closing immediately
                    event.stopPropagation();
                    populateTeacherSubMenu(this, teachersByArea[category]);
                });
                dropdownDiv.appendChild(categoryDiv);
            }
        }
    }

    function populateTeacherSubMenu(categoryDiv, teachers) {
        // Remove any existing sub-menu
        let subMenu = categoryDiv.querySelector('.sub-menu');
        if (subMenu) {
            subMenu.remove();
            return; // Toggle off
        }

        if (!teachers || teachers.length === 0) {
            return; // No teachers in this category
        }

        subMenu = document.createElement('div'); // Ensure subMenu is newly created
        subMenu.classList.add('sub-menu');

        teachers.forEach(teacher => {
            const teacherDiv = document.createElement('div');
            teacherDiv.textContent = teacher.text;
            teacherDiv.dataset.value = teacher.value;
            teacherDiv.addEventListener('click', function(event) {
                event.stopPropagation(); // Prevent closing the main dropdown
                teacherInChargeButton.textContent = this.textContent;
                hiddenTeacherInChargeInput.value = this.dataset.value;
                teacherInChargeDropdownDiv.classList.remove('show');
                // Optionally remove the sub-menu after selection
                subMenu.remove();
            });
            subMenu.appendChild(teacherDiv);
        });
        categoryDiv.appendChild(subMenu); // Append the sub-menu to the category div
        subMenu.classList.add('show-submenu'); // Make the sub-menu visible
    }

    function toggleTeacherDropdown() {
        document.getElementById("teacherInChargeDropdown").classList.toggle("show");
        const dropdownDiv = document.getElementById("teacherInChargeDropdown");
        if (dropdownDiv.classList.contains('show')) {
            populateTeacherCategories(dropdownDiv, teachersByArea);
        }
    }

    /* VENUE */
    function populateVenueCategories(dropdownDiv, categories) {
    dropdownDiv.innerHTML = ''; // Clear previous content
    for (const category in categories) {
        if (categories.hasOwnProperty(category)) {
            const categoryDiv = document.createElement('div');
            categoryDiv.textContent = category.toUpperCase(); // Display category name
            categoryDiv.addEventListener('click', function(event) {
                event.stopPropagation();

                // Close any currently open sub-menu in this dropdown
                const openSubMenu = dropdownDiv.querySelector('.sub-menu.show-submenu');
                if (openSubMenu && openSubMenu.parentNode !== this) {
                    openSubMenu.classList.remove('show-submenu');
                    openSubMenu.remove(); // Optionally remove the elements from the DOM
                }

                populateVenueSubMenu(this, venuesByCategory[category]);
            });
            dropdownDiv.appendChild(categoryDiv);
        }
    }
}

    function populateVenueSubMenu(categoryDiv, venues) {
        let subMenu = categoryDiv.querySelector('.sub-menu');
        if (subMenu) {
            subMenu.remove();
            return;
        }

        if (!venues || venues.length === 0) {
            return;
        }

        subMenu = document.createElement('div');
        subMenu.classList.add('sub-menu');

        venues.forEach(venue => {
            const venueDiv = document.createElement('div');
            venueDiv.textContent = venue.text;
            venueDiv.dataset.value = venue.value;
            venueDiv.addEventListener('click', function(event) {
                event.stopPropagation();
                venueButton.textContent = this.textContent;
                hiddenVenueInput.value = this.dataset.value;
                venueDropdownDiv.classList.remove('show');
                subMenu.remove();
            });
            subMenu.appendChild(venueDiv);
        });
        categoryDiv.appendChild(subMenu);
        subMenu.classList.add('show-submenu');
    }

    function toggleVenueDropdown() {
        document.getElementById("venueDropdown").classList.toggle("show");
        const dropdownDiv = document.getElementById("venueDropdown");
        if (dropdownDiv.classList.contains('show')) {
            populateVenueCategories(dropdownDiv, venuesByCategory);
        }
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropdown-button')) { // Reverted class name
            const dropdowns = document.getElementsByClassName("dropdown-content"); // Reverted class name
            for (let i = 0; i < dropdowns.length; i++) {
                const openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                    // Also remove any open sub-menus
                    const subMenus = openDropdown.querySelectorAll('.sub-menu');
                    subMenus.forEach(subMenu => subMenu.remove());
                }
            }
        }
    }

    /* GRADE LEVEL AND SECTION */
    gradeLevelDropdown.addEventListener('change', function() {
        const selectedGradeLevel = this.value;
        sectionDropdown.disabled = true;
        sectionDropdown.innerHTML = '<option value="">Choose a grade level first</option>';
        if (sectionsByGradeLevel[selectedGradeLevel]) {
            populateDropdown(sectionDropdown, sectionsByGradeLevel[selectedGradeLevel]);
        }
        teacherInChargeButton.textContent = 'Select a Teacher';
        hiddenTeacherInChargeInput.value = '';
        venueButton.textContent = 'Select a Venue';
        hiddenVenueInput.value = '';
    });
    sectionDropdown.disabled = true;

    // Initial population of teacher categories
    populateTeacherCategories(teacherInChargeDropdownDiv, teachersByArea);
    // Initial population of venue categories
    populateVenueCategories(venueDropdownDiv, venuesByCategory);

    function displayPopup(title, message, onCloseCallback) {
        console.log("Attempting to display popup:", title);
        const popupOverlay = document.createElement('div');
        popupOverlay.classList.add('popup-overlay');
        popupOverlay.innerHTML = `
            <div class="popup-notification">
                <h2>${title}</h2>
                <p>${message}</p>
                <button type="button" class="popup-button" id="close-popup">Close</button>
            </div>
        `;
        document.body.appendChild(popupOverlay);

        const closeButton = document.getElementById('close-popup');
        closeButton.addEventListener('click', function() {
            console.log("Popup closed.");
            popupOverlay.remove();
            if (onCloseCallback) {
                onCloseCallback();
            }
        });

        popupOverlay.addEventListener('click', function(event) {
            if (event.target === popupOverlay) {
                console.log("Clicked outside popup, closing.");
                popupOverlay.remove();
                if (onCloseCallback) {
                    onCloseCallback();
                }
            }
        });
    }

    /*POP UP NOTIF*/
    reservationForm.addEventListener('submit', function(event) {
        console.log("Submit button clicked.");
        event.preventDefault();

        const formElements = reservationForm.querySelectorAll('input[type="text"], select, input[type="hidden"]'); // Include hidden input
        let isFormValid = true;
        let firstInvalidElement = null;

        formElements.forEach(element => {
            if (element.type === 'hidden') {
                if (element.id === 'teacherInCharge') {
                    if (!element.value.trim()) {
                        isFormValid = false;
                        if (!firstInvalidElement) {
                            firstInvalidElement = teacherInChargeButton; // Focus the dropdown button
                        }
                        teacherInChargeButton.classList.add('error-input');
                    } else {
                        teacherInChargeButton.classList.remove('error-input');
                    }
                } else if (element.id === 'venue') {
                    if (!element.value.trim()) {
                        isFormValid = false;
                        if (!firstInvalidElement) {
                            firstInvalidElement = venueButton;
                        }
                        venueButton.classList.add('error-input');
                    } else {
                        venueButton.classList.remove('error-input');
                    }
                }
            } else if (!element.value.trim()) {
                isFormValid = false;
                element.classList.add('error-input');
                if (!firstInvalidElement) {
                    firstInvalidElement = element;
                }
            } else {
                element.classList.remove('error-input');
            }
        });

        console.log("Form validity:", isFormValid);

        if (!isFormValid) {
            displayPopup("Incomplete Form", "Please fill in all required fields.", () => {
                if (firstInvalidElement) {
                    firstInvalidElement.focus();
                }
            });
        } else {
            displayPopup("Request for Reservation Submitted!", "Please refer to your inbox in the <br> 'My Account' tab to view the status of your <br> request.", () => {
                reservationForm.reset();
                sectionDropdown.disabled = true;
                sectionDropdown.innerHTML = '<option value="">Choose a grade level first</option>';
                teacherInChargeButton.textContent = 'Select a Teacher';
                hiddenTeacherInChargeInput.value = '';
                venueButton.textContent = 'Select a Venue';
                hiddenVenueInput.value = '';
            });
        }
    });
    console.log("Submit event listener attached to the form.");

});

function toggleTeacherDropdown() {
    document.getElementById("teacherInChargeDropdown").classList.toggle("show");
    const dropdownDiv = document.getElementById("teacherInChargeDropdown");
    if (dropdownDiv.classList.contains('show')) {
        populateTeacherCategories(dropdownDiv, teachersByArea);
    }
}

function toggleVenueDropdown() {
    document.getElementById("venueDropdown").classList.toggle("show");
    const dropdownDiv = document.getElementById("venueDropdown");
    if (dropdownDiv.classList.contains('show')) {
        populateVenueCategories(dropdownDiv, venuesByCategory);
    }
}
</script>
        <div class="sidebar-right"></div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
