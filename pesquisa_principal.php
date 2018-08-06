<!doctype html>
<html lang="eng">
  <head>
    <!-- Required meta tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
     <link rel="icon" href="../css/img/favicon.ico">
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>Pesquisa de Salas</title>
  </head>
  <body>
   <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <img class="mb-4" src="../css/img/logo-192x192.png" alt="" width="40" height="40" style="margin-right:10px;">
      <h5 class="my-0 mr-md-auto font-weight-normal">Alpha e Beta TI</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        
        <a class="p-2 text-dark" href="disponiveis.php">Salas disponiveis</a>
	<a class="p-2 text-dark" href="ocupadas.php">Salas Ocupadas</a>
      </nav>
      <a class="btn btn-outline-primary" href="../app/">Sair</a>
    </div>
     <main class = "container">
        <div class="col-12">
          <h1>Pesquisa de Salas</h1>
          <form class="form-inline col-12" method="POST" action="pesquisa_principal.php">
            <input class="form-control col-12" type="text" placeholder="Digite o numero da sala"  name="n_sala">
            <input class="btn btn-outline-success col-6" type="submit" value="Pesquisar Informação"></input>
         </form>       
        </div>
        
        <div id="resultado_consulta">
        
   
   <?php
    
    if (isset($_POST["n_sala"])) {
        $n_sala = $_POST["n_sala"];
        // Conexao com o banco de dados
        $server = "localhost";
        $user = "root";
        $senha = "";
        $base = "projeto";
        $conexao = mysqli_connect($server, $user, $senha,$base) or die("Erro na conexão!");
       
    // Verifica se a variável está vazia
    if (empty(!is_nan($n_sala))) {
        echo "<br>Digite o numero da sala.";
    } else {
        
        $sql = "";
        $sql .= "SELECT s.n_sala AS 'SALA', s.computadores AS 'COMPUTADORES', s.lugares AS 'LUGARES', s.andar AS 'ANDAR', s.estado AS 'ESTADO',t.nome AS 'TIPO'";
        $sql .=	"FROM sala AS s ,tipo AS t  WHERE s.n_sala = ".$n_sala." AND t.idt = s.idt";
        /*$sql .=	"WHERE p.idp = pf.idp AND s.ids = p.ids AND p.idd = d.idd AND s.n_sala =".$n_sala;
        $sql .=	" ORDER BY p.dt_h_entrada desc";*/
        
    }
    
    sleep(1);
    $result = mysqli_query($conexao,$sql);
    $cont = mysqli_affected_rows($conexao);
    // Verifica se a consulta retornou linhas 
    if ($cont > 0) {
        
        $return = "<div class='container'> <div class='card-deck mb-3 text-center'>";
        // Captura os dados da consulta e inseri na tabela HTML
        while ($linha = mysqli_fetch_array($result)) {
        	           
            if($linha["ESTADO"]==1){
                $estado = "OCUPADO";
                $return.= '<div class="card mb-4 shadow-sm ">';
                $return.=     '<div class="card-header alert-warning">';
                $return.=       ' <h4 class="my-0 font-weight-normal">'.$estado.'</h4>';
                $return.=      ' </div>';
                $return.=    '   <div class="card-body">';
                $return.=          '<h1 class="card-title pricing-card-title">'.utf8_encode($linha["SALA"]).'</h1>';
                $return.=           '<ul class="list-unstyled mt-3 mb-4">';
                $return.=             '<li>'.utf8_encode($linha["ANDAR"]).'º Andar</li>';
                $return.=             '<li>'.utf8_encode($linha["COMPUTADORES"]) .' Computadores</li>';
                $return.=             '<li>'.utf8_encode($linha["LUGARES"]).' Lugares</li>';
                $return.=             '<li>Tipo: '. utf8_encode($linha["TIPO"]).'</li>';
                $return.=           '</ul>';
                $return.= '      </div>';
                $return.=  '   </div>';
            }else{
                $estado = "DISPONIVEL";
                $return.= '<div class="card mb-4 shadow-sm">';
                $return.=     '<div class="card-header alert-success">';
                $return.=       ' <h4 class="my-0 font-weight-normal">'.$estado.'</h4>';
                $return.=      ' </div>';
                $return.=    '   <div class="card-body">';
                $return.=          '<h1 class="card-title pricing-card-title">'.utf8_encode($linha["SALA"]).'</h1>';
                $return.=           '<ul class="list-unstyled mt-3 mb-4">';
                $return.=             '<li>'.utf8_encode($linha["ANDAR"]).'º Andar</li>';
                $return.=             '<li>'.utf8_encode($linha["COMPUTADORES"]) .' Computadores</li>';
                $return.=             '<li>'.utf8_encode($linha["LUGARES"]).' Lugares</li>';
                $return.=             '<li>Tipo: '. utf8_encode($linha["TIPO"]).'</li>';
                $return.=           '</ul>';
                $return.= '      </div>';
                $return.=  '   </div>';
            }
            
            

        }
        echo $return.="</div></div>";
    } else {
        // Se a consulta não retornar nenhum valor, exibi mensagem para o usuário
        echo "<div class='container'><div class='text-center'><h1>Não foram encontrados registros!</h1></div></div>";
    }
}
?>
	</div>
     </main>


  </body>
</html>
