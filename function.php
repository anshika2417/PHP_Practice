<?php

      display();  //function calling
    function dummy()
    {
        echo "<h3>User Detail</h3>";
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

    //Parametrized Function
    function sum($a,$b)
    {
        echo "Sum of $a and $b is ".$a+$b;
        echo "<br>";
    }

    sum(10,20);
    sum(102,203);
    echo "<hr>";

    function userdetails($name,$color)
    {
        echo "<h1 style='color:$color'>$name</h1>";
    }
    userdetails("Anshika","green");
    echo "<hr>";



    //Function with return Statement
    function userName()
    {
        return "Anshika";
    }

    echo "<h2>My name is ".userName()."</h2>";
    echo "<hr>";



    //Function with default parameters
    function fruit($name,$color="red")
    {
        echo "This is $name and it's color is $color";
    }
    fruit("apple");
    echo "<hr>";



    //Nested Function
    function test()
    {
        echo "Test function called <br>";

        function apple()
        {
            echo "Apple function called <hr>";
        }
    }
    test();
    apple();



    //Variable Function
    function testing()
    {
        echo "Test function called<br>";
    }

    $testing ="testing";
    $testing();
    echo $testing;
    echo "<hr>";

    function main($a)
    {
        $a();
        echo "Main function called <br>";
    }
    main($testing);
?>