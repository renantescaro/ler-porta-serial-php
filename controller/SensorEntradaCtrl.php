<?php

class SensorEntradaCtrl{

    //ROTA /apagar
    public static function apagarRegistroSensorBd(){

        SensorEntradaDao::apagarTudo();
    }
}