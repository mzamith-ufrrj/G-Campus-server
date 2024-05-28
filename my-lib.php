<?php
function authentication($user, $passwd){
    //Get from data base
    $luser = md5('r-droid');
    $lpasswd = md5('r-droid');

    if (($luser == $user) && ($passwd == $lpasswd)){
        return true;
    }else{
        http_response_code(404);
        die();
    }
    return false;

}//function authentication($user, $passwd){
?>