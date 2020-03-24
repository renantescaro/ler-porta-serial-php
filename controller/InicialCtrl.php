<?php

class InicialCtrl{

    /**
     * 
     */
    public static function index(){

        $variaveis = [];
        $variaveis['titulo'] = 'Ler Serial';
        $variaveis['pagina'] = 'aqui teste';

        Render::pagina('view/inicial/index.php', $variaveis);
    }

    
    public static function getRegistroSensorPorDataHora($nomeSensor, $dataHora){

        $dados = SensorEntradaDao::selecionarPorSensorNomeDataHora($nomeSensor, $dataHora);
        echo(json_encode($dados, true));
    }
    
    public static function getRegistroSensorTodos($nomeSensor){

        $dados = SensorEntradaDao::selecionarPorSensorNome($nomeSensor);
        echo(json_encode($dados, true));
    }
}