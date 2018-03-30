<?php
/*include("funcoes.php");*/
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Trabalho1</title>
		<meta charset="UTF-8"/>
		<link href="css/style.css" rel="stylesheet" type="text/css">	
	</head>
	<body>
		<form name="formCadastroIMC" class="form" action="gera_calculo_imc.php" method="post">
			<div class="formGroup">
				<label for="usuarioIMC">Usuário</label>
				<select name="usuarioIMC" id="usuarioIMC">
					<option selected>Anônimo</option>
					<?php
					if(file_exists("xml/usuarios.xml")){
						$xml = simplexml_load_file("xml/usuarios.xml");
						
                        foreach ($xml->children() as $usuario){   
							echo'<option>'.$usuario->nome.'</option>';
                           
                        }                     
					}	
					?>
				</select>
			</div>
			
			<div class="formGroup">
				<label for="alturaIMC">Altura(m)</label>
				<input type="number" step="0.01" required="required" min="0" max="5" name="alturaIMC" id="alturaIMC"/>
			</div>
			
			<div class="formGroup">
				<label for="alturaIMC">Peso(kg)</label>
				<input type="text" required="required" min="0" max="450" name="pesoIMC" id="pesoIMC"/>
			</div>
			
			<div class="formGroup">
				<input type="submit" value="Enviar"/>
				<input type="submit" value="Resetar"/>
			</div>
		</form>	
	</body>
</html> 