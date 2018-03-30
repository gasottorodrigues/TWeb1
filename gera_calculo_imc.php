<?php
include("funcoes.php");
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
			erroIMC(1);	
		}
		
		if(!isset($_POST["usuarioIMC"]) || !isset($_POST["alturaIMC"]) || !isset($_POST["pesoIMC"]) ){
			erroIMC(2);	
		}
		
			
		if(($_POST["alturaIMC"] > 5 or $_POST["alturaIMC"] < 0 ) or ($_POST["pesoIMC"] < 0 or $_POST["pesoIMC"] > 450)){
			erroIMC(3);	
		}
		
		
		
		if(file_exists("xml/usuarios.xml")){
			if(isset($_POST["usuarioIMC"])){
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
				
			}	
		}
		else{
			$usuario = "Anônimo";				
		}
		
		
			
		
	
			$altura = $_POST["alturaIMC"];
			$peso = $_POST["pesoIMC"];
			
			$IMC = $peso / ($altura * $altura);
			$IMC = number_format($IMC, 2, '.', ',');
			
			#Cria o xml caso o arquivo não exista
			if(!file_exists("xml/imc.xml")){
				$xml = 
'<?xml version="1.0" encoding="UTF-8"?>
<consultas>
    <consulta>
        <usuario>' . $usuario . '</usuario>
        <altura>' . $altura . '</altura>                                                                               
        <peso>' . $peso . '</peso>
        <IMC>' . $IMC . '</IMC>
    </consulta>
</consultas>';
			   file_put_contents("xml/imc.xml", $xml);
			}
			
			#cria um nó no xml caso o arquivo já exista
			else{
					$xml = simplexml_load_file("xml/imc.xml");
					$consulta = $xml->addChild('consulta');
					$consulta-> addChild('usuario',$usuario);
					$consulta-> addChild('altura',$altura);
					$consulta-> addChild('peso',$peso);
					$consulta -> addChild('IMC',$IMC);							
					file_put_contents("xml/imc.xml", $xml->asXML());
			}
			echo'
			<p>
				O usuário '.$usuario.' tem '.$IMC.' de IMC!
			</p>
			<p>
				Clique <a href="index.php">aqui</a> para voltar ao início
			</p>
			<p>
				Clique <a href="imc.php">aqui</a> para cadastrar mais IMC
			</p>
			';
		
		?>				
	</body>
</html>  