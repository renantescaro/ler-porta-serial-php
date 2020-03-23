<?PHP

error_reporting(E_ALL);

require_once('Configuracoes.php');
require_once('Route.php');
require_once('libs/renderizadorPaginas/Render.php');
require_once('controller/InicialCtrl.php');
require_once('modal/Banco.php');
require_once('modal/SensorDao.php');



Route::add('/',function(){
  InicialCtrl::index();
});

Route::add('/pessoa/salvar',function(){
  
  //$pessoaCtrl = new PessoaCtrl();

  //$pessoaCtrl->salvar($_POST);
}, 'post');

Route::add('/contact-form',function(){
  echo '<form method="post"><input type="text" name="test" /><input type="submit" value="send" /></form>';
},'get');

Route::add('/contact-form',function(){
  echo 'Hey! The form has been sent:<br/>';
  print_r($_POST);
},'post');

Route::add('/get-post-sample',function(){
	echo 'You can GET this page and also POST this form back to it';
	echo '<form method="post"><input type="text" name="input" /><input type="submit" value="send" /></form>';
	if(isset($_POST["input"])){
		echo 'I also received a POST with this data:<br/>';
		print_r($_POST);
	}
},['get','post']);

Route::add('/user/(.*)/edit',function($id){
  echo 'Edit user with id '.$id.'<br/>';
});

Route::add('/foo/([0-9]*)/bar',function($var1){
  echo $var1.' is a great number!';
});

Route::add('/(.*)/(.*)/(.*)/(.*)',function($var1,$var2,$var3,$var4){
  echo 'This is the first match: '.$var1.' / '.$var2.' / '.$var3.' / '.$var4.'<br/>';
});

Route::add('/this-route-is-defined',function(){
  echo 'You need to patch this route to see this content';
},'patch');

Route::pathNotFound(function($path){
  echo 'Erro 404 <br/>';
  echo 'Página '.$path.'" não encontrada!';
});

Route::methodNotAllowed(function($path, $method){
  echo 'Error 405 <br/>';
  echo 'The requested path "'.$path.'" exists. But the request method "'.$method.'" is not allowed on this path!';
});

Route::run('/');