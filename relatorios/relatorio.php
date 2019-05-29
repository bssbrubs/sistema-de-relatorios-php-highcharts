<?php

// Conexão com o Banco de Dados
require __DIR__ . '/../php/conexao.php';

// Conexão com as consultas
include __DIR__ . '/../php/busca_periodo/consultas.php';


$parte1 = '<!DOCTYPE html>
<html lang="pt-br">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
body {font-family: sans-serif;
	font-size: 10pt;
}
p {	margin: 0pt; }
table.items {
	border: 0.1mm solid #000000;
}
td { vertical-align: middle; }
.items td {
	border-left: 0.1mm solid #000000;
	border-right: 0.1mm solid #000000;
	border: 0.1mm solid #000000;
	border-top: 0.1mm solid #000000;
	border-right: 0.1mm solid #000000;
}
table thead td { background-color: #EEEEEE;
	text-align: center;
	border: 0.1mm solid #000000;
	
}

.items td.blanktotal {
	background-color: #EEEEEE;
	border: 0.1mm solid #000000;
	background-color: #FFFFFF;
	border: 0mm none #000000;
	border-top: 0.1mm solid #000000;
	border-right: 0.1mm solid #000000;
}
.items td.totals {
	text-align: right;
	border: 0.1mm solid #000000;
}
.items td.cost {
	text-align: "." center;
}
</style>
</head>
<body>
<!--mpdf
<htmlpageheader name="myheader">
<table width="100%"><tr>
<td width="100%"><span style="font-weight: bold; font-size: 14pt;">Sistema de Relatório</td>
<td width="100%" style="text-align: right;">Insira o Logo</td>
</tr>
</table>
</htmlpageheader>
<htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #000000; font-size: 9pt; text-align: center; padding-top: 3mm; ">
Página {PAGENO} de {nb}
</div>
</htmlpagefooter>
<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />
mpdf-->';
$parte2 = '<div style="text-align: right">'.$registro_source.'</div>';

$parte3 = '<div style="text-align: right">
<br />
<table class="items" width="100%" style="font-size: 12pt; border-collapse: collapse; " cellpadding="8">
<thead>
<tr>
<td style="font-size: 14pt;" width="45%"><b>Tipo</b></td>
<td style="font-size: 14pt;" width="10%"><b>Quantidade de Registros</b></td>
</tr>
</thead>
<tbody>
<!-- ITEMS HERE -->';

$tipo_row = '<tr><td align="center">Registro, Tipo 1</td>
<td align="center">'.join($tipo, ',').'</td></tr>';

$tipo2_row = '<tr><td align="center">Registro, Tipo 2</td>
<td align="center">'.join($tipo2, ',').'</td></tr>';

$linhas_tabela = $tipo_row.$tipo2_row;

$parte4 = '<tr>
<!-- END ITEMS HERE -->
<tr>
<td class="totals"><b>TOTAL:<b></td>
<td class="totals cost"><b><center>'.$total_per_int.'</center></b></td>
</tr>
<tr>
<td class="totals"><b>MÉDIA DE REGISTROS NO PERIODO:<b></td>
<td class="totals cost"><b>'.$total_per_media.'</b></td>
</tr>
</tbody>
</table>
</body>';

$parte5 = ' </html>';

$html = ''.$parte1.$parte2.$parte3.$linhas_tabela.$parte4.$parte5;

$path = (getenv('MPDF_ROOT')) ? getenv('MPDF_ROOT') : __DIR__;
require_once $path . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf([
	'margin_left' => 20,
	'margin_right' => 15,
	'margin_top' => 48,
	'margin_bottom' => 25,
	'margin_header' => 10,
	'margin_footer' => 10
]);
$mpdf->SetProtection(array('print'));
$mpdf->SetTitle("Relatório");
$mpdf->SetAuthor("bssbrubs");
$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML($html);
$mpdf->Output();