<?php

$connect - mysql_connect("localhost"," root","","voting") or die("connection failed");
if $connect{
    echo"connecting";
}
else{
    echo "Not Connected"
}
?>