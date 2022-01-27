<?php
include_once('./View/templates/header.php');
?>
<div style="margin-left:25%;padding:1px 16px;height:1000px;">
<table style="text-align:center;">
    <tr>
      <th>Stt</th>
      <th>Category Name</th>
      <th>Action</th>
      
    </tr>
    <?php  foreach($data as $item){ ?>
    <tr>
      <td><?php echo $item['id']; ?></td>
      <td><?php  echo $item['cat_name']?> </td>
      <td>
      <form method="get" action="">
                        <input class="test te1" onclick="window.location = 'index.php?controller=category&action=edit&id=<?php echo $item['id'] ?>'" type="button" value="Edit" name="edit_cat" />
                        <input type="hidden" name="id" value="<?php echo $item['id']; ?>"/>
                        <input  onclick="return confirm('Bạn có chắc muốn xóa không?');"  type="submit" name="delete" value="Xóa"/>
                        
                    
                      </form>
      </td>
    </tr>
    <?php  }?>
  </table>
</div>
<?php include_once('./View/templates/footer.php');     ?>