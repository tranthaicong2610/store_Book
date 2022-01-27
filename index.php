
<?php



if(isset($_GET['controller']))
{
    $controller=$_GET['controller'];
}
else 
{
    $controller='';
}
switch($controller)
{
    case 'user':
    {
        require_once('Controller/User/user.php');
        break;

    } 
    case 'product':
        {
            require_once('Controller/Product/product.php');
            break;
        }
    case 'category':
        {
            require_once('Controller/Category/category.php');
            break;
        }
}

?>
