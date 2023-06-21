<?php
$con=mysqli_connect("localhost","root","","id20226833_jmhn");
        // Check connection
        if (mysqli_connect_errno())
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
		
		
#password status, to turn it off write false.
$is_pass_Active=true;

#if it's require a password, type it here :
$Thepassword="123456";



//echo " hello world \n \n ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	session_start() ;

  if($_POST['loveu'] == "Login")
  {
    $username = $_POST['name'];
    $psswoord = $_POST['password'];

    $sql = "SELECT password FROM users WHERE username= '$username' ";

    $newLINK="";
    $result = $con->query($sql);
    while($row = $result->fetch_assoc()) {
    $newLINK = $row["password"];
    }
  
    if($psswoord == $newLINK) 

    {//
    $_SESSION["account"] = $username;
    $_SESSION["status"] = "true";

    header('Location: index.php');

    }
    else{
    header('Location: loginerr.html');
    }
}else if($_POST['editnow'] == "Save Changes")
{
echo " new changes are save";

  $newname = $_POST['newname']; 
  $nowname = $_SESSION["account"];
  $update = "update users set username='$newname' where username ='$nowname'";

  $sql= mysqli_query($con, $update); 
  
  $_SESSION["account"] = $newname;
  header('Location: index.php');
  }else if($_POST['editpassnow'] == "Change Password")
  {
      session_start() ;
    
    $username = $_SESSION["account"];
      $newpass = $_POST['newpass'];
      $update1 = "update users set password='$newpass' where username ='$username'";
  
      $sql= mysqli_query($con, $update1);
  
      header('Location: index.php');
    }
else// signup
{

    $username =  $_POST['name'];
    $email = $_POST['email'];
    $psswoord = $_POST['password'];
      
    $sql = "INSERT INTO users (username, password,email)
    VALUES ('$username', '$psswoord','$email')";
     
    $con -> multi_query($sql);
    
    //mysqli_query($con, $sql);
    
      // Close connection
      $con->close();
      $_SESSION["account"] = $username;
      $_SESSION["status"] = "true";
    
      header('Location: credit.php');
}

}else{
  echo "connected";
}
