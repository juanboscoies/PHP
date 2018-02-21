<?php
/*
Crea un bucle for que a partir de una variable $contador que toma valores de 1 a 5, muestre por pantalla el doble
del valor de $contador, es decir, que muestre 2, 4, 6, 8, 10.

El resultado se guardará en un fichero de nombre "contador_doble.txt".
*/

print "Crea un bucle for que a partir de una variable \$contador que toma valores de 1 a 5, 
		muestre por pantalla el doble del valor de \$contador, es decir, que muestre 2, 4, 6, 8, 10.<br>
		Guarda el resultado en un fichero de nombre \"contador_doble.txt\"<br><br>";

$f = fopen("contador_doble.txt", "w");
fputs($f, "RESULTADO EXPORTADO AL FICHERO:\n\n\n");	
		
for($contador=1; $contador <= 5; $contador++ )
{
	print $contador*2 . " ";
	fputs($f, $contador*2 . " ");
}

fclose($f);
?>