<!-- Isabela Aparecida Bonifácio de Almeida :)-->

<!DOCTYPE html>
<html>

	<head>
		<title>Gera Cálculo</title>
		<meta charset="UTF-8"/>
	</head>

	<body>

		<?php 
			$nome = $_POST["nome"];
			$numero1 = $_POST["numero1"];
			$numero2 = $_POST["numero2"];
			$operacao = $_POST["operacao"];
	
			// include "funcoes.php";
		    $resultado = 0;   

			if($operacao == '+'){ 

				$resultado = somar($numero1 + $numero2);
			}
			if($operacao == '-'){
					$resultado = subtracao($numero1 - $numero2);
			}
			if($operacao == '*'){
					$resultado = multiplicacao($numero1 * $numero2);
			}
			
			if($operacao == '%'){
					$resultado = porcentagem(($numero1 * $numero2 )/100.0);
			}
			if($operacao == '/'){
					$resultado = divisao( $numero1 / $numero2);
			}
		?>	
</body>

</html>    