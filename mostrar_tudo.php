
<!-- saved from url=(0052)https://getbootstrap.com/docs/4.1/examples/pricing/# -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <link rel="icon" href="../css/img/favicon.ico">

    <title>Todas as salas</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/pricing.css" rel="stylesheet">
  </head>

  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <img class="mb-4" src="../css/img/logo-192x192.png" alt="" width="40" height="40" style="margin-right:10px;">
      <h5 class="my-0 mr-md-auto font-weight-normal">Alpha e Beta TI</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="pesquisa_principal.php">Pesquisar Informação</a>
        <a class="p-2 text-dark" href="ocupadas.php">Salas Ocupadas</a>
	      <a class="p-2 text-dark" href="disponiveis.php">Salas Disponiveis</a>
      </nav>
      <a class="btn btn-outline-primary" href="/app/" onclick="<?php $SESSION_END;?>">Sair</a>
    </div>
    <div class="container flex-column flex-md-row align-items-center p-3 px-md-4 mb-3" style="margin-top:30px;">
      <div class="pricing-header card-deck px-3 py-3 pt-md-5 pb-md-4 mb-3 mx-auto text-center">
        <h1 class="display-4 card-head">Todas Salas</h1>
        <p class="lead">Estas são as salas a disposição dos Professores da instituição Senai com estado Disponivel e Ocupado.</p>
      </div>
      <!-- 
        Cada item da lista 
        sera criado dinamicamente 
        buscando os dados de cada sala
        no banco de dados
      -->
      <div class="card-deck mb-3 text-center">


        <div class="card mb-4 shadow-sm">
          <div class="card-header alert-danger">
            <h4 class="my-0 font-weight-normal ">Ocupada</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">240</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>2º Andar</li>
              <li>30 Computadores</li>
              <li>30 Lugares</li>
              <li>Tipo: Laboratório</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-danger" onclick="alert('Sala Ocupada');">Ocupado</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header alert-danger">
            <h4 class="my-0 font-weight-normal">Ocupada</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">220</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>2º Andar</li>
              <li>30 Computadores</li>
              <li>30 Lugares</li>
              <li>Tipo: Laboratório</li>
            </ul>
             <button type="button" class="btn btn-lg btn-block btn-outline-danger" onclick="alert('Sala Ocupada');">Ocupado</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header alert-info">
            <h4 class="my-0 font-weight-normal">Disponível</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">210</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>2º Andar</li>
              <li>30 Computadores</li>
              <li>30 Lugares</li>
              <li>Tipo: Laboratório</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Escolher</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header alert-info">
            <h4 class="my-0 font-weight-normal">Disponível</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">200</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>2º Andar</li>
              <li>30 Computadores</li>
              <li>30 Lugares</li>
              <li>Tipo: Laboratório</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Escolher</button>
          </div>
        </div>

        <div class="card mb-4 shadow-sm">
          <div class="card-header alert-info">
            <h4 class="my-0 font-weight-normal">Disponível</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">340</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>2º Andar</li>
              <li>30 Computadores</li>
              <li>30 Lugares</li>
              <li>Tipo: Laboratório</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Escolher</button>
          </div>
        </div>

        <div class="card mb-4 shadow-sm">
          <div class="card-header alert-info">
            <h4 class="my-0 font-weight-normal">Disponível</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">360</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>2º Andar</li>
              <li>30 Computadores</li>
              <li>30 Lugares</li>
              <li>Tipo: Laboratório</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Escolher</button>
          </div>
        </div>

        <div class="card mb-4 shadow-sm">
          <div class="card-header alert-info">
            <h4 class="my-0 font-weight-normal">Disponível</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">410</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>2º Andar</li>
              <li>30 Computadores</li>
              <li>30 Lugares</li>
              <li>Tipo: Sala de Aula</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Escolher</button>
          </div>
        </div>

        <div class="card mb-4 shadow-sm">
          <div class="card-header alert-info">
            <h4 class="my-0 font-weight-normal">Disponível</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">470</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>4º Andar</li>
              <li>1 Computadore</li>
              <li>30 Lugares</li>
              <li>Tipo: Sala de Aula</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Escolher</button>
          </div>
        </div>

        <div class="card mb-4 shadow-sm">
          <div class="card-header alert-info">
            <h4 class="my-0 font-weight-normal">Disponível</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">400</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>4º Andar</li>
              <li>1 Computador</li>
              <li>20 Lugares</li>
              <li>Tipo: Sala de Aula</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Escolher</button>
          </div>
        </div>

        <div class="card mb-4 shadow-sm">
          <div class="card-header alert-info">
            <h4 class="my-0 font-weight-normal">Disponível</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">250</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>2º Andar</li>
              <li>25 Computadores</li>
              <li>30 Lugares</li>
              <li>Tipo: Laboratório</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Escolher</button>
          </div>
        </div>

      </div>

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="./Pricing example for Bootstrap_files/bootstrap-solid.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">© 2017-2018</small>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Cool stuff</a></li>
              <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Random feature</a></li>
              <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Team feature</a></li>
              <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Stuff for developers</a></li>
              <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Another one</a></li>
              <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Resource</a></li>
              <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Resource name</a></li>
              <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Another resource</a></li>
              <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Final resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Team</a></li>
              <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Locations</a></li>
              <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Privacy</a></li>
              <li><a class="text-muted" href="https://getbootstrap.com/docs/4.1/examples/pricing/#">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Pricing example for Bootstrap_files/jquery-3.3.1.slim.min.js.download" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./Pricing example for Bootstrap_files/popper.min.js.download"></script>
    <script src="./Pricing example for Bootstrap_files/bootstrap.min.js.download"></script>
    <script src="./Pricing example for Bootstrap_files/holder.min.js.download"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  

</body></html>
