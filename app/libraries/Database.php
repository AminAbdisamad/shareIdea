<?php 
/** 
 * Create database
 * Create prepared statements
 * Bind values & returns rows and colums
 */
class Database
{
// Database Params
    private $host = HOST;
    private $dbName = DBNAME;
    private $userName = DBUSER;
    private $password = DBPASS;
// Connection variables
    private $pdo;
    private $stmt;
    private $err;

    public function __construct()
    {
        $sdn = 'mysql:host='.$this->host.';dbname='.$this->dbName;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION
        );
        //Create PDO Instance 
        try
        {
            $this->pdo = new PDO ($sdn,$this->userName, $this->password,$options);
        }
        // Threw error if connection is wrong
        catch(PDOException $e) 
        {
            $this->err = $e->getMessage();
            echo $this -> err;
        }


    }
    public function query($sql)
    {
        $this->stmt = $this->pdo->prepare($sql);
    }
    public function bind($param, $value, $type=null)
    {
        if(is_null($type)){
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param,$value,$type);
    }

// execute prepared statements
    public function execute(){
        return $this->stmt->execute();
    }
    // get results as array of objects 
    public function results(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);       
    }
      // get singe result as object 
      public function result(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);       
    }
    //get row count 
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}