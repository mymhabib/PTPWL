<?php


class Login_model{
    // use Session;
    private $table='user';
    private $db;

    public function __construct()
    {
        $this->db=new Database;
    }

    public function login($username, $password){
        $this->db->query('SELECT * from user where username = :username');

        $this->db->bind(':username', $username); 
        $row = $this->db->singleLogin();
        $passwordCheck = !empty($row) ? $row->password:'';
        if ($password == $passwordCheck){
            return $row;
        } else {
            return false;
        }
    }


}


?>