<?php

$config = new Configuracoes();

class Configuracoes{

    public function __construct(){

        define('DIRETORIO',dirname(dirname(__FILE__)));

        //BANCO DE DADOS
        define('USUARIO','admin');
        define('SENHA','');
        define('BANCO','zanon_serial');
        define('SERVIDOR','localhost');
    }
}
