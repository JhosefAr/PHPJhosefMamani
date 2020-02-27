<form action="2.php" method="post">
 <p>Numero a: <input type="text" name="a" /></p>
 <p>Numero b: <input type="text" name="b" /></p>
 <p><input type="submit" /></p>
</form>
<?php
//if, else, elseif
$a=$_POST['a'];
$b=$_POST['b'];
if ($a > $b) {
    echo "a es mayor que b";
} elseif ($a == $b) {
    echo "a es igual que b";
} else {
    echo "a es menor que b";
}
?>