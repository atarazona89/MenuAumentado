<html>
 <head>
  <title>Ingredientes de Pabellon Criollo</title>
 </head>
 <body>
 
 <form action="ver" method="post">
 Ingredientes: <br />
    <select multiple name="ingredientes[]">
        <option value="arroz">Arroz</option>
        <option value="caraotas">Caraotas</option>
        <option value="carne">Carne de falda de Res</option>
		<option value="cebolla">Cebolla</option>
		<option value="comino">Comino</option>
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
 Variantes: <br />
    <select name="otros[]">
        <option value="oriental">Pabellon Oriental</option>
        <option value="andino">Pabellon Andino</option>
        <option value="caballo">Pabellon a Caballo</option>
    </select><br />
 <input type="submit" value="Ver variante" />
 </form>

 </body>
</html>