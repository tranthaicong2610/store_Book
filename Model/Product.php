<?php
require 'database.php';
class Product extends Database{
    public function add($product_tittle,$image,$status,$product_purchases,
    $product_sales,$product_stock,$product_price)
    {
        $sql="insert into products(product_tittle,image,status,product_purchases,
        product_sales,product_stock,product_price) values('$product_tittle','$image','$status','$product_purchases',
       '$product_sales','$product_stock','$product_price') ";
        return $this->execute($sql);
    }
    //update product
    public function update($id,$product_tittle,$image,$status,$product_purchases,
    $product_sales,$product_stock,$product_price)
    {
        $sql="update products set 
        product_tittle='$product_tittle',
        image='$image',
        status='$status',
        product_purchases='$product_purchases',
        product_sales='$product_sales',
        product_stock='$product_stock',
        product_price ='$product_price'
        where productId='$id'
        ";
        return $this->execute($sql);
    }
    //delete product
    public function  delete($id)
    {
        $sql="delete from products where productId ='$id'";
        return $this->execute($sql);
    }
    
    

}




?>