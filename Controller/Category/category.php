<?php
include 'Model/Category.php';
$db=new Category;
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
    case 'list':
        {
            $table="category";
            $data=$db->getAllData($table);
            require_once('View/Category/list.php');
            break;
        }
    case  'add':
        {
            if(isset($_POST['add_cat']))
            {
                $name=$_POST['name'];
                

                if($db->add($name))
                {
                    header("Location:index.php?controller=category&action=add");
                }  
            }
            require_once('View/Category/add.php');
            break;
        }
    case 'edit':
        {
            $table="category";
            $id=$_GET['id'];
            $cat=$db->getDataID($table,$id);
            if(isset($_POST['edit_cat']))
            {
                $name=$_POST['name'];
                if($db->update($id,$name))
                {
                    header("Location:index.php?controller=category&action=list");
                }
            }
            require_once('View/Category/edit.php');
            break;
        }

    case 'delete':
        {
            $table='category';
            if(isset($_GET['id']))
            {

                $id=$_GET['id'];
                echo $id;
                if($db->delete($table,$id))
                {
                    header('Location:index.php?controller=category&action=list');
                }
            }
            require_once('View/Category/delete.php');
            break;
            
        }
     default :
    {
        require_once('View/Category/list.php');
            break;
    }
}