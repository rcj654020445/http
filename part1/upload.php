<?php
print_r(getallheaders());
echo move_uploaded_file($_FILES['intro']['tmp_name'],'./mkdir/'.$_FILES['intro']['name'])?1:0;
?>


