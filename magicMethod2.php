<?php
class MyClass {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function __debugInfo() {
        return [
            'name' => strtoupper($this->name), // Customized representation
            'age' => $this->age
        ];
    }
}

$obj = new MyClass('John', 30);
var_dump($obj);
?>