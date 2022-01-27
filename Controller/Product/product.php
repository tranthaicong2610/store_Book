<?php
include 'Model/Product.php';
$db= new Product;
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
            $table="products";
            $data=$db->getAllData($table);
            require_once('View/Product/list.php');
            break;
        }
    case  'add':
        {
            if(isset($_POST['add_product']))
            {
                $name=$_POST['name'];
                $status=$_POST['status'];
                $purchases=$_POST['purchases'];
                $sales=$_POST['sales'];
                $stock=$_POST['stock'];
                $price=$_POST['price'];
                $image="tets";
                $db->add($name,$image,$status,$purchases,$sales,$stock,$price);
                
                
            }
            require_once('View/Product/add.php');
            break;
        }
    case 'edit':
        {
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
                $tblTable='products';
                $dataID=$db->getDataId($tblTable,$id);
                
            }
            require_once('View/Product/edit.php');
            break;
        }

    case 'delete':
        {
            
            if(isset($_POST['delete']))
            {
                $id=$_GET['id'];
                echo $id;
                if($db->delete($id))
                    {
                        header("Location:index.php?controller=product&action=add");
                    }
                
            }
            require_once('View/Product/delete.php');
            break;
        }
     default :
    {
        require_once('View/Product/list.php');
        break;
    }
}