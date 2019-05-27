<?php

// Conexão com o Banco de Dados do FICAT
require __DIR__ . '/../assets/php/conexao.php';

// Conexão com as consultas ao banco de dados de Ano x Mês
include __DIR__ . '/../assets/php/consulta_poranoxmes.php';

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
td { vertical-align: top; }
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
<td width="100%"><span style="font-weight: bold; font-size: 14pt;"><img width="50%" height="25%" src="../assets/imgs/ficat_logo.png"></td>
<td width="100%" style="text-align: right;"><img width="25%" height="25%" src="../assets/imgs/bc_logo.png"></td>
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
<td style="font-size: 14pt;" width="45%"><b>Unidade Acadêmica</b></td>
<td style="font-size: 14pt;" width="15%"><b>Sigla</b></td>
<td style="font-size: 14pt;" width="10%"><b>Quantidade de Registros</b></td>
</tr>
</thead>
<tbody>
<!-- ITEMS HERE -->';

$ca_row = '<tr><td align="center">Campus Universitário de Abaetetuba</td>
<td align="center">CA</td>
<td align="center">'.join($ca, ',').'</td></tr>';

$caa_row = '<tr><td align="center">Campus Universitário de Altamira</td>
<td align="center">CAA</td>
<td align="center">'.join($caa, ',').'</td></tr>';

$can_row = '<tr><td align="center">Campus Universitário de Ananindeua</td>
<td align="center">CAN</td>
<td align="center">'.join($can, ',').'</td></tr>';

$cb_row = '<tr><td align="center">Campus Universitário de Bragança</td>
<td align="center">CB</td>
<td align="center">'.join($cb, ',').'</td></tr>';

$cub_row = '<tr><td align="center">Campus Universitário de Breves</td>
<td align="center">CUB</td>
<td align="center">'.join($cub, ',').'</td></tr>';

$cuc_row = '<tr><td align="center">Campus Universitário de Cametá</td>
<td align="center">CUC</td>
<td align="center">'.join($cuc, ',').'</td></tr>';

$cuca_row = '<tr><td align="center">	
Campus Universitário de Capanema</td>
<td align="center">CUCA</td>
<td align="center">'.join($cuca, ',').'</td></tr>';

$cucst_row = '<tr><td align="center">Campus Universitário de Castanhal</td>
<td align="center">CUCST</td>
<td align="center">'.join($cucst, ',').'</td></tr>';

$cus_row = '<tr><td align="center">Campus Universitário de Salinópolis</td>
<td align="center">CUS</td>
<td align="center">'.join($cus, ',').'</td></tr>';

$cuso_row = '<tr><td align="center">Campus Universitário de Soure</td>
<td align="center">CUSO</td>
<td align="center">'.join($cuso, ',').'</td></tr>';

$cut_row = '<tr><td align="center">Campus Universitário de Tucuruí</td>
<td align="center">CUT</td>
<td align="center">'.join($cut, ',').'</td></tr>';

$ineaf_row = '<tr><td align="center">Instituto Amazônico de Agriculturas Familiares</td>
<td align="center">INEAF</td>
<td align="center">'.join($ineaf, ',').'</td></tr>';

$icb_row = '<tr><td align="center">Instituto de Ciências Biológicas</td>
<td align="center">ICB</td>
<td align="center">'.join($icb, ',').'</td></tr>';

$ica_row = '<tr><td align="center">Instituto de Ciências da Arte</td>
<td align="center">ICA</td>
<td align="center">'.join($ica, ',').'</td></tr>';

$iced_row = '<tr><td align="center">Instituto de Ciências da Educação</td>
<td align="center">ICED</td>
<td align="center">'.join($iced, ',').'</td></tr>';

$ics_row = '<tr><td align="center">	
Instituto de Ciências da Saúde</td>
<td align="center">ICS</td>
<td align="center">'.join($ics, ',').'</td></tr>';

$icen_row = '<tr><td align="center">	
Instituto de Ciências Exatas e Naturais</td>
<td align="center">ICEN</td>
<td align="center">'.join($icen, ',').'</td></tr>';

$icj_row = '<tr><td align="center">	
Instituto de Ciências Jurídicas</td>
<td align="center">ICJ</td>
<td align="center">'.join($icj, ',').'</td></tr>';

$icsa_row = '<tr><td align="center">	
Instituto de Ciências Sociais Aplicadas</td>
<td align="center">ICSA</td>
<td align="center">'.join($icsa, ',').'</td></tr>';

$iemci_row = '<tr><td align="center">	
Instituto de Educação Matemática e Científica</td>
<td align="center">IEMCI</td>
<td align="center">'.join($iemci, ',').'</td></tr>';

$ifch_row = '<tr><td align="center">Instituto de Filosofia e Ciências Humanas</td>
<td align="center">IFCH</td>
<td align="center">'.join($ifch, ',').'</td></tr>';

$ig_row = '<tr><td align="center">	
Instituto de Geociências</td>
<td align="center">IG</td>
<td align="center">'.join($ig, ',').'</td></tr>';

$ilc_row = '<tr><td align="center">	
Instituto de Letras e Comunicação</td>
<td align="center">ILC</td>
<td align="center">'.join($ilc, ',').'</td></tr>';

$itec_row = '<tr><td align="center">Instituto de Tecnologia</td>
<td align="center">ITEC</td>
<td align="center">'.join($itec, ',').'</td></tr>';

$naea_row = '<tr><td align="center">Núcleo de Altos Estudos Amazônicos</td>
<td align="center">NAEA</td>
<td align="center">'.join($naea, ',').'</td></tr>';

$linhas_tabela = $ca_row.$caa_row.$can_row.$cb_row.$cub_row.$cuc_row.$cuca_row.$cucst_row.$cus_row.$cuso_row.$cut_row.$ineaf_row.$icb_row.$ica_row.$iced_row.$ics_row.$icen_row.$icj_row.$icsa_row.$iemci_row.$ifch_row.$ig_row.$ilc_row.$itec_row.$naea_row;

$parte4 = '<tr>
<!-- END ITEMS HERE -->
<tr>
<td class="blanktotal" colspan="1" rowspan="2"></td>
<td class="totals"><b>TOTAL:<b></td>
<td class="totals cost"><b>'.join($total_anoxmes, ',').'</b></td>
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
$mpdf->SetTitle("Relatório FICAT - Biblioteca Central");
$mpdf->SetAuthor("SEDEPTI");
// $mpdf->SetWatermarkText("Biblioteca Central");
// $mpdf->showWatermarkText = true;
// $mpdf->watermark_font = 'DejaVuSansCondensed';
// $mpdf->watermarkTextAlpha = 0.1;

$mpdf->SetDisplayMode('fullpage');
$mpdf->SetHeader('{PAGENO}');
$mpdf->WriteHTML($html);
$mpdf->Output();