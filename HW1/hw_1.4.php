<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>if else statement</title>
    </head>
    <body>
      <?php
    $grade=60;
      if ($grade >90 && $grade <= 100) {
          echo "your result is A";
         } 
         else if ($grade > 80 && $grade <= 89) {
          echo "your grade is B";
         }
     else if ($grade > 70 && $grade <= 79) {
          echo "ur grade is C";
         } 
     else if ($grade > 60 && $grade <= 69) {
          echo "ur grade is D";
         } 
     else if ($grade==60){
             echo "You r simply passed. You should be Improved";
         }
     else if ($grade> 0 && $grade <= 59) {
          echo "u r failed";
         }
     else{
             echo "Your result is not found";
     }
        ?>
    </body>
</html>
