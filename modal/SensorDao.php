<?php

class SensorDao{

    public static function selecionarPorNome($nome){

        $sql = 'SELECT * FROM sensor WHERE nome=:NOME';
        return Banco::selecionar($sql, [':NOME'=>$nome]);
    }
}