<!-- Página desenvolvida por Gabriel Sotto Rodrigues -->

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

	<!-- Inclusão do cabecalho  -->
	<?php include"cabecalho.php"; ?>


	<!-- Formulário -->

	<div class="form">
		<form action="cadastro-user.php" method="post">
			<p>
				<label>Nome:</label>
				<input type="text" name="nome" required="required" />
			</p>
			<p>
				<label>E-mail:</label>
				<input type="email" name="email" required="required" />
			</p>
			<p>
				<label>Sexo:</label>
				<input type="radio" name="sexo" value="masculino" checked="checked">M
				<input type="radio" name="sexo" value="feminino">F
			</p>
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