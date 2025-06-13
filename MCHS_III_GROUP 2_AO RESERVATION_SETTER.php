<!DOCTYPE html>
<html>
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css%22%3E">

    <title>Miriam College Reservation System</title>

<style>

h1 {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    letter-spacing: 1.5px;
}

h2 {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    letter-spacing: 2px;

}

label {
    display: block;
    font-weight: bold;
    margin-left: 8px;
}

input {
    width: 110%;
    max-width: 570px;
    padding: 8px;
    border: 1px solid #000;     
    
}

img {
  display: block;
  margin: auto;
  width: 17%;
}

.button {
  background-color: #1728c1;
  border: none;
  color: white;
  padding: 8px 45px;
  text-align: center;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}


.button {
  background-color: #1728c1; 
  color: #ffffff; 
  border: 2px solid #1728c1;
}

.button:hover {
  background-color: #ffffff;
  color: #1728c1;
}


.login-box {
    width: 550px;
    padding: 20px;
    border: 2px solid black;
    border-radius: 40px;
    background-color: white;
    text-align: center;
}

.password-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.password-wrapper {
    position: relative; /* Needed for absolute positioning of the icon */
}

.toggle-password {
  position: absolute;
  right: 20px; /* Adjust as needed to position the icon */
  top: 70%;
  transform: translateY(-50%);
  cursor: pointer;
  user-select: none; /* Prevent text selection on click */
}

.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
  border-radius: 10px;
  text-align: center;
}

.close-button {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close-button:hover,
.close-button:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

.modal-button {
  background-color: darkblue;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  margin-top: 15px;
}

.modal-button:hover {
  background-color: powderblue;
  color: darkblue;
}

#errorMessage {
  margin-top: 10px;
  font-size: 18px;
}

</style>
</head>

<body>

<center>
<img src="mclogo.png" style="width: 175px; height: 175px;">
</center>

<center>
<h1> Miriam College Reservation System </h1>
<h2> Miriam College High School </h2>
</center>


<br>
<center>  
  <div class="login-box">

<form id="ao-mchs" onsubmit="redirectToPage(event)">

  <div class="input">
  <label style="color:black;"> E-mail <br></label>
  <input type="text" id="email" name="emails" style="width: 510px;">
  </div>

  <br><br>

  <div class="input password-wrapper">
  <label style="color:black;"> Password </label>
  <input type="password" id="password" name="password" style="width: 510px;">
  <span class="toggle-password" id="togglePassword">
    &#x1F441; </span>
  </div>

<br>
<br>

<div class="password-container">
<a href="MCHS_III_GROUP 2_AO RESERVATION_FORGOT PASSWORD.php" style="display: inline-block; width: 150%; text-align: right; font-size: 16px; color: blue;"> Forgot Password <br> </a>
</div>

<br>


<button class="button" onclick="redirectToPage()">Log In</button>


<br>
<br>

<a href="MCHS_III_GROUP 2_AO RESERVATION_CREATE AN ACCOUNT.php" style="font-size: 18px; color: black;"> Create an Account </a> 
    
</center>
</form>

<div id="errorModal" class="modal">
  <div class="modal-content">
    <span class="close-button">&times;</span>
    <h3>Login Failed</h3>
    <p id="errorMessage">Invalid email or password. Please try again.</p>
    <button class="modal-button" id="closeModalButton">Close</button>
  </div>
</div>

<script>
const passwordInput = document.getElementById('password');
const togglePassword = document.getElementById('togglePassword');

togglePassword.addEventListener('click', function() {
    const type = passwordInput.getAttribute('type');
    if (type === 'password') {
        passwordInput.setAttribute('type', 'text');
        this.textContent = '\u{1F441}'; // Eye icon (when visible)
    } else {
        passwordInput.setAttribute('type', 'password');
        this.textContent = '\u{1F441}\u{0337}'; // Eye + Combining Long Solidus Overlay (when hidden)
    }
});

function redirectToPage(event) {
    event.preventDefault();

    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();
    const errorModal = document.getElementById('errorModal');
    const closeModalButton = document.getElementById('closeModalButton');
    const closeButtonSpan = document.querySelector('.close-button');

    function closeModal() {
        console.log("closeModal function called");
        errorModal.style.display = "none";
        console.log("Modal display set to none");
    }

    if (email === "ao-mchs@mc.edu.ph" && password === "ao2025") {
        window.location.href = "MCHS_III_GROUP 2_AO RESERVATION_AO_APPROVAL.php";
    }
    else if (email === "student@mc-knoller.edu.ph" && password === "student2025") {
        window.location.href = "MCHS_III_GROUP 2_AO RESERVATION_RESERVE A ROOM.php";
    }
    else if (email === "mchsapsa@mc.edu.ph" && password === "apsa2025") {
        window.location.href = "MCHS_III_GROUP 2_AO RESERVATION_CONF_CONFIRMATION.php";
    }
    else if (email === "teacher@mc.edu.ph" && password === "teacher2025") {
        window.location.href = "MCHS_III_GROUP 2_AO RESERVATION_TEACHERS_RESERVE A ROOM.php";
    }
    else {
        console.log("Login failed, displaying modal");
        errorModal.style.display = "block";

        console.log("Attaching event listener to closeModalButton");
        closeModalButton.addEventListener('click', closeModal);

        console.log("Attaching event listener to closeButtonSpan");
        closeButtonSpan.addEventListener('click', closeModal);

        console.log("Attaching event listener to window for outside click");
        window.addEventListener('click', function(event) {
            if (event.target == errorModal) {
                console.log("Clicked outside modal, closing");
                closeModal();
            }
        });
    }
}

</script>

<br>
<br>
<center>

<p> Managed by the MCHS Administrative Office </p>

</center>

<br>

</div>

</body>
</html>

