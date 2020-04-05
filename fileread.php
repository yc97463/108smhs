<?php
$file = $_GET['file'];
if(file_exists($file)){
header("Content-type:application/octet-stream");
$filename = basename($file);
header("Content-Disposition:attachment;filename = ".$filename);
header("Accept-ranges:bytes");
header("Accept-length:".filesize($file));
readfile($file);
}else{
echo "<script>alert('檔案不存在')</script>";
}
?>