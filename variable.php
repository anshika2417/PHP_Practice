<!DOCTYPE html>
<html lang="en">
<head>
    <title>Variable</title>
</head>
<body>
    <?php
       $name="Anshika";
       $age=21;
       
       echo "My name is {$name}"."<br>";
       echo $name.' is '.$age.' years old';

       /*Rule for creating an variable: 
        Varibles name start with a letter A-Z a-z, underscore(_), 
        followed by any number of letters, number or underscore

        Ex: 
          $name="Anshika" //Valid
          $9name="Anshika" //Invalid
          $_name="Anshika" //Valid
          $_9name="Anshika" //Valid
        */
        
    ?>
</body>
</html>