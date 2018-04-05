<!-- Isabela Aparecida Bonifácio de Almeida :)-->

<!DOCTYPE html>

<head>
	
	<title>Calculadora</title>
	<meta charset="UTF-8"/>
 	
</head>

<body>
 
     <form method ="post "action="gera_calculo_calculadora.php">
	
	
	   <select name="nome" id="nome">
		<?php 
		
			$arquivo = "xml/usuarios.xml";

			
			if(!file_exists("usuario.xml")){
		
	        	$fp = fopen("usuario.xml","w");
		
		      $conteudo= '<?xml version="1.0"?><usuarios></usuarios>';
		
		fwrite($fp,$conteudo);
		
		fclose($fp);
		
	}
	 $arquivo = 'usuario.xml';
      $xml = simplexml_load_file($arquivo);
			
			
			
			
			if(file_exists($usuario.xml));
			$xml = simplexml_load_file ($arquivo);

			foreach($xml as $x){
				$nome = $x->nome;
				echo"<option value= $nome >$nome</option>";
			}
	   
	   		// Aqui faltou um ELSE{} para cajo não exista o arquivo .xml;
	   ?>
	 </select>
	 
	 <p>
		<label>Digite 1 número:</label>
		<input type="number" name="numero1" id="numero1"/>
	 
	 </p>
	 
	 <p>
		<label>Digite 2 número:</label>
		<input type="number" name="numero2" id="numero2"/>
	 </p>
	 
	 
		<select name="operacao" class="operacao">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
			<option value="%">%</option>
		</select>
	 </p>
	 <p>
		<input type="submit" name="Calculo" id="Calculo"/>
	</p>
	</form>
	    
	
	

	
	</div>
	
	
 
</body>