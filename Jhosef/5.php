<form action="4.php" method="post">
 <p>Introduzca un numero: <input type="text" name="a" /></p>
 <p><input type="submit" /></p>
</form>
<?php
//while
$b=$_POST['a'];
$i = 1;
while ($i <= $b):
    echo $i;
    $i++;
endwhile;
?>