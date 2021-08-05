<?php
$title = 'If Statements';

include 'includes/header.php' ?>

    <h1> IF Statements</h1>
    <?php 
    $grade =40;
    if($grade>= 50){
        echo '<h3 style = "color:green"> You Have PASSED</h3>';
    }
        else{
        echo '<h3 style="color:red"> You Have Failed</h3>';
            
        }

    $grade='C';
    if($grade=='A'){
        echo '<h2 style="color:green">YOU ARE A SUPERSTAR</h2>';
    }
        elseif($grade=='B'){
            echo '<h2 style="color:yellow"> YOU DID WELL</h2>';
        }
        elseif($grade=='C'){
            echo '<h2 style="color:BLUE"> YOU HAVE FAILED</H2>';
        }
        else{
            echo '<h2> INVALID GRADE</h2>';
        }
    ?>
<?php 
    require 'includes/footer.php'
?>