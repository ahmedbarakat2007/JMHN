<html>
    <head>
        <title>JMHN</title>
        <link rel="stylesheet" href="style.css">
        <link rel="logo" href="Textures/favicon.png">
        <script src="Scripts/index.js"></script>
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
        <div class="dropdown">
            <a href="rent.php" id="menu">
                <i class="fa-solid fa-gifts"></i>&nbsp;
                Rent Now
            </a>
            <div class="dropdown-content">
              <a href="hall1.php"><i class="fa-solid fa-house"></i>&nbsp;Hall 1</a>
              <a href="hall2.php"><i class="fa-solid fa-house"></i>&nbsp;Hall 2</a>
              <a href="hall3.php"><i class="fa-solid fa-house"></i>&nbsp;Hall 3</a>
              <a href="hall4.php"><i class="fa-solid fa-house"></i>&nbsp;Hall 4</a>
              <a href="hall6.php"><i class="fa-solid fa-house"></i>&nbsp;Hall 5</a>
              <a href="hall7.php"><i class="fa-solid fa-house"></i>&nbsp;Hall 6</a>
              <a href="hall7.php"><i class="fa-solid fa-house"></i>&nbsp;Hall 7</a>
              <a href="hall8.php"><i class="fa-solid fa-house"></i>&nbsp;Hall 8</a>
            </div>
          </div>
        <a href="contact.php"id="menu2">
            <i class="fa-sharp fa-solid fa-phone"></i>&nbsp;
            Contact us
         </a>
        <a href="about.php"id="menu3">
            <i class="fa-sharp fa-solid fa-info"></i>&nbsp;
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
        </div>
        <hr style="width:40%">
        <br>
        <div class="container">
            <img src="Textures/weeding.jpg" id="mainimg" width="70%" draggable="false">
            <div class="centered">
                <h1>50% Off for Every Hall</h1>
                <h2>Rent Now to Marry Your Love</h2>\
                <br>
                <a href="rent.php">
                    <button id="rentbtn">Rent Now</button>
                </a>
            </div>
        </div>
        <br>
        <br>
        <div class="aboutmain">
            <hr style="width:20%">
            <h1>Halls</h1>
            <hr style="width:20%">
        </div>
        <br>
        <br>
        <div style="text-align:center;">
        <div class="halls">
            <div class="card1">
               <img src="Textures/hall1.jpg" id="hallimg" width="100%" draggable="false">
                <h1>Hall 1</h1>
                <a href="hall1.php">
                   <p><button>Rent Now</button></p>
                </a>
           </div>
           <div class="card1">
               <img src="Textures/hall2.jpg" id="hallimg" width="100%" draggable="false">
               <h1>Hall 2</h1>
               <a href="hall2.php">
                 <p><button>Rent Now</button></p>
               </a>
            </div>
            <div class="card1">
                <img src="Textures/hall3.jpg" id="hallimg" width="100%" draggable="false">
                <h1>Hall 3</h1>
                <a href="hall3.php">
                    <p><button>Rent Now</button></p>
                </a>
             </div>
             <div class="card1">
                <img src="Textures/hall4.jpg" id="hallimg" width="100%" draggable="false">
                <h1>Hall 4</h1>
                <a href="hall4.php">
                    <p><button>Rent Now</button></p>
                </a>
             </div>
        </div>
        </div>
        </div>
        <br>
        <br><br>
            <div style="text-align:center">
               <a href="rent.php">
                  <button id="morehallbtn">See More</button>
               </a>
            </div><br><br><br><br>
        <div class="aboutmain">
            <hr style="width:20%">
            <h1>Workers</h1>
            <hr style="width:20%">
            <img src="Textures/staff.jpg" id="stockimg" draggable="false">
            <Br>
            <p>We have Over 100 Worker</p>
            <p>We Have One Of The Best Cheffs In The World</p>
            <p>It Has around 22 Halls You Can Choose From</p>

        </div><br><br>
        <div class="aboutmain">
            <hr style="width:20%">
            <h1>Open Boffeh</h1>
            <hr style="width:20%">
            <img src="Textures/open.jpg" id="stockimg" draggable="false">
            <Br>
            <p>We have an Open Boffeh</p>
            <p>With The Best Food In The World</p>
            <p>Made By One Of The Best Cheffs In The World</p>

        </div><br><br>
        <div class="aboutmain">
            <hr style="width:20%">
            <h1>About Us</h1>
            <hr style="width:20%">
            <img src="Textures/wed.jpg" id="stockimg" draggable="false">
            <Br>
            <p>We are Here to organise your wedding</p>
            <p>We have Over 100 Worker</p>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="bottomborder">
            <img src="Textures/pngegg.png" id="logo1" draggable="false" alt="Logo">
            <br><br><br>
            <a href="rent.php" id="btn">Rent Now</a><br><br>
            <a href="contact.php" id="btn">Contact Us</a><br><br>
            <a href="about.php" id="btn">About Us</a><br><br>
            <br>
            <br>
            <br>
        </div>
    </body>
</html>