<?php
/** 
* 获取HTTP请求原文 
* @return string 
*/
function get_http_raw() { 
$raw = ''; 
 
// (1) 请求行 
$raw .= $_SERVER['REQUEST_METHOD'].' '.$_SERVER['REQUEST_URI'].' '.$_SERVER['SERVER_PROTOCOL']."\r\n"; 
 
// (2) 请求Headers 
foreach($_SERVER as $key => $value) { 
if(substr($key, 0, 5) === 'HTTP_') { 
$key = substr($key, 5); 
$key = str_replace('_', '-', $key); 
 
$raw .= $key.': '.$value."\r\n"; 
} 
} 
 
// (3) 空行 
$raw .= "\r\n"; 
 
// (4) 请求Body 
$raw .= $GLOBALS['HTTP_RAW_POST_DATA']; 
 
return $raw; 
}

echo get_http_raw();
echo move_uploaded_file($_FILES['file']['tmp_name'],'./mkdir/'.$_FILES['file']['name'])?1:0;
?>


