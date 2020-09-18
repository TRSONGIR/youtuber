<?php
$query1 = "watch?v=iVIi-ssfklE&pbjreload=101";
if(isset($query1)){
echo readfile($query1);
}else{
echo "Please Enter url Parameter \n Channel : @Source_Home";
}
