<!-- David Faulkner G00299507 GMIT Web Apps Project -->

<?php 

    // start session
    session_start();

    // Create database connection 
    $connect = mysqli_connect("localhost", "david", "", "g00299507");


    //Test if connection occurred
    if(mysqli_connect_errno()) {
        die("DB connection failed: " .
      mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")"
        );
    }

    // output if connection cannot be made
    if (!$connect) {
      die('Could not connect: ' . mysqli_connect_error());
    }

?>