<!DOCTYPE html>
<html>
  <head>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="../jquery_css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="agendamento.css">
    <div class="logo_studiodiv">
    <img id="logo_studio" src="../fotos_icones/logo_editada.png" width="120">  <!-- provavelmente editar a logo, pois ainda não há o vetor da mesma -->
    </div>
</head> 
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #e4121286;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="../pagina_inicial/paginainicial.html">Página Inicial<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="../servicos/servicos.html">Serviços</a>
                <a class="nav-item nav-link active" href="../galeria_fotos/galeriadefotos.html">Galeria de Fotos</a>
                <a class="nav-item nav-link active" href="../quem_somos/quemsomos.html">Quem somos</a>
              </div>
            </div>
          </nav>

          
        <div class="calendario">
    <div class="d-flex align-items-center pb-2">
        <button class="btn btn-link d-flex align-items-center p-0" ng-click="voltar()">
            <i class="material-icons">arrow_back</i>
            <span class="ml-1 d-none d-sm-block">Anterior</span>
        </button>
        <span class="escolha-horario" style="flex: 1; text-align: center">Escolha o seu horário</span>
        <button class="btn btn-link d-flex align-items-center p-0" ng-click="avancar()">
            <span class="mr-1 d-none d-sm-block">Próximo</span>
            <i class="material-icons">arrow_forward</i>
        </button>
    </div>
    <hr class="m-0" />
    <div class="calendario__lista-datas">
        <div class="calendario__dia calendario-dia" ng-repeat="data in datas" ng-class="{'calendario-dia--selecionado': dataEstaSelecionada(data.data)}" ng-click="selecionarData(data.data)">
            <span class="calendario-dia__dia-semana" >{{data.diaDaSemana}}</span>
            <span class="calendario-dia__dia-mes">
                <span>{{data.dia}}</span>
                <span>/</span>
                <span class="calendario-dia__dia">{{data.mes}}</span>
                </span>
            </span>
        </div>
    </div>
</div>
    






<footer class="footer">
  <div class="row">
      <div class="col-6">
        <p><i class="fa fa-phone" aria-hidden="true"></i> Tel:. (00) 0000-0000</p>
			<p><i class="fa fa-envelope" aria-hidden="true"></i> evelyn@evelyn.com</p>
      </div>
      <div class="col-6" style="text-align: right;">
        <h3>Studio de Beleza Evelyn Marins</h3>
        <p>Rua José Ferreira Murro, Nº 320 - Nova Iguaçu <br>
          Rio de Janeiro - RJ - 26031-170
          </p>  
      </div>
    </div>
    <hr></hr>
    <div class="row">
      <div class="col-12"><a href="https://pt-br.facebook.com/studioevelynmarins/"><img src="../fotos_icones/facebook-png-cinza-2.png" title="Facebook"  class="redessociais"/></a>
    </div>
  </div>
</footer>

</body>
</html>
