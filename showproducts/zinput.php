<html>
<?php session_start() ?>
<form method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>
                Tên sản phẩm: <input type="text" name="ten" required>
            </td>
        </tr>
        <tr>
            <td>
                Giá sản phẩm: <input type="text" name="gia" required>
            </td>
        </tr>
        <tr>
            <td>
                Loại: <select name="loai">
                    <option value="Giày dép">Giày dép</option>
                    <option value="Túi Xách">Túi xách</option>
                </select>

            </td>
        </tr>
        <tr>
            <td>
                Hình ảnh sản phẩm: <input type="file" name="anh" required> <br>
                <input type="submit" name="btn" value="Thêm">
            </td>
        </tr>
    </table>
</form>
<?php
if (isset($_POST['btn'])) {
    $n = 0;
    if (isset($_SESSION['products']))
        $n = count($_SESSION['products']);
    $_SESSION['products'][$n][$_POST['loai']]['name'] = $_POST['ten'];
    $_SESSION['products'][$n][$_POST['loai']]['price'] = $_POST['gia'];
    if (isset($_FILES["anh"])) {
        $file = $_FILES["anh"];
        $tenfile = $file["name"];
        move_uploaded_file($file["tmp_name"], $tenfile);
        $_SESSION['products'][$n][$_POST['loai']]['img'] = $tenfile;
    }
    header("Location: zshow.php");
}
?>

</html>