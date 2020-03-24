<?php

error_reporting(E_ALL);

require_once('Configuracoes.php');

//LIBS
require_once('libs/rotasPaginas/Rota.php');
require_once('libs/renderizadorPaginas/Render.php');
require_once('libs/tarefasAssincronas/TarefaAssincrona.php');

//CONTROLLERS
require_once('controller/InicialCtrl.php');

//ENTIDADES
require_once('entidade/SensorEntrada.php');

//MODALS
require_once('modal/Banco.php');
require_once('modal/SensorDao.php');
require_once('modal/SensorEntradaDao.php');

require_once('libs/rotasPaginas/rotas.php');

// $tarefa = [];
// $tarefa['nome'] = 'ler serial';
// $tarefa['tempo'] = 1;
// $tarefa['executar'] = 'Rota::run';
// $tarefa['parametro'] = '/';

// TarefaAssincrona::definir($tarefa);
// TarefaAssincrona::executar();

//ROTA PARA PAGINA INICIAL
Rota::run('/');