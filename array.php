<?php
$title = 'Array';
include 'includes/header.php' ?>

<body>
    <h1>Arrays</h1>
<?php 

// Avariable
$num =3;
//  An array
// Only one datatype
$numbers = array(1,21,31,43,5,6,7,8,9,10);
echo $numbers[6];   
echo "<p> $numbers[9]</p>";
$size =count($numbers);
echo "<p> Array </p>";
echo "<p> Array Number is size: $size</p>";

for($count = 0; $count < $size; $count++){
    echo "$numbers[$count]<br>";
}


?>
    
    <?php 
    require 'includes/footer.php'


?>