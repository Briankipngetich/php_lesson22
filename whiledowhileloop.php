<?php 
$title = 'While Loop';

include 'includes/header.php' ?>

<body>
    <h1>While Loop</h1>
<?php
$grade=0;
while($grade<10){
    echo "<p> $grade is less than 10</p>";
    $grade++;
}
echo'EXIT THE LOOP';

?>

<h1>Do While Loop</h1>
<?php 
$grade=0;
do{
    echo "<p> $grade is less than 10</p>";
    $grade++;
}
while($grade<10);
?>


<?php 
    require 'includes/footer.php'
?>