<?php
$query1 = "https://youtube.com";
if(isset($query1)){
echo readfile($query1);
}else{
echo "Please Enter url Parameter \n Channel : @Source_Home";
}
