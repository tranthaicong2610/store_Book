<?php
class Database{
    private  $hostname = 'localhost';
    private  $username='root';
    private $password='';
    private $port='3308';
    private $nameDB='store_book';
    private $conn=null; 
    private $result=null;
    
    public function connect()
    {
        $this->conn=new mysqli($this->hostname,$this->username,$this->password,$this->nameDB,
        $this->port);
        if($this->conn->connect_error)
        {
            echo "connect fail ";
            exit();
        }
        else 
        {
            mysqli_set_charset($this->conn,'utf8');
        }
        return $this->conn;
    }
    //thuc hien cau lenh truy van 
    public function execute($sql)
    {
        $this->result=$this->conn->query($sql);
        return $this->result;
    }
    //lay du lieu
    public function getData()
    {
        $data=array();
        if($this->result)
        {
            $data=mysqli_fetch_array($this->result);

        }
        else $data=null;
        return $data;
    }
    //lay du lieu theo id 
    public function  getDataID($table,$id)
    {
        $sql="select * from $table where id='$id'";
        $this->execute($sql);

        if($this->num_rows()!=0)
        {
            $data=mysqli_fetch_array($this->result);

        }
        else $data='';
        return $data;

    }
    // lay toan bo du lieu 

    public function getAllData($table)
    {
        $data=array();
        $sql="select * from $table ";
        $this->execute($sql);
        if($this->num_rows()==0)
        {
            $data=null;
        }
        else {
            while($row=$this->getData())
            {
                $data[]=$row;
            }
        }
        return $data;
    }
     //dem so ban ghi 
     public function num_rows()
    {
        if($this->result)
        {
            $num=mysqli_num_rows($this->result);
        }
        else 
        {
            $num=0;
        }
        return $num;
    }
     // find user login
    
    

}

?>