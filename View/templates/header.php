<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
           margin: 0;
           font-size: 30PX;

        }
        ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 25%;
        background-color: #1b2a47;
        position: fixed;
        height: 100%;
        overflow: auto;
          
        }
       a{
         top: 500px;
         right: 50px;
        font-size: 40PX;
        width: 60px;
         color: white;
         text-decoration: none;
         background-color: gray;
         
       }
       table {
      border-collapse: collapse;
      width: 100%;
      text-align:center;
      }

      th, td {
        text-align: left;
        padding: 8px;
      }

      tr:nth-child(even) {background-color: #f2f2f2;}
/* Style the header */
    .header {
        background-color: greenyellow;
        padding: 20px;
        text-align: center;
    }
    
    </style>
</head>
<body>
<div class="header">
  <h1>Trang quản lý Admin </h1>
</div>
<ul class="submenu-angle" aria-expanded="true">
<li><a title="Analytics" href="index.php?controller=category&action=list"><span class="mini-sub-pro">Category List</span></a></li>
  <li><a title="Widgets" href="index.php?controller=category&action=add"><span class="mini-sub-pro">Category Add</span></a></li>
  <li><a title="Product List" href="index.php?controller=product&action=list"><span class="mini-sub-pro">Product List</span></a></li>
  <li><a title="Product Edit" href="index.php?controller=product&action=add"><span class="mini-sub-pro">Product Add</span></a></li>
  <li><a title="Product Detail" href="product-detail.html"><span class="mini-sub-pro">Product Detail</span></a></li>
  <li><a title="Product Cart" href="product-cart.html"><span class="mini-sub-pro">Product Cart</span></a></li>
  <li><a title="Product Payment" href="product-payment.html"><span class="mini-sub-pro">Product Payment</span></a></li>

</ul>
  
  
</ul>