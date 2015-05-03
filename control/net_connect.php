<?php
function is_connected(){
    $connected = @fsockopen("ssl://smtp.gmail.com",[30|465]);
    if($connected){
        $is_conn = true;
        fclose($connected);
    }else{
        $is_conn = false;
    }
    return $is_con;
}
?>