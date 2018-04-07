<!-- Isabela Aparecida Bonifácio de Almeida :)-->
	<?php
		include("cabecalho.php");
	?>
		<style>
		
		@import url('https://fonts.googleapis.com/css?family=Rammetto+One|Rozha+One');
		.form-container{
			width:100%;
			
			margin:25px auto;
			color:#999;
			font-family: 'Rozha One', serif;
			font-family: 'Rammetto One', cursive;
			font-weight: lighter;
		}

		.form-container h2, .form-container input[type="submit"]{
			display:block;
			box-sizing: border-box;
			font-weight: lighter;
			font-size:2em;
			width:100%;
			border:none;
			text-align: center;
			background:#555;
			padding:15px;
			color:black;
			border-radius:10px;
		}

		.fileContainer {
			overflow: hidden;
			position: relative;
		}

		/* Example stylistic flourishes */

		.fileContainer {
			background: rgb(139, 131, 129, 0.5);
			float: left;
			padding: 1em;
		}

		.form-container h2{
			margin-bottom:40px;
		}

		 .form-container input[type="submit"]{
			margin-top:40px;
			transition:all 0.1s;
			font-family: 'Rozha One', serif;
			font-family: 'Rammetto One', cursive;
		 }

		 .form-container input[type="submit"]:active{
			 box-shadow: inset 0 0 0 100px #555;
			 
		 }

		.form-container p{
			margin:0 auto 15px auto;
			display:block;
			box-sizing: border-box;
			width:90%;
		}

		.form-container p label{
			display:block;
			width:100%;
			font-size:0.7em;
		}

		.form-container p input{
			width:100%;
			margin:auto;
			border:none;
			color:rgb(140, 127, 145);
			border-bottom:1px #999 solid;
			font-size:1.5em;
			padding:2px 7px;
			transition:all 0.5s;
		}

		.form-container p input:focus{
			border-bottom:3px solid #53a7ea;
		}

		@media(max-width: 1200px){
			.form-container{
				width:95%;
				margin-top:15px;
			}

			.form-container h2, .form-container input[type="submit"]{
				padding:20px;
				font-size:3em;
			}

			.form-container input[type="submit"]{
				padding:50px 20px;
				font-size:4em;
			}

			.form-container p label{
				font-size:1.5em;
			}

			.form-container p input{
				margin-top:15px;
				font-size:2em;
				padding:8px;
			}
			
			.div-select {
				width:250px;  /* Tamanho final do select */
				overflow:hidden; /* Esconde o conteúdo que passar do tamanho especificado */
			}
			  
			.div-select select {
				  background: url(http://www.webcis.com.br/images/imagens-noticias/select/ico-seta-select.gif) no-repeat #354880;  /* Imagem de fundo (Seta) */
				  background-position: 205px center;  /*Posição da imagem do background*/
				  width: 270px; /* Tamanho do select, maior que o tamanho da div "div-select" */
				  height:48px; /* altura do select, importante para que tenha a mesma altura em todo os navegadores */
				  font-family:Arial, Helvetica, sans-serif; /* Fonte do Select */
				  font-size:18px; /* Tamanho da Fonte */
				  padding:13px 20px 13px 12px; /* Configurações de padding para posicionar o texto no campo */
				  color:#fff; /* Cor da Fonte */
				  text-indent: 0.01px; /* Remove seta padrão do FireFox */
				  text-overflow: "";  /* Remove seta padrão do FireFox */     
				  select::-ms-expand {display: none;} /* Remove seta padrão do IE*/
			  
			}
		}

	</style>


	     <form method="post" action="gera_calculo_calculadora.php" class="form-container">
			<div class="div-select">
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
			 </div>
			 <p>
				<label>Primeiro Valor:</label>
				<input type="number" name="numero1" id="numero1"/>
			 
			 </p>
			 
			 <p>
				<label>Segundo Valor:</label>
				<input type="number" name="numero2" id="numero2"/>
			 </p>
			 
			 	<div class="div-select">
					<select name="operacao" class="operacao">
							<option value="+">+</option>
							<option value="-">-</option>
							<option value="*">*</option>
							<option value="/">/</option>
							<option value="%">%</option>
					</select>
				</div>

			 <p>
				<input type="submit" value="Gerar Resultado" name="Calculo" id="Calculo"/>
			</p>
		</form>	
	</body>
</html>
	