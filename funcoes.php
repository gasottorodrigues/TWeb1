<?php
	//Arquivo feito por Igor Moraes

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
	
	//Funções calculadora
	
	function somar($x, $y){
		$z=$x+$y;
		return $z;
	}
	
	function dividir($x, $y){
		$z=$x/$y;
		return $z;
	}
	
	function subtrair($x, $y){
		$z=$x-$y;
		return $z;
	}
	
	function multiplicar($x, $y){
		$z=$x*$y;
		return $z;
	}
	
	//Funções calcular IMC
	
	function calcularIMC($massa, $altura){
		$IMC=$massa/($altura*$altura);
		return $IMC;
	}
?>