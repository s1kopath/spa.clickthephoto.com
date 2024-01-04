<?php
class DbConnection{

    private $host = 'localhost';
    private $username = 'clickthep_profile_user';
    private $password = 'pro@pass_20';
    private $database = 'clickthep_profile';
    
    protected $connection;
    
    public function __construct(){

        if (!isset($this->connection)) {
            
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
            
            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
        
        return $this->connection;
    }
}
?>