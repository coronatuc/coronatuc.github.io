<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Coronavírus no Pará</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
		google.charts.load('current', {'packages':['corechart'], 'language': 'pt-br'});
		google.charts.setOnLoadCallback(desenharGraficodeLinhas);
function desenharGraficodeLinhas() {

    var dados = new google.visualization.Query('https://docs.google.com/spreadsheets/d/1CzMMxz-h5-aevwI7DkehnDAIuVLz26EsA7vySuoqqmI/gviz/tq?range=A1:C5000');

    dados.send(processaDados);

function processaDados (resultado) {

      var tabela = resultado.getDataTable();
			var options = {
				title: "Gráfico de casos de COVID-19 no Pará",
				subtitle: "saad",
				legend: { position: 'right' }
			};
      var grafico = new google.visualization.LineChart(document.getElementById('graficoCorona'));
    grafico.draw(tabela, options);
    }
}
</script>
<style type="text/css">
.text{
	text-align: center;
}
#graficoCorona{
	margin-left: 40px;
}
</style>
</head>
<body>
<?php 
$hoje = date('Y-m-d');
$inicio = '2020-03-18';

$dias =  date("d", strtotime($hoje) - strtotime($inicio));
?>

  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="https://facebook.com/coronatuc" target="_blank">@coronatuc</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      </button>
      <div>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
          	
          </li>
          <li class="nav-it2em">
            <span class="nav-l2ink" style="color: white;" href="#"><?php echo $dias; ?> dias desde o primeiro caso</span>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div class="container-fluid">
<div id="graficoCorona" style="width: 90%; height: 600px;"></div>
<div class="text">FONTE: Secretaria de Saúde do Estado do Pará</div>
</div>
</body>
</html>