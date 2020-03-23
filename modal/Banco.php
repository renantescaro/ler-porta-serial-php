<?PHP

error_reporting(E_ALL);

class Banco extends PDO{
    
    private static $conexao;

    private static function conectar(){
        try{
            self::$conexao = new PDO('mysql:host='.SERVIDOR.';dbname='.BANCO, USUARIO, SENHA);
            self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $error){
            echo 'Erro Conexão: ' . $error->getMessage();
        }
    }

    public static function selecionar(string $query, array $parametros = []){
        $stmt = self::executar($query, $parametros);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function executar(string $query, array $parametros = []){
        self::conectar();
        $stmt = self::$conexao->prepare($query);
        self::setParametros($stmt, $parametros);
        $stmt->execute();

        return $stmt;
    }

    private static function setParametros($statement, $parametros = array()){
        foreach ($parametros as $chave => $parametro){
            self::setParametro($statement, $chave, $parametro);
        }
    }

    private static function setParametro($statement, $chave, $parametro){
        $statement->bindparam($chave, $parametro);
    }
}