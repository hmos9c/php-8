<?php

function sayHello(string $first, string $middle = "", string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}


sayHello("Sanas", "Feb", "riyan");
// sayHello("Sanas", "riyan"); // error

sayHello(last: "riyan", first: "Sanas", middle: "Feb");
sayHello(first: "Sanas", middle: "", last: "riyan");