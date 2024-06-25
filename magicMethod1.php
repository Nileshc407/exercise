<?php
class MyClass {
    private $data = array();

    public function __get($name) {
        // Check if the property exists in the $data array
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        } else {
            // Handle the case where the property does not exist
            // or is not accessible
            throw new Exception("Property '$name' does not exist or is not accessible.");
        }
    }

    public function __set($name, $value) {
        // Set the property in the $data array
        $this->data[$name] = $value;
    }
}

$obj = new MyClass();
$obj->name = "John"; // This calls __set method
echo $obj->name; // This calls __get method and outputs "John"
?>