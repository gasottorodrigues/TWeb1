<?php
include("funcoes.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Trabalho1</title>
		<meta charset="UTF-8"/>
		<link href="css/estilo.css" rel="stylesheet" type="text/css">	
	</head>
	<body>
		<form name="formCadastroIMC" class="form" action="gera_calculo_imc.php" method="post">
			<div class="formGroup">
				<label for="usuarioIMC">Usuário</label>
				<select name="usuarioIMC" id="usuarioIMC">
					<?php
					if(file_exists("xml/"))	
					?>
				</select>
			</div>
			
			<div class="formGroup">
				<label for="alturaIMC">Altura</label>
				<input type="number" step="0.01" required="required" name="alturaImc" id="alturaIMC"/>
			</div>
			
			<div class="formGroup">
				<label for="alturaIMC">Peso</label>
				<input type="text" required="required" name="pesoImc" id="pesoIMC"/>
			</div>
			
			<div class="formGroup">
				<input type="submit" value="Enviar"/>
				<input type="submit" value="Resetar"/>
			</div>
		<form>	
	</body>
</html> 