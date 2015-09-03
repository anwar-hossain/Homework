<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>switch statement</title>
    </head>
    <body>
        <?php
          $student_mark=85;
          
          switch ($student_mark){
              
             case "91":
             case "92":
             case "93":
             case "94":
             case "95":
             case "96":
             case "97":
             case "98":
             case "99":
             case "100":
                     echo 'Your grade is A';
                     break;
             case "81":
             case "82":
             case "83":
             case "84":
             case "85":
             case "86":
             case "87":
             case "88":
             case "89":
             case "90":
                 echo 'Your grade is B';
                 break;
             case "71":
             case "72":
             case "73":
             case "74":
             case "75":
             case "76":
             case "77":
             case "78":
             case "79":
             case "80":
                 echo 'Your grade is C';
                 break;
             case "61":
             case "62":
             case "63":
             case "64":
             case "65":
             case "66":
             case "67":
             case "68":
             case "69":
             case "70":
                     echo"Your grade is D";
                     break;
             case "60":
                 echo 'Your grade is passed';
                 break;       
              default :
                  echo 'Your result is not found';
                  break;
          }
        ?>
    </body>
</html>
