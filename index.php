<?php 
$title = 'Home';

include 'includes/header.php' ?>

<h1>Index</h1>


    <?php  
    // Printing PHP using Eccho
        echo 'Hello PHP!' ;
        echo 'Second Line'; echo'</br>';
    
    // Variable
    $name = 'Brian Kipngetich'; echo'</br>';
    $age = 26;
    echo $name;
    echo '<h1> My Name is: '.$name.'</h1>';
    echo '<h1> My Name is: '.$name.'</h1>';
    echo "<h1> My Age is: $age</h1>";
    
    ?>

    <button type="button" class="btn btn-dark">Click Me</button>
    <button type="button" class="btn btn-primary">Click Me</button>
    <button type="button" class="btn btn-success">Click Me</button>
<?php 
    require 'includes/footer.php'
?>