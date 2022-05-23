<?php


class User_model{
    
    private $table='user';
    private $db;

    public function __construct()
    {
        $this->db=new Database;
    }

    
    public function tambahDataUser($data) {
        $query="INSERT INTO user VALUES(NULL,:username,:password)";
        $this->db->query($query);
        $this->db->bind(':username',$data['username']);
        $this->db->bind(':password',$data['password']);
        $this->db->execute(); 
        return $this->db->rowCount();
    }

    public function findUserByUsername($username){
        $query = "SELECT * FROM user WHERE username = :username";
        $this->db->query($query);
        $this->db->bind(':username', $username); 
        $this->db->execute(); 
        return $this->db->rowCount();
    }

    // public function check_user($data){
    //     $query = "SELECT * FROM user WHERE email = :email";
    //     $this->db->query($query);
    //     $this->db->bind('email',$data['email']);
    //     $this->db->execute();

    //     return $this->db->rowCount();
        
    // }
    

}


?>