<?php
include 'Model/User.php';
$db=new User;
$db->connect();

if(isset($_GET['action']))
{
    $action=$_GET['action'];
}
else 
{
    $action='';
}
$thanhcong=array();
switch($action)
{
    case 'login':
        {
            if(isset($_POST['login']))
            {
                $username=$_POST['username'];
                $password=$_POST['password'];
                echo $username;
                if($db->findLogin($username,$password)!=null)
                {
                    $level=$db->getLevel($username,$password);
                    if($level==1)
                    {
                        header('Location:index.php?controller=product&action=list');
                        
                    }
                    else{
                        require_once('View/home.php');
                    }
                }
                
            }
            require_once('View/User/login.php');
            break;
        }
    case  'add':
        {
            if(isset($_POST['add_user']))
            {
                $username=$_POST['username'];
                $password=$_POST['password'];
                $email=$_POST['email'];

                if($db->add($username,$email,$password))
                {
                    header("Location:index.php?controller=user&action=login");
                }  
            }
            require_once('View/User/add.php');
            break;
        }
    case 'edit':
        {
            require_once('View/User/edit.php');
            break;
        }

    case 'delete':
        {

            
        }
     default :
    {
        require_once('View/User/login.php');
            break;
    }
}