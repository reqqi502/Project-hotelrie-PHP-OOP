<?php
$sub = "your subject here";
$msg = "message";
$rec = "akram.rq.645@gmail.com";
if(mail($rec,$sub,$msg)){
    echo "mail send ";
}else{
    echo "faileed !!!";
}

?>