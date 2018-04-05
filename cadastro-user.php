<!-- Pagina desenvolvida por Gabriel Sotto Rodrigues -->
<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro Concluído</title>
	</head>
	<body>
	<?php
// Resgata os dados do formulário
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$sexo = $_POST["sexo"];
		$dataNasc = $_POST["dataNasc"];
		$cpf = $_POST["cpf"];
		$cidade = $_POST["cidade"];
		$estado = $_POST["estado"];

		if(file_exists('xml/usuarios.xml')){

			$arq  = simplexml_load_file('xml/usuarios.xml');

			$user = $arq->addChild('user');

			$user->addChild('nome', $nome);
			$user->addChild('email', $email);
			$user->addChild('sexo', $sexo);
			$user->addChild('data', $dataNasc);
			$user->addChild('cpf', $cpf);
			$user->addChild('cidade', $cidade);
			$user->addChild('estado', $estado);

			file_put_contents('xml/usuarios.xml', $arq->asXML());

		}else{
			$arq = 
"<?xml version='1.0' encoding='utf-8' ?>

 <usuarios>
 	<user>
 		<nome>$nome</nome>
 		<email>$email</email>
 		<sexo>$sexo</sexo>
 		<data>$dataNasc</data>
 		<cpf>$cpf</cpf>
 		<cidade>$cidade</cidade>
 		<estado>$estado</estado>
 	</user>
 </usuarios>
";
		file_put_contents('xml/usuarios.xml', $arq);
		}
	?>
	<div>
		<h1>Cliente cadastrado com sucesso!</h1>
	</div>
	
	</body>
</html>