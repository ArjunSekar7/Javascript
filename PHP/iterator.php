
<?php
class myData implements IteratorAggregate {

    public $arr = array(1,2,3,4);
    public function __construct() {
        $this->property4 = "last property";
    }

    public function getIterator() {
        return new ArrayIterator($this);
    }
}

$obj = new myData;

foreach($obj as $key => $value) {
   echo $value; 
    echo "<br>";
}
?>
