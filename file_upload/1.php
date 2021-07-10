<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<meta charset="utf-8">
<body>
<form action="" enctype="multipart/form-data" method="POST" name="uploadfile">
    上传文件: <input type="file" name="upfile" />
    <input type="submit" value="上传" name="submit">
</form>
</body>
</html>
<!-- 完全没有过滤，任意文件上传 -->
<?php
if (isset($_POST['submit'])) {
    if ($_FILES['upfile']['error'] == 0) {
        /*if (!is_dir("/uploadtest/upload")) {
            mkdir("/uploadtest/upload");
        }*/
        #$dir = "/uploadtest/upload/".$_FILES['upfile']['name'];
        $dir = "../upload/".$_FILES['upfile']['name'];
        move_uploaded_file($_FILES['upfile']['tmp_name'],$dir);
        echo "上传成功...<br />";
    }
}
?>
