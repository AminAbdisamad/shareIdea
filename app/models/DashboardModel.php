<?php
class DashboardModel extends Database
{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    //get all the posts
    public function getPosts(){
        $this->db->query('SELECT * ,
                          posts.id as postId,
                          users.id as userId,
                          posts.created_at as postCreated 
                          FROM posts INNER JOIN users ON posts.user_id = users.id ORDER BY posts.created_at DESC');
        $results = $this->db->results();
        return $results;
        
    }
    //get single post
    public function getSinglePost($postId)
    {
        $this->db->query(
                        'SELECT * FROM posts WHERE id = :id'
        );
        $this->db->bind('id',$postId);
       $result = $this->db->result();
       return $result;

    }

    public function AddpostToDB($data){
       

        // Prepare statement
        $this->db->query('INSERT INTO posts (user_id,body) VALUES (:user_id, :body)');
        //bind values
        $this->db->bind(':user_id',$data['userId']);
        $this->db->bind(':body',$data['post']);
        //execute 
        if($this->db->execute()){
            
            return true;
        }else{
            return false;
        }
        

    }
    //find people 
    public function findPeople(){
        $this->db->query('SELECT * FROM users');
        $rows = $this->db->results();
        return $rows;
}
//delete post
public function deletePostById($id){
    $this->db->query('DELETE FROM posts WHERE id =:id');
    $this->db->bind('id',$id);
    $row = $this->db->execute();
    if($row){
        return true;
    }
    return false;
}


}
