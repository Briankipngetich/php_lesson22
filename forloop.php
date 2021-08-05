<?php
$title = 'For Loop';

include 'includes/header.php' ?>

<body>
    <h1>For Loops</h1>

<?php 
// for loop
for($count=1000;$count>0;$count--){
    echo '<p>'.$count.' HELLO WORLD </p>';
}
 
 


    
    
?>
    
<?php 
    require 'includes/footer.php'
?>