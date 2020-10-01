<?php
class clasevarios{

    public $num1;
    public $num2;

    public function captura() {
        $num= $_REQUEST['num1'];
        return $num;
    }

    public function suma ($x, $y){
        $suma = $x+$y;
        echo "<h1> la suma desde el metodo es igual a $suma </h1>";
    }


}
?>