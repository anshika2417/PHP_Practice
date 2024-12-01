<?php
    
    function dummy()
    {
        echo "<h1>User Detail</h1>";
    }
    function display()
    {
        dummy(); // Function call inside function
        echo "Username is: Anshika";
        echo "<br>";
        echo "User age is: 21";
        echo "<br>";
        echo "User email id is: anshikakumari571@gmail.com";
        echo "<br>";
        echo "<hr>";
    }

    display();  //function calling
    display();
    display();
    display();
?>