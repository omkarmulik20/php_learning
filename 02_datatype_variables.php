<!-- //DATATYPE AND VARIABLES IN PHP   -->

<!-- string 
     integer
     float
     boolean
     array
     object
     Null
     resource
-->

<!-- Variables rules in PHP 
    Variables must be prefixed wiht a $ sign
    variables must start with a lettetr or a underscore _
    variables cannot start with a number 
    variable can only contain alphanumeric characters and underscores (a-x , 0-9, _)
    variable names are case-sensitive ($age and $AGE are two diifferent variables)
-->
     <!-- <?php
     $string_first = "hello Omkar";
     echo ($string_first);

     $integer_first = 12 ;
     echo ($integer_first);

     $float_first = 12.12;
     echo ($float_first);

     $boolean_first = true ;
     echo ($boolean_first);

     $array_first = [1,2,3,4,5];
     print_r($array_first);
 

    //  constants 
       define( "KING" , "Omkar");
       echo KING;
       
       ?> -->

<!-- <?php
  $name = "Omkar";
  $age =22 ;
  $city = "Pimpri";
  echo "My Name is $name . I am $age years old . i leave in $city.";

  $a = 10;
$b = $a;
$a = 20;
echo $b;

?> -->
<!-- <?php
$a = 20;
$b =30;
$a=$a + $b ;
$b = $a- $b;
$a = $a - $b ;
 echo  "a = $a  . . b = $b";
?><br> -->


<!-- // Real-World Practice (Backend Style) -->
 <?php
$username = "Omkar Mulik";
$email = "omkarmulik@domain.com";
$age =22;
$isVefified = false ;
?>
<!-- DEFINING CONSTANTS -->
<?php 
  define("SUYOGORG","Sugyog Agarkar");
  define("DB_HOST","localhost");
  define("DB_PORT","3000");
  define("DB_PASS","root")
  ?>
   
 <!-- Mini Invoice  -->
 <?php 
  $product_name = "Keyboard";
  $Price = 2000;
  $Quantity = 1 ;
  $total_Price = $Price  *$Quantity;
  $Gst = $total_Price * 18/100;
  $final_amount = $total_Price + $Gst;
   echo "Final_Amount is .$final_amount"; 
