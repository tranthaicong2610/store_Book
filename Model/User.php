<?php
require 'database.php';
class User extends Database{
    public function add($username,$email,$password)
    {
        $sql="insert into users(username,email,password) values('$username','$email','$password') ";
        return $this->execute($sql);
    }
    //update user
    public function update($id,$username,$password,$email)
    {
        $sql="update users set 
        username='$username',
        email='$email',
        password='$password'
        where id='$id'
        ";
        return $this->execute($sql);
    }
    //delete user
    public function  delete($id)
    {
        $sql="delete from users where id ='$id'";
        return $this->execute($sql);
    }
    //lay id tu username vs password
    public function getLevel($username,$password)
    {
        $sql="select level from users where username='$username' and password='$password'";
        return $this->execute($sql);
    }
    
    public function findLogin($username,$password)
    {
        $sql="SELECT * FROM users
        WHERE username='$username' AND password='$password'";
        $data=array();
        $this->execute($sql);
        $num=mysqli_num_rows($this->execute($sql));
        if($num!=0)
        {
            $data=mysqli_fetch_array($this->execute($sql));
        }
        else $data=null;
        return $data;
    }
    

}




?>