<?php 
$title = 'Functions';

include 'includes/header.php' ?>

<body>
<h1>Functions</h1>
<?php
    // Define a function
    function writeMessage(){
        echo "You are a really special person, Have a nice time" .'<br>';
    }

    //  Calling the function
    writeMessage(). '<hr/>';

    // Functions with parameters
    function addFunction($num1, $num2){
        $sum = $num1+$num2;
        echo " The sum of $num1 and $num2 is equal to $sum";
        }
        function changeNum($num){
            echo $num=$num+10;


        }
        changeNum($num);


        $num = '78';

        addFunction(10,$num);










?>
    
    <?php 
    require 'includes/footer.php'
?>