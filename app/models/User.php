<?php
/* Model should be singular */
class User extends Database
{
    private $db;
    public function __construct(){
        $this->db = new Database;
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