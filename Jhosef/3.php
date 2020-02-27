<form action="3.php" method="post">
 <p>Introduzca un numero del 0 al 2: <input type="text" name="a" /></p>
 <p><input type="submit" /></p>
</form>
<?php
//switch
$i=$_POST['a'];
if ($i == 0) {
    echo "i es igual a 0";
} elseif ($i == 1) {
    echo "i es igual a 1";
} elseif ($i == 2) {
    echo "i es igual a 2";
}
switch ($i) {
    case 0:
        echo "i es igual a 0";
        break;
    case 1:
        echo "i es igual a 1";
        break;
    case 2:
        echo "i es igual a 2";
        break;
    default:
        echo "i no es igual a 0, 1 ni 2";
}
?>