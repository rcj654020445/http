<?php
$fd = fsockopen('www.test.com',80,$err,$str,5);
$headers = array(
	'GET /http/part2/login.php HTTP/1.1',
	'Host : www.test.com',
	'Cookie: name=admin',
	'',
	''
);

$headers = implode("\n", $headers);

//写入
fwrite($fd, $headers);

while ($row = fread($fd, 32)) {
	echo $row;
}

fclose($fd);
?>