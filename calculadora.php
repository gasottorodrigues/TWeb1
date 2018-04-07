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
	?>
	     <form method="post" action="gera_calculo_calculadora.php">
		
			   <select name="nome" id="nome">
			   		<option value="anônimo">Anônimo</option>
					<?php 
						$arquivo = 'xml/usuarios.xml';
						if(file_exists($arquivo)){
							$xml = simplexml_load_file($arquivo);
							
			                foreach ($xml->children() as $usuario){   
								echo'<option value ="'. $usuario->nome .'">'. $usuario->nome .'</option>';
			                }                     
						}	
				   		
				   ?>
			 </select>
			 
			 <p>
				<label>Primeiro Valor:</label>
				<input type="number" name="numero1" id="numero1"/>
			 
			 </p>
			 
			 <p>
				<label>Segundo Valor:</label>
				<input type="number" name="numero2" id="numero2"/>
			 </p>
			 
			 <p>
				<select name="operacao" class="operacao">
					<option value="+">+</option>
					<option value="-">-</option>
					<option value="*">*</option>
					<option value="/">/</option>
					<option value="%">%</option>
				</select>
			 </p>
			 <p>
				<input type="submit" value="Gerar Resultado" name="Calculo" id="Calculo"/>
			</p>
		</form>	
	</body>
</html>
	