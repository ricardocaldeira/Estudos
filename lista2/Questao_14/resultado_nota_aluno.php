	<!DOCTYPE html>
	<html>
	<?php include_once '..\..\head.php';?>
<body>
	<?php include_once '..\..\menu.php';?>
			<?php 
				$nota1 = $_POST['nota1'];
				$nota2 = $_POST['nota2'];
				$nota3 = $_POST['nota3'];
				
				$media = (($nota1*0.2) + ($nota2*0.3) + ($nota3*0.5));
				
				
			
				echo '<h1 align="center">Resultado do calculo de notas do aluno</h1>';
				
			
				
				if ($media >= 5){
					echo '<font color="blue"><h1 align="left">Com a média ' . $media . ' o aluno foi APROVADO</h1></font>';
				}else {
					echo '<font color="red"><h1 align="left">Com a média ' . $media . ' o aluno foi REPROVADO</h1></font>';
				}
			
				echo '<a href="index.php">Voltar</a>';
						
			?>
		</body>
		
	</html>
