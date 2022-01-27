<?php
require 'database.php';
class Category extends Database{
    public function add($name)
    {
        $sql="insert into category(cat_name) values('$name') ";
        return $this->execute($sql);
    }
    //update user
    public function update($id,$name)
    {
        $sql="update category set 
        cat_name='$name'
        where id='$id'
        ";
        return $this->execute($sql);
    }
    //delete user
    public function  delete($id)
    {
        $sql="delete from category where id ='$id'";
        return $this->execute($sql);
    }
    
    

}




?>