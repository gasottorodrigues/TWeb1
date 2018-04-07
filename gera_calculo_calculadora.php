<!-- Isabela Aparecida Bonifácio de Almeida :)-->
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
	</head>
	<body>
	<?php
		include "cabecalho.php";
		include "funcoes.php";
		
			$resultado = 0;

			$nome = $_POST["nome"];
			$numero1 = $_POST["numero1"];		
			$numero2 = $_POST["numero2"];
			$operacao = $_POST["operacao"];		
			$arquivo = 'xml/calculadora.xml';
		
			if($operacao == '+'){ 

				$resultado = somar( $numero1, $numero2);
			}
			
			elseif($operacao == '-'){
					$resultado = subtrair( $numero1,$numero2);
			}
			elseif($operacao == '*'){
					$resultado = multiplicar( $numero1,$numero2);
			}
			elseif($operacao == '/'){
					$resultado = dividir( $numero1,$numero2);
			}
			elseif($operacao = '%'){
					$resultado = resto( $numero1,$numero2);
			}
			echo"<div>";
				echo"<h1>Resultado: $resultado</h1>";
			echo"</div>";

			if(file_exists($arquivo)){
				$xml = simplexml_load_file($arquivo);
				$operacao = $numero1 .' '. $operacao .' '. $numero2;

				$conta = $xml->addChild('conta');

				$conta->addChild('usuario', $nome);
				$conta->addChild('operacao', $operacao);

				file_put_contents($arquivo, $xml->asXML());
			}else{
				$operacao = $numero1 .' '. $operacao .' '. $numero2;
				$xml = 
"<?xml version = '1.0' encoding='utf-8' ?>
<calculadora>
	<conta>
		<usuario>$nome</usuario>
		<operacao>$operacao</operacao>
	</conta>
</calculadora>
";
			file_put_contents($arquivo, $xml);
			}
		?>	
	</body>
</html>
