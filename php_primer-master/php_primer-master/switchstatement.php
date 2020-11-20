<?php 
     $title = "Switch Statements";
    include 'includes/header.php' ?>
    <h1>Switch Statements</h1>
    <?php 
    // Variable Declaration
        $grade = 'F';
        //Switch($variable) will scrutinuze the value of the variable against the cited cases. 
        switch($grade){
            case 'A':
                echo '<h2 style="color: green">YOU ARE SUPERSTAR!</h2>';
                break;
            case 'B':
                echo '<h2 style="color: blue">YOU DID WELL!</h2>';
                break;
            default:
                echo '<h2 style="color: red">YOU HAVE FAILED....</h2>';
                break;
        }
    ?>
 <?php require 'includes/footer.php' ?>