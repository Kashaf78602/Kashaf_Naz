<?php 

class Car { 

public $comp; 
public $color = "beige"; 
public $model;

public function hello() 
{ 
return " I am a " . $this-> comp ." my color is " . $this -> color." and model is ". $this-> model. "<br>"; 
} 
} 
$honda = new Car();  
$honda -> comp = "honda"; 
$honda -> color = "red"; 
$honda -> model = "2015"; 
$result = $honda->hello();

echo "$result"; 
 

 ?>