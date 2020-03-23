<?php

class SensorEntrada{

    private $id;
    private $valor;
    private $dataHora;
    private $sensor;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }

    public function getDataHora(){
        return $this->dataHora;
    }

    public function setDataHora($dataHora){
        $this->dataHora = $dataHora;
    }

    public function getSensor(){
        return $this->sensor;
    }

    public function setSensor($sensor){
        $this->sensor = $sensor;
    }
}