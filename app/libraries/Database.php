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


}