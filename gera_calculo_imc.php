<?php
$erro = 0;
$erroId = 0;
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Trabalho1</title>
		<meta charset="UTF-8"/>
		<link href="css/style.css" rel="stylesheet" type="text/css">	
	</head>
	<body>					
		<?php
		if(empty($_POST)){
			$erro = 1;
			$erroId = 1;
		}
		if(empty($_POST["usuarioIMC"])){
			$erro = 1;
			$erroId = 2;
		}
		
		if(filter_input(INPUT_POST, "alturaIMC", FILTER_VALIDATE_FLOAT) or filter_input(INPUT_POST, "pesoIMC", FILTER_VALIDATE_FLOAT)){		
			if(($_POST["alturaIMC"] > 5 or $_POST["alturaIMC"] < 0 ) or ($_POST["pesoIMC"] < 0 or $_POST["pesoIMC"] > 450)){
				$erro = 1;
				$erroId = 3;
			}
		}
		else{
			$erro = 1;
			$erroId = 4;			
		}
		
		if(file_exists("xml/usuarios.xml")){
			$xml = simplexml_load_file("xml/usuarios.xml");
			foreach ($xml->children() as $usuario){   
				if($usuario->nome == $_POST["usuarioIMC"]){
					$usuario = $_POST["usuarioIMC"];
					break;
				}
				else{
					$usuario = "Anônimo";
				}
			} 						
		}
		else{
			$erro = 1;
			$erroId = 5;			
		}
		
		if($erro == 1){
			echo "<script>console.log(".$erroId.");</script>";
			echo'
			<p>
				Erro no envio do formulário, tente novamente mais tarde!					
			</p>
			<p>
			Clique <a href="index.php">aqui</a> para voltar ao início
			</p>
			';
		}
		else{
			$altura = $_POST["alturaIMC"];
			$peso = $_POST["pesoIMC"];
			
			print_r($altura ." ".$peso ." ". $usuario);
		}
		?>				
	</body>
</html>  