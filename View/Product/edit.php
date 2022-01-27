<?php
include_once('./View/templates/header.php');
?>

<form action="" method="post">
    <div style="margin-left:25%;padding:1px 16px;height:1000px;">
        <table >
                <tr>
                    <td>Product Name </td>
                    <td><input type="text" name="name" id="" style="font-size: 25px;" placeholder="name" value="hello"></td>
                </tr>
                <tr>
                    <td>Status </td>
                    <td><input type="text" name="status" id="" style="font-size: 25px;" placeholder="status"></td>
                </tr>
                <tr>
                    <td>Purchases </td>
                    <td><input type="text" name="purchases" id="" style="font-size: 25px;" placeholder="purchases"></td>
                </tr>
                <tr>
                    <td>Sales </td>
                    <td><input type="text" name="sales" id="" style="font-size: 25px;" placeholder="sales"></td>
                </tr>
                <tr>
                    <td>Stock Product</td>
                    <td><input type="text" name="stock" id="" style="font-size: 25px;" placeholder="stock"></td>
                </tr>
                <tr>
                    <td>price </td>
                    <td><input type="text" name="price" id="" style="font-size: 25px;" placeholder="price"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit" class="btn float-right login_btn" name='edit_product' style="font-size: 25px;"></td>
                </tr>
        </table>

    </div>
</form>
<?php include_once('./View/templates/footer.php');     ?>