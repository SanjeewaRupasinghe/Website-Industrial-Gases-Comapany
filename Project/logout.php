<?php 
    // start the session
    // this is the fourth and last 
    session_start();
     
    //  distroy cookie
     if(isset($_COOKIE[session_name()])){
         setcookie(session_name(), 'true', time()-1, './');
     }

    // distroy the session
     session_destroy();

    // redirrect the page to login
     header('location:login.php');

 ?>