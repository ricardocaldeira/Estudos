<html>
	<html>
	<?php include_once '..\..\head.php';?>
<body>
	<?php include_once '..\..\menu.php';?>
		<form action="resultadoCalculoFabrica.php" method="get">
			<p align="center"><font size="15" face="arial black">Descubra o custo do carro</font><br /></p>
			<label for="custoFabrica">Custo Fábrica <br/></label><input type="number" required="true" step="any" placeholder="1000000,00" min="0" name="custoFabrica" id="custoFabrica"><br />
			<input type="submit" value="Enviar" name="enviar">
			<input type="reset" value="Limpar" name="limpar">
		</form>
		
	</body>


</html>