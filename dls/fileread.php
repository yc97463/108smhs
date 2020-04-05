<?php

/*
$myfile = fopen("1081-高一新生入學考試暫時編班-網路公告用-0717.pdf", "r") or die("Unable to open file!");
echo fread($myfile,filesize("1081-高一新生入學考試暫時編班-網路公告用-0717.pdf"));
fclose($myfile);
*/

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