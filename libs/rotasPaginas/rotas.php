<?PHP

Rota::add('/',function(){
  InicialCtrl::index();
});

Rota::add('/get/sensor/data/hora',function(){
  InicialCtrl::getRegistroSensorPorDataHora($_GET['sensor'],$_GET['dataHora']);
},'get');

Rota::add('/get/sensor/todos',function(){
  InicialCtrl::getRegistroSensorTodos($_GET['sensor']);
},'get');

Rota::add('/set/sensor/bd',function(){
  InicialCtrl::setRegistroSensorBd();
},'get');

Rota::add('/apagar',function(){
  SensorEntradaCtrl::apagarRegistroSensorBd();
  echo('Registros apagados!');
});

Rota::pathNotFound(function($path){
  echo 'Erro 404 <br/>';
  echo 'Página '.$path.'" não encontrada!';
});

Rota::methodNotAllowed(function($path, $method){
  echo 'Error 405 <br/>';
  echo 'The requested path "'.$path.'" exists. But the request method "'.$method.'" is not allowed on this path!';
});