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

.status-option {
    display: flex;
    align-items: center;    
    justify-content: center; 
}

.status-option label {
    margin-right: 70px; 
}

.status-option input[type="radio"] {
    margin-left: 50px;
}

{
    
    display: flex;
    align-items: center;
    justify-content: space-between;
}



</style>

<script>
var aoEmail = "ao-mchs@mc.edu.ph";


</script>
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
    <p style="font-size: 24px; color: black;"> <b> Create an Account </b></p>


<form id='createAccount'>
    <div class="input">
        <label style="color:black;"> Knoller Email <br> </label>
        <br>
        <input type="text" name="emails" style="width: 510px;">

        <br><br>

        <div class="status-option">
            <input type="radio" id="student" name="user_type" value="student">
            <label for="student">Student</label>

            <input type="radio" id="faculty" name="user_type" value="faculty">
            <label for="faculty">Faculty</label>
        </div>

        <br><br>

        <button class="button" type="button" onclick="redirectToPage()">Enter</button> 
    </div>
</form>

<br>

<script>
function redirectToPage() {
    const form = document.getElementById('createAccount');
    const userType = form.user_type.value;

    if (userType === 'student') {
        window.location.href = 'MCHS_III_GROUP 2_AO RESERVATION_CREATE AN ACCOUNT PASSWORD_STUDENT.php ';
    } else if (userType === 'faculty') {
        window.location.href = 'MCHS_III_GROUP 2_AO RESERVATION_CREATE AN ACCOUNT PASSWORD_FACULTY.php ';
    } else {
        alert('Please select Student or Faculty.'); // handle no selection
    }
}
</script>

<center>
<p> Managed by the MCHS Administrative Office </p>
</center>

<br>

</div>

</body>
</html>

