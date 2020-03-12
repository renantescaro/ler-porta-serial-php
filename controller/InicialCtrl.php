<?php

class InicialCtrl{

    public static function index(){

        $variaveis = [];
        $variaveis['titulo'] = 'Ler Serial';
        $variaveis['pagina'] = 'aqui teste';

        // APENAS TESTE
        $sql = 'SELECT * FROM produtos';
        $dados = Banco::selecionar($sql);

        var_dump($dados);

        //Render::pagina('view/inicial.php', $variaveis);
    }
}