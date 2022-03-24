<?php 

    $con=new mysqli('localhost','root','', 'ovin_gases_pvt_ltd');

    if($con -> connect_errno){
        echo "Connection Erorr : ".$con -> connect_error;

    }
    else{
        // echo "Connection Succesfull";

    }
