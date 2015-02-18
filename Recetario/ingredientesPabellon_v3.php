<html>
 <head>
  <title>Ingredientes de Pabellon a Caballo</title>
 </head>
 <body>
 
 <form action="ver" method="post">
 Ingredientes: <br />
    <select multiple name="ingredientes[]">
        <option value="arroz">Arroz</option>
        <option value="garbanzo">Garbanzos</option>
        <option value="carne">Carne de cazón</option>
		<option value="cebolla">Cebolla</option>
		<option value="pimenton">Pimenton rojo</option>
		<option value="aji_dulce">Aji dulce</option>
		<option value="ajo">Ajo</option>
		<option value="cilantro">Cilantro</option>
		<option value="tomate">Tomates</option>
		<option value="aceite">Aceite vegetal</option>
		<option value="platano">Plátanos maduros</option>
    </select><br />
	<input type="submit" value="¡Ver!" />
 </form>
 
 <form action="variantes" method="post">
 <input type="submit" value="Ver variantes" />
 </form>

 </body>
</html>