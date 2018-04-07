<!-- Página desenvolvida por Gabriel Sotto Rodrigues -->
	<?php include"cabecalho.php"; ?>
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
		}

	</style>

	<!-- Formulário -->

	<div class="form-container">
		<form action="cadastro-user.php" method="post">
			<p>
				<label>Nome:</label>
				<input type="text" name="nome" required="required" />
			</p>
			<p>
				<label>E-mail:</label>
				<input type="email" name="email" required="required" />
			</p>
				<label>Sexo:</label>
				<input type="radio" name="sexo" value="masculino" checked="checked" >M
				<input type="radio" name="sexo" value="feminino">F
			<p>
				<label>Data de Nascimento:</label>
				<input type="date" name="dataNasc" required="required">
			</p>
			<p>
				<label>CPF:</label>
				<input type="text" maxlength="11" name="cpf" required="required">
			</p>
			<p>
				<label>Estado(abreviado):</label>
				<input type="text" name="estado" maxlength="2" required="required">
			</p>

			<p>
				<label>Cidade:</label>
				<input type="text" name="cidade" required>
			</p>

				<input type="submit" value="Cadastrar">
		</form>
	</div>
</body>
</html>