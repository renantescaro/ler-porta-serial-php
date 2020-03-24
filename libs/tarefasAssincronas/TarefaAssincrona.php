<?php

class TarefaAssincrona{

    private static $tarefas;

    public static function definir($tarefa){
        self::$tarefas[] = $tarefa;
    }

    public static function executar(){

        forEach(self::$tarefas as $tarefa){
            var_dump($tarefa);
        }
    }
}