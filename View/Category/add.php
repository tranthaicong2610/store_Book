<?php
include_once('./View/templates/header.php');
?>
<form action="" method="post">
    <div style="margin-left:25%;padding:1px 16px;height:1000px;">
        <table >
                <tr>
                    <td>Category Name </td>
                    <td><input type="text" name="name" id="" style="font-size: 25px;" placeholder="name"></td>
                </tr>
                
                <tr>
                    <td><input type="submit" value="Add New Category " class="btn float-right login_btn"name='add_cat' style="font-size: 25px;"></td>
                </tr>
        </table>

    </div>
</form>
<?php include_once('./View/templates/footer.php');     ?>