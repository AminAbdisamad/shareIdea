<?php
class DashboardModel
{
    public function __construct(){
        $this->db = new Database;
    }
    public function displayPosts(){
        $this->db->query('SELECT * FROM posts');
        
    }
}