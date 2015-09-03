<html>
    <head>
        <meta charset="UTF-8">
        <title>Number Conversion</title>
    </head>
    <body>
        <?php
          $decimal = '32';
          echo "$decimal is a decimal Number"."</br>";
          echo "The binnary number of $decimal is = ";
          echo base_convert($decimal, 10, 2);
          echo ".<br/>";
          $octal=56;
          echo "$octal is a Octal Number"."</br>";
          echo "The decimal number of $octal is = ";
          echo base_convert($octal, 8, 10);
          echo ".<br/>";
          $hexadecimal=A56;
          echo "$hexadecimal is a Hexadecimal Number"."</br>";
          echo "The binnary number of $hexadecimal is = ";
          echo base_convert($hexadecimal, 16, 2);
          
          
        ?>
    </body>
</html>
