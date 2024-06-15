<?php

// class creation
// Variable including class is called properties & function is called methods.
class car {
    public $name; // Property
    public $color; // Property
    public $price; // Property
    public $engine; // Property

    function Mycar($name, $color, $price, $engine){
        // Assigning local variables (parameters) to object properties
        $this->name = $name;
        $this->color= $color;
        $this->price = $price;
        $this->engine = $engine;

        return "Name:" .$this->name. "<br>". "Color:"   .$this->color . "<br>". "Price:" .$this->price . "<br>". "Engine:" .$this->engine;
    }    
}

$audi = new car();
// echo $audi->Mycar('audi',"blue","1500000","auto");
echo $audi->name;


class Car2 {
    public $brand = 'Toyota';
    public function startEngine() {
        return 'Engine started!';
    }
}

$myCar = new Car2(); // Create an instance of the Car class
echo $myCar->brand;  // Outputs: Toyota
echo "<br>";
echo $myCar->startEngine(); // Outputs: Engine started!


// name,color,price,engine is the property of the car class. $audi is an instance of the car class.To access the name property of the $audi instance, you write echo $audi->name; when you access any property you just write echo $audi->name/color/price/engine not using $audi->$name/$color/$price/$engine this,bcz its not a property of the car class its a variable. SO, objects in PHP access their properties directly using the ->operator (object operator) followed by the property name. 

//When you access a property of an object, you use the -> operator followed by the property name without the $ sign. This tells PHP that you are accessing a property of the object, not a variable. For example, echo $audi->name; correctly accesses the name property of the $audi object.



// class man {
//     public $name;
//     public $age;
//     public $height;
//     public $weight;

//     function Abc($name,$age,$height,$weight){
//         $this->name = $name;
//         $this->age = $age;
//         $this->height = $height;
//         $this->weight = $weight;
//     }

//     // Define a method to get the details as a string
//     public function getDetails() {
//         return "Name: " . $this->name . ", Age: " . $this->age . ", Height: " . $this->height . ", Weight: " . $this->weight;
//     }
        
// }

// $apon = new man();
// $apon->Abc('Shamim', 27, 5.4, 55);;
// echo $apon->getDetails();

