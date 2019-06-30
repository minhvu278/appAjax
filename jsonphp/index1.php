<?php

$phpArray = array("Ha Noi", "Ho Chi Minh", "Da Nang");

class Student{
    public $name;

    public $age;

    public $location;

    public function __construct($name, $age, $location)
    {
        $this->name =  $name;
        $this->age = $age;
        $this->location = $location;
    }
}

$vu = new Student("Minh Vu", 21, "Ha Noi");

echo "<pre>";
print_r($phpArray);
echo "</pre>";

echo "<pre>";
print_r($vu);
echo "</pre>";

$phpjson1 = json_encode($phpArray);
echo "<pre>";
print_r($phpjson1);
echo "</pre>";

$phpjson2 = json_encode($vu);
echo "<pre>";
print_r($phpjson2);
echo "</pre>";
