<?php

if(isset($_POST['rented']))
{
    $to      = 'alakhtraalmodamr@gmail.com';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: jmhnadmin@jmhn.com' . "\r\n" .
        'Reply-To: jmhnadmin@jmhn.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    if($_SESSION["status"] = "true"){
        header('Location: sus.php');
    }else{
        header('Location: credit.php');
    }
}

?>