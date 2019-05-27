<?php

require __DIR__ . '/conexao.php';

$dataFim = "as Datas";
$dataInicio = "Selecione";


if (isset($_POST["dataFim"]) && isset($_POST["dataInicio"])) { 
  $dataFim = $_POST['dataFim'];
  $dataInicio = $_POST['dataInicio'];

  $registro_source = 'Registros de Uso do FICAT de '.$dataInicio.' até '.$dataFim;

  $ano = "";
  $mes = "";
  if($ano!="Total" && $mes!="Total"){

    $total_query = mysqli_query($conexao, "SELECT COUNT(*) AS regs FROM registros WHERE data_registro BETWEEN '$dataInicio' AND '$dataFim'"); 
    while ($reg_result = mysqli_fetch_array($total_query)) {
      $total_periodo[] = $reg_result['regs'];
      $total_per_int = $total_periodo[0]; 
      $total_per_media = round(($total_per_int/33), 2);
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }

    $ca_query = mysqli_query($conexao, "SELECT COUNT(*) AS regs FROM registros WHERE data_registro BETWEEN '$dataInicio' AND '$dataFim' AND unidade='CA'"); 
    while ($reg_result = mysqli_fetch_array($ca_query)) {
      $ca[] = $reg_result['regs'];
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }

    $caa_query = mysqli_query($conexao, "SELECT COUNT(*) AS regs FROM registros WHERE data_registro BETWEEN '$dataInicio' AND '$dataFim' AND unidade='CAA'"); 
    while ($reg_result = mysqli_fetch_array($caa_query)) {
      $caa[] = $reg_result['regs'];
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }

    $can_query = mysqli_query($conexao, "SELECT COUNT(*) AS regs FROM registros WHERE data_registro BETWEEN '$dataInicio' AND '$dataFim' AND unidade='CAN'"); 
    while ($reg_result = mysqli_fetch_array($can_query)) {
      $can[] = $reg_result['regs'];
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }

    $cb_query = mysqli_query($conexao, "SELECT COUNT(*) AS regs FROM registros WHERE data_registro BETWEEN '$dataInicio' AND '$dataFim' AND unidade='CB'"); 
    while ($reg_result = mysqli_fetch_array($cb_query)) {
      $cb[] = $reg_result['regs'];
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }

    $cub_query = mysqli_query($conexao, "SELECT COUNT(*) AS regs FROM registros WHERE data_registro BETWEEN '$dataInicio' AND '$dataFim' AND unidade='CUB'"); 
    while ($reg_result = mysqli_fetch_array($cub_query)) {
      $cub[] = $reg_result['regs'];
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }

    $cuc_query = mysqli_query($conexao, "SELECT COUNT(*) AS regs FROM registros WHERE data_registro BETWEEN '$dataInicio' AND '$dataFim' AND unidade='CUC'"); 
    while ($reg_result = mysqli_fetch_array($cuc_query)) {
      $cuc[] = $reg_result['regs'];
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }

    $cuca_query = mysqli_query($conexao, "SELECT COUNT(*) AS regs FROM registros WHERE data_registro BETWEEN '$dataInicio' AND '$dataFim' AND unidade='CUCA'"); 
    while ($reg_result = mysqli_fetch_array($cuca_query)) {
      $cuca[] = $reg_result['regs'];
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }

    $cucst_query = mysqli_query($conexao, "SELECT COUNT(*) AS regs FROM registros WHERE data_registro BETWEEN '$dataInicio' AND '$dataFim' AND unidade='CUCST'"); 
    while ($reg_result = mysqli_fetch_array($cucst_query)) {
      $cucst[] = $reg_result['regs'];
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }

    $cus_query = mysqli_query($conexao, "SELECT COUNT(*) AS regs FROM registros WHERE data_registro BETWEEN '$dataInicio' AND '$dataFim' AND unidade='CUS'"); 
    while ($reg_result = mysqli_fetch_array($cus_query)) {
      $cus[] = $reg_result['regs'];
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }

    $cuso_query = mysqli_query($conexao, "SELECT COUNT(*) AS regs FROM registros WHERE data_registro BETWEEN '$dataInicio' AND '$dataFim' AND unidade='CUSO'"); 
    while ($reg_result = mysqli_fetch_array($cuso_query)) {
      $cuso[] = $reg_result['regs'];
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }

    $cut_query = mysqli_query($conexao, "SELECT COUNT(*) AS regs FROM registros WHERE data_registro BETWEEN '$dataInicio' AND '$dataFim' AND unidade='CUT'"); 
    while ($reg_result = mysqli_fetch_array($cut_query)) {
      $cut[] = $reg_result['regs'];
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }

    $ica_query = mysqli_query($conexao, "SELECT COUNT(*) AS regs FROM registros WHERE data_registro BETWEEN '$dataInicio' AND '$dataFim' AND unidade='ICA'"); 
    while ($reg_result = mysqli_fetch_array($ica_query)) {
      $ica[] = $reg_result['regs'];
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }

    $icb_query = mysqli_query($conexao, "SELECT COUNT(*) AS regs FROM registros WHERE data_registro BETWEEN '$dataInicio' AND '$dataFim' AND unidade='ICB'"); 
    while ($reg_result = mysqli_fetch_array($icb_query)) {
      $icb[] = $reg_result['regs'];
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }

    $iced_query = mysqli_query($conexao, "SELECT COUNT(*) AS regs FROM registros WHERE data_registro BETWEEN '$dataInicio' AND '$dataFim' AND unidade='ICED'"); 
    while ($reg_result = mysqli_fetch_array($iced_query)) {
      $iced[] = $reg_result['regs'];
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }

    $icen_query = mysqli_query($conexao, "SELECT COUNT(*) AS regs FROM registros WHERE data_registro BETWEEN '$dataInicio' AND '$dataFim' AND unidade='ICEN'"); 
    while ($reg_result = mysqli_fetch_array($icen_query)) {
      $icen[] = $reg_result['regs'];
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }

    $icj_query = mysqli_query($conexao, "SELECT COUNT(*) AS regs FROM registros WHERE data_registro BETWEEN '$dataInicio' AND '$dataFim' AND unidade='ICJ'"); 
    while ($reg_result = mysqli_fetch_array($icj_query)) {
      $icj[] = $reg_result['regs'];
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }

    $ics_query = mysqli_query($conexao, "SELECT COUNT(*) AS regs FROM registros WHERE data_registro BETWEEN '$dataInicio' AND '$dataFim' AND unidade='ICS'"); 
    while ($reg_result = mysqli_fetch_array($ics_query)) {
      $ics[] = $reg_result['regs'];
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }

    $icsa_query = mysqli_query($conexao, "SELECT COUNT(*) AS regs FROM registros WHERE data_registro BETWEEN '$dataInicio' AND '$dataFim' AND unidade='ICSA'"); 
    while ($reg_result = mysqli_fetch_array($icsa_query)) {
      $icsa[] = $reg_result['regs'];
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }

    $iemci_query = mysqli_query($conexao, "SELECT COUNT(*) AS regs FROM registros WHERE data_registro BETWEEN '$dataInicio' AND '$dataFim' AND unidade='IEMCI'"); 
    while ($reg_result = mysqli_fetch_array($iemci_query)) {
      $iemci[] = $reg_result['regs'];
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }

    $ifch_query = mysqli_query($conexao, "SELECT COUNT(*) AS regs FROM registros WHERE data_registro BETWEEN '$dataInicio' AND '$dataFim' AND unidade='IFCH'"); 
    while ($reg_result = mysqli_fetch_array($ifch_query)) {
      $ifch[] = $reg_result['regs'];
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }

    $ig_query = mysqli_query($conexao, "SELECT COUNT(*) AS regs FROM registros WHERE data_registro BETWEEN '$dataInicio' AND '$dataFim' AND unidade='IG'"); 
    while ($reg_result = mysqli_fetch_array($ig_query)) {
      $ig[] = $reg_result['regs'];
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }

    $ilc_query = mysqli_query($conexao, "SELECT COUNT(*) AS regs FROM registros WHERE data_registro BETWEEN '$dataInicio' AND '$dataFim' AND unidade='ILC'"); 
    while ($reg_result = mysqli_fetch_array($ilc_query)) {
      $ilc[] = $reg_result['regs'];
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }

    $ineaf_query = mysqli_query($conexao, "SELECT COUNT(*) AS regs FROM registros WHERE data_registro BETWEEN '$dataInicio' AND '$dataFim' AND unidade='INEAF'"); 
    while ($reg_result = mysqli_fetch_array($ineaf_query)) {
      $ineaf[] = $reg_result['regs'];
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }

    $itec_query = mysqli_query($conexao, "SELECT COUNT(*) AS regs FROM registros WHERE data_registro BETWEEN '$dataInicio' AND '$dataFim' AND unidade='IT'"); 
    while ($reg_result = mysqli_fetch_array($itec_query)) {
      $itec[] = $reg_result['regs'];
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }

    $naea_query = mysqli_query($conexao, "SELECT COUNT(*) AS regs FROM registros WHERE data_registro BETWEEN '$dataInicio' AND '$dataFim' AND unidade='NAEA'"); 
    while ($reg_result = mysqli_fetch_array($naea_query)) {
      $naea[] = $reg_result['regs'];
    // printf("fevereiro: %s", $reg_result["regs"]);
    // echo "<br>";
    }


  } 
}
// echo mysql_errno($conexao) . ": " . mysql_error($conexao). "\n";

?>