<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafico Linha Porta Serial</title>
</head>
<body>
    <div>
        <div style="text-align: center;">
            <h3><?=$variaveis['titulo']?></h3>
        </div>
        <div>
            <h4><?=$variaveis['pagina']?></h4>
        </div>
    </div>

    <canvas id="canvasGraficoLinha"></canvas>

    <script src="/libs/js/chart.js"></script>
    <script src="/view/inicial/script.js"></script>
</body>
</html>