<?php
$fd = fsockopen('www.test.com' ,80 ,$errno , $errstr ,5 );

$head = array(
	'GET /http/part2/fsocket.html HTTP/1.1',
	'Host:www.test.com',
	'',
	''
);

$head =implode("\n",$head);

//写入
fwrite($fd,$head);
//循环读出
while ( $row = fread($fd,32)) {
	echo $row;
}

fclose($fd);

?>