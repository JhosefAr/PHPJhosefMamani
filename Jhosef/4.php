<form action="4.php" method="post">
 <p>Introduzca un numero: <input type="text" name="a" /></p>
 <p><input type="submit" /></p>
</form>
<?php
//for
$b=$_POST['a'];
for ($i = 1; $i <= $b; $i++) {
    echo $i;
}
?>