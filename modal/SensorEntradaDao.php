<?php

class SensorEntradaDao{

    public static function selecionarPorSensorNome($sensorNome){

        $sql = 'SELECT se.* FROM sensorEntrada AS se 
                INNER JOIN sensor AS s
                ON s.id = se.sensorId 
                WHERE s.nome=:SENSOR_NOME';

        return Banco::selecionar($sql, [':SENSOR_NOME'=>$sensorNome], 'SensorEntrada');
    }

    public static function selecionarPorSensorNomeDataHora($sensorNome, $ultimaDataHora){

        $sql = 'SELECT se.* FROM sensorEntrada AS se 
                INNER JOIN sensor AS s
                ON s.id = se.sensorId 
                WHERE s.nome=:SENSOR_NOME
                AND se.dataHora >:DATA_HORA';

        $parametros = [':SENSOR_NOME'=>$sensorNome, ':DATA_HORA'=>$ultimaDataHora];

        return Banco::selecionar($sql, $parametros, 'SensorEntrada');
    }
}
