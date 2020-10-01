<?php
    Echo "esta es mi pagina";
?>
<form action="" method="post">
    <input name="num1" type="text">
    <input name="num2" type="text">
    <br><br>
    <input type="submit" value="ENVIAR">
</form>

<?php

@$num1=$_REQUEST['num1'];
@$num2=$_REQUEST['num2'];

@$sumar=$num1+$num2;
@$resta=$num1-$num2;

echo "<h1> la suma es $sumar y la resta es $resta </h1>";

require 'llamado.php';

?>