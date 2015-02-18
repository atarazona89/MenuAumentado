<html>
 <head>
  <title>Ingredientes de Pizza</title>
 </head>
 <body>
 
 <form acction="ver" method="post">
 Ingredientes: <br />
    <select name="ingredientes[]">
        Harina</option>
        <option value="agua">Agua</option>
        <option value="levadura">Levadura de panaderia</option>
		<option value="aceite">Aceite de oliva extra virgen</option>
		<option value="sal">Sal</option>
		<option value="salsa">Salsa de tomate</option>
		<option value="queso">Mozzarella</option>
		<option value="jamon">Jamon</option>
    </select><br />
	<input type="submit" value="¡Ver!" />
 </form>
 
  <form action="variantes" method="post">
  <option value="jqchampinones">Ingredientes de Pizza de jamon, quso y champiñones</option>
  <option value="barbacoa">Ingredientes de Pizza Pizza Barbacoa</option>
 <input type="submit" value="Ver variantes" />
 
 </form>

 </body>
</html>