<html lang="en">
  	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <link rel="icon" href="../css/img/favicon.ico">

	    <title>Login</title>

	    <!-- Bootstrap core CSS -->
	    <link href="../css/bootstrap.css" rel="stylesheet">

	    <!-- Custom styles for this template -->
	    <link href="../css/signin.css" rel="stylesheet">
    
  	</head>
  	<body>
	  	<div class="container">
			<?php
			$nome_usuario = $_POST['usuario'];
			$senha_usuario = $_POST['senha'];

			$server = "localhost";
			$usuario = "root";/*Criar usuario para acesso ao banco de dados*/
			$base = "projeto";
			$senha = "";
			
			$conexao = mysqli_connect($server, $usuario, $senha,$base) or die("Erro na conexão!");

			 
    
    
		    $sql = "SELECT nome,senha FROM usuario WHERE nome LIKE '".$nome_usuario."' AND senha LIKE '".$senha_usuario."';";
		    $result = mysqli_query($conexao,$sql);
		    $cont = mysqli_affected_rows($conexao);
		    // Verifica se a consulta retornou linhas 
		    if ($cont > 0) {
		        
		        // Captura os dados da consulta e inseri na tabela HTML
		        while ($linha = mysqli_fetch_array($result)) {
		        	if($senha = $linha["senha"] && $nome_usuario = $linha["nome"]){
						
						echo '<div class="flex-column  align-items-center col-auto text-center">
							<img src="../css/gif/loading.gif" class="img-responsive" height="42" width="42">
						  </div>';
						echo '<meta HTTP-EQUIV="Refresh" CONTENT="3; URL=mostrar_tudo.php">';	
						break;
					}else{
						
						
					}
		        }
		        
		    } else {
		        // Se a consulta não retornar nenhum valor, exibi mensagem para o usuário
		        
		        echo '<div class="flex-column  align-items-center col-auto text-center">
							<br>
							<h1>Não foi possivel fazer login.</h1>
							<br>
							<h1>Erro: Não foram encontrados registros!. Redirecionando em 10s</h1>
							<br>
					  </div>';
				echo '<meta HTTP-EQUIV="Refresh" CONTENT="10; URL=../">';	
		    }
			
			?>					
		</div>
	</body>
</html>