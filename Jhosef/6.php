<?php
function recursividad($a)
{
    if ($a < 20) {
        echo "$a\n";
        recursividad($a + 1);
    }
}
function hacer_café($tipo = "capuchino")
{
    return "Hacer una taza de $tipo.\n";
}
echo hacer_café();
echo hacer_café(null);
echo hacer_café("espresso");
function cuadrado($núm)
{
    return $núm * $núm;
}
echo cuadrado(4);
?>