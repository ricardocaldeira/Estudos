<html>
	<head>
		<meta charset="utf-8">
		<title>Resultado</title>
	</head>
	<body>
		<?php 
			$carrosVendidos = $_POST['numeroCarros'];
 			$valorTotalVendas = $_POST['valorTotalVendas'];
			$salario = $_POST['salarioFixo'];
			$percentual = 0.05;
			$comissaoCadaCarro = $_POST['comissaoCadaCarro'];
			$comissaoCadaCarroTotal = ($valorTotalVendas*($carrosVendidos*($comissaoCadaCarro/100)));
			$comissaoFixa = $valorTotalVendas*0.05;
			
			
			
			echo '<font color="blue"><h1 align="center">O salário do vendedor é ' . number_format(($salario+$comissaoFixa+$comissaoCadaCarroTotal),2,',','.') . '</h1></font>';
		?>
		
		<form action="CalculoVendas.html">
			<a href="CalculoVendas.html">Clique aqui para voltar</a>
		
		</form>
				
	</body>
		
		
		
		
		
		numero de carro
		valor total de vendas
		salario fixo
		5% valor das vendas
	
	
	


</html>