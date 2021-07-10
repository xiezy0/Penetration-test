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
<!--php判断只能上传jpg -->
<?php
if (isset($_POST['submit'])) {
    $file_type=$_FILES['upfile']['type'];  
    $file_lastname = pathinfo($_FILES['upfile']['name'], PATHINFO_EXTENSION);
    //判断后缀
    if($file_lastname!="jpg" && $file_lastname!="jpeg") {
	echo "文件类型只能为jpg格式";
	exit();
    
    }
    //判断文件类型
    if($file_type!="image/jpeg" && $file_type!='image/pjpeg') {  
        echo "文件类型只能为jpg格式";  
        exit();  
    }  
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
