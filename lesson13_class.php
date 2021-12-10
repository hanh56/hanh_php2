<?php
class Student {
    public $name;
    function avg ($math, $english){
        echo (($math + $english)/2). "\n";
    }
}
$a002 = new (Student);
$a002->avg (30,70);
$a002->name = "sato";
echo $a002->name. "\n";
echo $a002->gender. "\n";
?>

<?php
class Fruit {
    public $name;
    public function __construct($name){
        $this->name = $name;
    }

    function avg($chanh, $cam){
        echo (($chanh + $cam)/2). "\n";
    }
}

$a001 = new Fruit ("nho");
echo $a001 ->name. "\n";
$a001 -> avg(80,70);
?>