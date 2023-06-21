<html>
    <head>
        <title>JMHN : Rented</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="Textures/favicon.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <style>
            #login{
    color:black;
    text-decoration:none;
    float:right;
    margin:8px;
    position:relative;
    top:50px;
    right: 30px;
}
#login:hover{
    box-shadow: 0 0 0 10px rgba(113, 119, 128,.5);
    background-color:rgba(113, 119, 128,.5);
    border-radius: 8px;
    transition:0.7s;
}
.logindown {
  position: relative;
  display:inline-block;
  color:white;
  float:right;
}

/* Dropdown Content (Hidden by Default) */
.logindown-content {
  display:none;
  position: absolute;
  background-color: white;
  color:white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  right: -2px;
  top:80px;
  border-radius: 25px;
}

/* Links inside the dropdown */
.logindown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.logindown-content a:hover {
  background-color: #ddd;
  color:#000;
  border-radius: 25px;
}

/* Show the dropdown menu on hover */
.logindown:hover .logindown-content {display: inline-block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.logindown:hover .dropbtn {background-color: #3e8e41;}
        </style>
    </head>
    <body>
        <a href="index.php">
           <img src="Textures/logo.png" id="logo" draggable="false" alt="Logo">
        </a>
        <a href="rent.php" id="menu">
            Rent Now
        </a>
        <a href="contact.php"id="menu2">
            Contact us
        </a>
        <a href="about.php"id="menu3">
            About us
        </a>
        <?php
             session_start() ;
                if(isset($_SESSION["status"])=="true")
                   echo  '<div class="logindown">
                          <label id="login">';
                else
                   echo '<a href="login.html" id="login">';
             
            ?>
               <i class="fa-solid fa-user"></i>
               <?php
                 if(isset($_SESSION["status"])=="true"){
                   echo  $_SESSION["account"];
                   echo "</label>";
                   echo '<div class="logindown-content">';
                   echo '<a href="changename.php"><i class="fa-sharp fa-solid fa-file-signature"></i>&nbsp;Change Name</a>';
                   echo '<a href="changepassword.php"><i class="fa-sharp fa-solid fa-key"></i>&nbsp;Change Password</a>';
                   echo '<a href="credit.php"><i class="fa-sharp fa-solid fa-credit-card"></i>&nbsp;Add Credit</a>';
                   echo '<a href="logout.php"><i class="fa-solid fa-user-slash"></i>&nbsp;Logout</a>';
                   echo '</div>';
                   echo '</div>';
                }else{
                   echo "Login";
                   echo '</a>';
                }
               ?>
        <hr style="width:40%">
        <br>
        <br>
        <hr style="width:20%">
        <div class="aboutmain1">
            <h1>Renting a Hall</h1>
            <hr style="width:20%">
            <br><br><br><br>
            <h1>You Have Rented Your Hall Successfully</h1>
            <h2>It's Availlable in</h2>
            <h2 id="GFG_UP">dd/mm/yyyy</h2>
            <br><br><br><br><br>
            <h1>Thanks For Renting From Us</h1>
            <a href="index.php"><button id="btnhall">Back to Main</button></a>
        <br>
        <br><br><br><br><br><br>
        <div class="bottomborder">
            <img src="Textures/pngegg.png" id="logo1" draggable="false" alt="Logo">
            <br><br><br>
            <a href="rent.php" id="btn">Rent Now</a><br><br>
            <a href="contact.php" id="btn">Contact Us</a><br><br>
            <a href="about.php" id="btn">About Us</a><br><br>
            <br><br><br>
        </div>
    </body>
    <script>
        var el_up = document.getElementById("GFG_UP");
        var el_down = document.getElementById("GFG_DOWN");
        var today = new Date();
        el_up.innerHTML = today;
        var dd = today.getDate();
        var mm = today.getMonth() + 1;
  
        var yyyy = today.getFullYear();
        if (dd < 10) {
            dd = '0' + dd;
        }
        if (mm < 10) {
            mm = '1' + mm;
        }
        var today = dd + '/' + mm + '/' + yyyy;

    </script>
</html>