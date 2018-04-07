<?php
include("funcoes.php");
include("cabecalho.php");
?>
<!DOCTYPE html>
				
		<?php
		//Caso o post estiver vazio, chama uma funcao de erro e atribui 1 ao id do erro(fiz apenas pra facilitar na visualização de algum problema)
		if(empty($_POST)){
			erroIMC(1);	
		}
		//Verifica se todos os campos estão preenchidos
		if(!isset($_POST["usuarioIMC"]) || !isset($_POST["alturaIMC"]) || !isset($_POST["pesoIMC"]) ){
			erroIMC(2);	
		}
		
		//Verifica se cada item está dentro dos limites(maior que zero menor que 80000000000000)	
		if(($_POST["alturaIMC"] > 5 or $_POST["alturaIMC"] < 0 ) or ($_POST["pesoIMC"] < 0 or $_POST["pesoIMC"] > 450)){
			erroIMC(3);	
		}
		
		
		//Se o xml de usuarios existir ele verifica se o usuario do post bate com algum do xml, se não for o caso usuario receberá "anonimo"
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
		
		//Calculos de imc
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