<?php

class SensorEntradaCtrl{

    public static function apagarRegistroSensorBd(){

        SensorEntradaDao::apagarTudo();
    }
}