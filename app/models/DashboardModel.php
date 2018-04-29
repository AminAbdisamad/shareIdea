<?php
class DashboardModel extends Database
{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function getPosts(){
        $this->db->query('SELECT * ,
                          posts.id as postId,
                          users.id as userId,
                          posts.created_at as postCreated 
                          FROM posts INNER JOIN users ON posts.user_id = users.id ORDER BY posts.created_at DESC');
        $results = $this->db->results();
        return $results;
        
    }
}
/* 
SELECT * ,
                          posts.id as postId,
                          users.id as userId
                          FROM posts INNER JOIN users ON posts.user_id = users.id ORDER BY posts.created_at DESC
*/