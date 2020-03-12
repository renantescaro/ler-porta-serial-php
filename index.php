<?PHP

error_reporting(E_ALL);

include('Route.php');
require_once('libs/renderizadorPaginas/Render.php');
require_once('modal/Banco.php');
require_once('controller/InicialCtrl.php');

Route::add('/',function(){
  InicialCtrl::index();
});

Route::add('/pessoa/salvar',function(){
  
  $pessoaCtrl = new PessoaCtrl();

  $pessoaCtrl->salvar($_POST);
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

// Route with regexp parameter
// Be aware that (.*) will match / (slash) too. For example: /user/foo/bar/edit
// Also users could inject mysql-code or other untrusted data if you use (.*)
// You should better use a saver expression like /user/([0-9]*)/edit or /user/([A-Za-z]*)/edit
Route::add('/user/(.*)/edit',function($id){
  echo 'Edit user with id '.$id.'<br/>';
});

// Accept only numbers as parameter. Other characters will result in a 404 error
Route::add('/foo/([0-9]*)/bar',function($var1){
  echo $var1.' is a great number!';
});

// Crazy route with parameters
Route::add('/(.*)/(.*)/(.*)/(.*)',function($var1,$var2,$var3,$var4){
  echo 'This is the first match: '.$var1.' / '.$var2.' / '.$var3.' / '.$var4.'<br/>';
});

// 405 test
Route::add('/this-route-is-defined',function(){
  echo 'You need to patch this route to see this content';
},'patch');

// Add a 404 not found route
Route::pathNotFound(function($path){
  echo 'Error 404 <br/>';
  echo 'The requested path "'.$path.'" was not found!';
});

// Add a 405 method not allowed route
Route::methodNotAllowed(function($path, $method){
  echo 'Error 405 <br/>';
  echo 'The requested path "'.$path.'" exists. But the request method "'.$method.'" is not allowed on this path!';
});

// Run the Router with the given Basepath
// If your script lives in the web root folder use a / or leave it empty
Route::run('/');