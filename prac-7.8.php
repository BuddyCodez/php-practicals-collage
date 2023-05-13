<?php

class Example {
    public function test() {
        $numArgs = func_num_args();//returns the number of arguments passed to the function
        echo "$numArgs arguments passed.<br>" ;
    }
}
echo "<h1> Udit Vegad(216090307001)</h1>";

$example = new Example();

$example->test();

$example->test("Hello");

$example->test("Hello", "World");
