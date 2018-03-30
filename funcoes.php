<?php
	function erroIMC($erroId){
		//Manda um alerta pro console apontando o id do erro
		echo "<script>console.log(".$erroId.");</script>";
		echo'
		<p>
			Erro no envio do formulário, tente novamente mais tarde!					
		</p>
		<p>
		Clique <a href="index.php">aqui</a> para voltar ao início
		</p>
		';
		//Encerra a execução do programa
		die();
	}
?>