<?php namespace App\Controller;

class Helloworld extends BaseController 
{
    public function index($name, $npm)
    {
        //echo $this->name
        echo $name ."<br>";
        echo $npm ."<br>";
        //echo "Hello Arsyi";
    }
    public function show()
    {
        echo "Arsyi Sobirin";
        echo "1817051066";
    }
}