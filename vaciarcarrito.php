<php
 //aqui se borra el Carrito de Compras
 kill("carritocompras.txt");

 echo "<CENTER><H2>EL Carrito de Compras se ha Vaciado</H2>";
 echo "<BR><BR><A HREF= 'Javascript:Window.Close();'>Cerrar</A>"
 echo "</CENTER>;" 
?>