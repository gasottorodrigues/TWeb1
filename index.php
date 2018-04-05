<!--Arquivo Feito Por André Calixto Toscano -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Exercicio - IMC</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>

	<table><!--Tabela de Usuario -->
		<tr>
			<th>Usuarios</th>
		</tr>
		<tr>
			<td><!--Checar se existe o arquivo xml para cadastrar os usuarios  -->
				<?php
					if (file_exists("xml/usuarios.xml")) {
						echo"<tr>
								<td>
									
								</td>
							</tr>";
					} else {
						echo "Não Contêm Dados";
					}
				?>
			</td>
		</tr>
	</table>

		<table><!--Checar se existe o arquivo xml para cadastrar os calculos feitos pela calculadora  -->
		<tr>
			<th>Cálculos da Calculadora</th	>
		</tr>
		<tr>
			<td>
				<?php
					if (file_exists("xml/calculos.xml")) {
						echo"<tr>
								<td>
									
								</td>
							</tr>";
					} else {
						echo "Não Contêm Dados";
					}
				?>
			</td>	
		<tr>
	</table>
	
		<table><!--Checar se existe o arquivo xml para cadastrar os calculos feitos pelo IMC  -->
		<tr>
			<th>Calculos do IMC</th>
		</tr>
		<tr>
			<td>
				<?php
					if (file_exists("xml/imc.xml")) {
						echo"<tr>
								<td>
									
								</td>
							</tr>";
					} else {
						echo "Não Contêm Dados";
					}
				?>
			</td>
		</tr>
	</table>