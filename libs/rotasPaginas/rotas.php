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

Rota::pathNotFound(function($path){
  echo 'Erro 404 <br/>';
  echo 'Página '.$path.'" não encontrada!';
});

Rota::methodNotAllowed(function($path, $method){
  echo 'Error 405 <br/>';
  echo 'The requested path "'.$path.'" exists. But the request method "'.$method.'" is not allowed on this path!';
});



/*
Rota::add('/contact-form',function(){
  echo 'Hey! The form has been sent:<br/>';
  print_r($_POST);
},'post');

Rota::add('/get-post-sample',function(){
	echo 'You can GET this page and also POST this form back to it';
	echo '<form method="post"><input type="text" name="input" /><input type="submit" value="send" /></form>';
	if(isset($_POST["input"])){
		echo 'I also received a POST with this data:<br/>';
		print_r($_POST);
	}
},['get','post']);

Rota::add('/user/(.*)/edit',function($id){
  echo 'Edit user with id '.$id.'<br/>';
});

Rota::add('/foo/([0-9]*)/bar',function($var1){
  echo $var1.' is a great number!';
});

Rota::add('/(.*)/(.*)/(.*)/(.*)',function($var1,$var2,$var3,$var4){
  echo 'This is the first match: '.$var1.' / '.$var2.' / '.$var3.' / '.$var4.'<br/>';
});

Rota::add('/this-route-is-defined',function(){
  echo 'You need to patch this route to see this content';
},'patch');

*/