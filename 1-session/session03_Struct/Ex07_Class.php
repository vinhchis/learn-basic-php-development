<?php

#Class declaration - class [class name]
Class Doituong{
    //Properties | Attributes
    var $code;
    var $name;
    
    //Constructor
    function __construct($x, $y) {
       $this -> code = $x ;
       $this -> name = $y;
    }
    //Method
    function display(){
        echo $this -> code . ' - ' . $this -> name;
    }
        
}
#Access class
$doituong = new Doituong("Lê","Le Van A");
//Properties
echo $doituong -> code . '<br>' ;

//Methods
echo $doituong -> display();
