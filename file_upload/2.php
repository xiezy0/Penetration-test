<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
    <script type="text/javascript">
        function checkFile() {
            var file = document.getElementsByName('upfile')[0].value;
            if (file == null || file == "") {
                alert("你还没有选择任何文件，不能上传!");
                return false;
            }
            var allow_ext = ".jpg|.jpeg|";
            var ext_name = file.substring(file.lastIndexOf("."));
            if (allow_ext.indexOf(ext_name + "|") == -1) {
                var errMsg = "该文件不允许上传，请上传" + allow_ext + "类型的文件,当前文件类型为：" + ext_name;
                alert(errMsg);
                return false;
            }
        }
    </script>
</head>
<meta charset="utf-8">
<body>
<form action="" enctype="multipart/form-data" method="POST" name="uploadfile" onsubmit="return checkFile()">
    上传文件: <input type="file" name="upfile" />
    <input type="submit" value="上传" name="submit" >
</form>
</body>
</html>
<!-- 前端js过滤 -->
<?php
if (isset($_POST['submit'])) {
    if ($_FILES['upfile']['error'] == 0) {
        /*if (!is_dir("/uploadtest/upload")) {
            mkdir("/uploadtest/upload");
        }*/
        $dir = "../upload/".$_FILES['upfile']['name'];
        move_uploaded_file($_FILES['upfile']['tmp_name'],$dir);
        echo "上传成功...<br />";
    }
}
?>
