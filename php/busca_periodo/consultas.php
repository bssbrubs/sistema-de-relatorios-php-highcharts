<?php

require __DIR__ . '/conexao.php';

$dataFim = "as Datas";
$dataInicio = "Selecione";


if (isset($_POST["dataFim"]) && isset($_POST["dataInicio"])) { 
  $dataFim = $_POST['dataFim'];
  $dataInicio = $_POST['dataInicio'];

  $registro_source = 'Registros de uso de '.$dataInicio.' até '.$dataFim;

  $ano = "";
  $mes = "";
  if($ano!="Total" && $mes!="Total"){

    $total_query = mysqli_query($conexao, "SELECT COUNT(*) AS regs FROM registros WHERE data BETWEEN '$dataInicio' AND '$dataFim'"); 
    while ($reg_result = mysqli_fetch_array($total_query)) {
      $total_periodo[] = $reg_result['regs'];
      $total_per_int = $total_periodo[0]; 
      $total_per_media = round(($total_per_int/33), 2);
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }

    $ca_query = mysqli_query($conexao, "SELECT nome, COUNT(*) AS regs FROM registros WHERE data BETWEEN '$dataInicio' AND '$dataFim' AND tipo='CA'"); 
    while ($reg_result = mysqli_fetch_array($ca_query)) {
      $ca[] = $reg_result['regs'];
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }

  } 
}
// echo mysql_errno($conexao) . ": " . mysql_error($conexao). "\n";

?>