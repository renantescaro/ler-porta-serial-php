<?php

class InicialCtrl{

    public static function index(){

        $variaveis = [];
        $variaveis['titulo'] = 'Ler Serial';
        $variaveis['pagina'] = 'aqui teste';

        // APENAS TESTE
        $sensor = new SensorDao();
        $dados = $sensor->selecionarPorNome('potenciometro_1');
    
        var_dump($dados);

        //Render::pagina('view/inicial.php', $variaveis);
    }
}