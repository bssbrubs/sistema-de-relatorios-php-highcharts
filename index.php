<?php

 // Conexão com o banco de dados
include __DIR__ . '/php/conexao.php';

 // Consultas ao banco de dados
include __DIR__ . '/php/busca_periodo/consultas.php';

?>

<!DOCTYPE html>

<html>

<head>

  <title>Sistema de Relatórios</title>

  <!-- Incluindo a jQuery 3.1.1 -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>

  <!--Importando Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Incluindo a Materialize Framework -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!-- Incluindo o CSS Custom -->
  <link rel="stylesheet" href="css/stylesheet.css">

  <!-- Incluindo o HighCharts API -->
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/offline-exporting.js"></script>

  <!--Permitindo ao navegador saber que o site é otimizado a mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <!-- Incluindo o HighCharts -->
  <?php
  if (isset($_POST["dataFim"]) && isset($_POST["dataInicio"])) {
    include __DIR__ . '/php/busca_periodo/highchartsJS.php';
  } else {
    // Nada a ser exibido
  }
  ?>

</head>

<body>
  <nav>
    <div class="nav-wrapper">
      <a href="#!" class="right brand-logo">Sistema de Relatórios</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="left hide-on-med-and-down">
        <li><a href="sass.html">Busca por Periodo</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Busca por Periodo</a></li>
  </ul>

  <br>

  <main>
    <form class="formulario" id="dataform" method="POST">
      <div class="row">

        <div class="col s10 offset-s1 l10 offset-l1 m8 offset-m2 center">
          <!-- //Estrutura com grid responsivo de coluna com centralização em mobile e desktop. -->

          <div class="personal">
            <!-- //div container com DatePicker da data inicial de busca de registros -->
            <div class="input-field form-date-picker-1 col s12 l3 m6">
              <div class="container">
                <label>DATA INICIAL</label>
                <input type="text" id="dataInicio" required="required" name="dataInicio" value="<?php echo $dataInicio; ?>" class="datepicker">
              </div>
            </div>

            <!-- //div container com DatePicker da data final de busca de registros -->
            <div class="input-field form-date-picker-2 col s12 l3 m6">
              <div class="container">
                <label>DATA FINAL</label>
                <input type="text" id="dataFim" required="required" name="dataFim" value="<?php echo $dataFim; ?>" class="datepicker">
              </div>
            </div>

            <!-- Botão de tipo submit para envio de informações via POST -->
            
            <div class="form-button input-field col s12 l3 m6">
              <button class="btn waves-effect waves-light indigo darken-4 left-align" type="submit" value= "buscar" name="buscar" onclick="buscarDados()">BUSCAR <i class="material-icons right">send</i></button>
            </div>

            <!-- Botão de tipo submit para envio de informações via POST p/Relatorio -->
            <div class="form-button input-field col s12 l3 m6">
              <button class="btn waves-effect waves-light indigo darken-4 left-align" type="submit" value="gerar" name="gerar" onclick="gerarRelatorio()">GERAR RELATÓRIO  <i class="material-icons right">send</i>  </button>
            </div>
          </div>          
        </div>
      </div>

      </form>

      <!-- //div container da API do Highcharts -->
      <div class="row center-align">
        <div class="col s12 m12 l12 ">
          <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto">
          </div>
        </div>
      </div>
    </main>
  </body>

  <script src="js/scripts.js"></script>
  </html>