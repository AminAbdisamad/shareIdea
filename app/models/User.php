<?php
/* Model should be singular */
class User extends Database
{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    // Register Users 
    public function register($data)
    {
        //prepare data
        $this->db->query('INSERT INTO users (name,email,password) VALUES (:name , :email, :password)');

        //bind values
        $this->db->bind(':name',$data['name']);
        $this->db->bind(':email',$data['email']);
        $this->db->bind(':password',$data['password']);

        // execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
        

    }


    //Find User By Email
    public function findUserByEmail($email)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email',$email);
        $row = $this->db->result();

        //check if email found
        if($this->db->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

}