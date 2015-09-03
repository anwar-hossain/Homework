<html>
    <head>
        <meta charset="UTF-8">
        <title>switch statement</title>
    </head>
    <body>
        <?php
          $student_mark=53;
          
          switch ($student_mark){
              
             case ("$student_mark >90 && $student_mark <= 100"):
                     echo 'Your grade is A';
                     break;
             case ("$student_mark > 80 && $student_mark <= 90"):
                 echo 'Your grade is B';
                 break;
             case ("$student_mark > 70 && $student_mark <= 80"):
                 echo 'Your grade is C';
                 break;
             case ("$student_mark > 60 && $student_mark <= 70"):
                     echo"Your grade is D";
                     break;
             case ("$student_mark==60"):
                 echo 'Your grade is A';
                 break;     
             case ("$student_mark<60"):
                 echo 'You are failed';
                 break;  
              default :
                  echo 'Your result is not found';
                  break;
          }
        ?>
    </body>
</html>
