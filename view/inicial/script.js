
var ctx = document.getElementById('canvasGraficoLinha').getContext('2d')
var chart 

setDadosSensor()

getTodosDadosSensor()

setInterval(
    function(){

        indexUltimoRegistro = (chart.data.labels.length)-1
        ultimaDataHora = chart.data.labels[indexUltimoRegistro]

        var get = new XMLHttpRequest()
        get.open("GET", "/get/sensor/data/hora?sensor=potenciometro_1&dataHora="+ultimaDataHora, true)
        get.send()
        get.onreadystatechange = function(){
            
            if(get.readyState == 4 && get.status == 200){
                
                dadosSensor = JSON.parse(get.responseText)

                if(dadosSensor.length > 0){
                    atualizarGrafico(dadosSensor[0].valor, dadosSensor[0].dataHora)
                }
            }
        }
    },2000
)
    
function getTodosDadosSensor(){
    var get = new XMLHttpRequest()
    get.open("GET", "/get/sensor/todos?sensor=potenciometro_1", true)
    get.send()
    get.onreadystatechange = function(){
        if(get.readyState == 4 && get.status == 200){
            montarGrafico(get.responseText)
        }
    }
}

function montarGrafico(retornoJson){
    
    retorno = JSON.parse(retornoJson)

    dataHoras = []
    retorno.forEach((e) => {
        dataHoras.push(e.dataHora)
    })

    valores = []
    retorno.forEach((e) => {
        valores.push(e.valor)
    })

    chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: dataHoras,
            datasets: [{
                label: 'Temperatura por Data Hora',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: valores
            }]
        },
        options: {}
    })
}

function atualizarGrafico(valorLinha, dataHoraLinha){
    
    chart.data.datasets[0].data.push(valorLinha)
    chart.data.labels.push(dataHoraLinha)
    chart.update()
}

function setDadosSensor(){

    setInterval(
        function(){
            var get = new XMLHttpRequest()
            get.open("GET", "/set/sensor/bd", true)
            get.send()
            get.onreadystatechange = function(){
                if(get.readyState == 4 && get.status == 200){
                    //console.log('setDados ok')
                }
            }
        },
        3000
    )
}