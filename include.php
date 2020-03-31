<?php

require_once('Configuracoes.php');

//LIBS
require_once('libs/rotasPaginas/Rota.php');
require_once('libs/renderizadorPaginas/Render.php');
require_once('libs/tarefasAssincronas/TarefaAssincrona.php');
require_once('libs/phpSerial/PhpSerial.php');

//CONTROLLERS
require_once('controller/InicialCtrl.php');
require_once('controller/SensorEntradaCtrl.php');

//ENTIDADES
require_once('entidade/SensorEntrada.php');

//MODALS
require_once('modal/Banco.php');
require_once('modal/SensorDao.php');
require_once('modal/SensorEntradaDao.php');

require_once('libs/rotasPaginas/rotas.php');