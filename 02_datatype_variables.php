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
     <?php
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
       
       ?>
