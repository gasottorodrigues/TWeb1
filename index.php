<!--Arquivo Feito Por André Calixto Toscano -->
	<?php
		include("cabecalho.php");
	?>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table><!--Tabela de Usuario -->
						<thead>
							<tr class="table100-head">
								<th class="column" colspan="7">Usuario</th>
							</tr>
						</thead>		
						<tr>
							<td><!--Checar se existe o arquivo xml para cadastrar os usuarios  -->
								<?php
									if (file_exists("xml/usuarios.xml")) {
										$xml = simplexml_load_file("xml/usuarios.xml");
										
										foreach($xml as $user){
										echo"<tr>
												<td>".$user->nome ."</td>
												<td>".$user->email ."</td>
												<td>".$user->sexo ."</td>
												<td>".$user->data ."</td>
												<td>".$user->cpf ."</td>
												<td>".$user->cidade ."</td>
												<td>".$user->estado ."</td>
											</tr>";
										}
									} else {
										echo "Não Contêm Dados";
									}
								?>
							</td>
						</tr>
					</table>

						<table><!--Checar se existe o arquivo xml para cadastrar os calculos feitos pela calculadora  -->
						<thead>
							<tr class="table100-head">
								<th class="column1" colspan="7">Calculos da Calculadora</th>
							</tr>
						</thead>
						<tr>
							<td>
								<?php
									if (file_exists("xml/calculadora.xml")) {
										$xml = simplexml_load_file("xml/calculadora.xml");
										
										foreach($xml as $calc){
										echo"<tr>
												<td>".$calc->usuario ."</td>
												<td>".$calc->calculo ."</td>
												<td>".$calc->resultado ."</td>
											</tr>";
										}
									} else {
										echo "Não Contêm Dados";
									}
								?>
							</td>	
						<tr>
					</table>
					
						<table><!--Checar se existe o arquivo xml para cadastrar os calculos feitos pelo IMC  -->
						<thead>
							<tr class="table100-head">
								<th class="column1" colspan="7">Calculos do IMC</th>
							</tr>
						</thead>
						<tr>
							<td>
								<?php
									if (file_exists("xml/imc.xml")) {
										$xml = simplexml_load_file("xml/imc.xml");
										
										foreach($xml as $imc){
										echo"<tr>
												<td>".$imc->usuario ."</td>
												<td>".$imc->altura ."</td>
												<td>".$imc->peso ."</td>
												<td>".$imc->IMC ."</td>
											</tr>";
										}
									} else {
										echo "Não Contêm Dados";
									}
								?>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>	
