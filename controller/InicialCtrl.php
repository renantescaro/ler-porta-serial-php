<?php

class InicialCtrl{

    public static function index(){

        $variaveis = [];
        $variaveis['titulo'] = 'Gráfico sensor temperatura';
        $variaveis['pagina'] = '';

        Render::pagina('view/inicial/index.php', $variaveis);
    }
    
    //ROTA /get/sensor/data/hora
    public static function getRegistroSensorPorDataHora($nomeSensor, $dataHora){

        $dados = SensorEntradaDao::selecionarPorSensorNomeDataHora($nomeSensor, $dataHora);
        echo(json_encode($dados, true));
    }
    
    //ROTA /get/sensor/todos
    public static function getRegistroSensorTodos($nomeSensor){

        $dados = SensorEntradaDao::selecionarPorSensorNome($nomeSensor);
        echo(json_encode($dados, true));
    }

    //ROTA /set/sensor/bd
    public static function setRegistroSensorBd(){
        
        $serial = new PhpSerial;
        $serial->lerSerialGravarBd();
    }
}