<?php 
    
    $connection = mysqli_connect('localhost','Kalhara','lk123','covidsys');

    if (mysqli_connect_errno()) {
        echo 'connection error line :' .mysqli_connect_error();
    }else{
       //echo 'connection succsessful';
    }



?>   
