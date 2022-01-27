<?php
include_once('./View/templates/header.php');
?>
<div style="margin-left:25%;padding:1px 16px;height:1000px;">
<table style="text-align:center;">
    <tr>
      <th>product Name</th>
      <th>image</th>
      <th>status</th>
      <th>product_purchases</th>
      <th>	product_sales	</th>
      <th>product_stock		</th>
      <th>product_price</th>
      <th>Action</th>
    </tr>
    <?php  foreach($data as $item){ ?>
    <tr>
      <td><?php  echo $item['product_tittle']?>  </td>
      <td>Johnson</td>
      <td><?php  echo $item['status']?> </td>
      <td><?php  echo $item['product_purchases']?> </td>
      <td><?php  echo $item['product_sales']?> </td>
      <td><?php  echo $item['product_stock']?> </td>
      <td><?php  echo $item['product_price']?> </td>
      <td>
      <form method="post" action="">
                        <input class="test te1" onclick="window.location = 'index.php?controller=product&action=edit&id=<?php echo $item['productId'] ?>'" type="button" value="Edit" name="edit_product" />
                        <input onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete" value="Xóa"/>
                    </form>
      </td>
    </tr>
    <?php  }?>
  </table>
</div>
<button  name=>ADD</button>
<?php include_once('./View/templates/footer.php');     ?>