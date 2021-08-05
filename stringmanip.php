<?php 
$title = 'String Manipulation';

include 'includes/header.php' ?>
<body>
    <h1>PHP String Manipulation</h1>

    <?php
// Concatination of strings
    $phrase1="Student who came late";
    $phrase2="In class, stand with Rock";
    $name="Brian kipngetich ";
    echo "$phrase1<br>";
    echo "$phrase2<br>";
    echo $phrase1.", named Tiffany, ". $phrase2;
    echo '<hr/>';


// String Transformation
echo 'Upper case first letter: ' . ucfirst($name).'<br>';
echo 'Upper case all letters: ' . ucwords($name).'<br>';
echo 'upper Case: '. strtoupper($name).'<br>';
echo 'Lower Case: '. strtolower("THIS WAS ALL UPPER").'<br>';
echo '<hr/>';
echo 'Repeat String: ' .strtoupper(str_repeat($name,10)) .'<br/>';

echo 'Get Substring: ' .substr($name,5,11). '<br/>'; 
//  Get position of the strimg
echo 'Get the position of the string: ' . strrpos($name,'t'). '<br/>';
// Finding the length of a string
echo 'Find the length of a string: '. strlen($name). '<br>';
echo 'Find Character "B": ' . strchr($name, 'B'). '<br/>';
echo 'Find Character "r": ' . strchr($name, 'r'). '<br/>';
echo 'Find Character "c": ' . strchr($name, 'c'). '<br/>';
echo 'Find Character "e": ' . strchr($name, 'e'). '<br/>';









    ?>
    
    <?php 
    require 'includes/footer.php'
?>