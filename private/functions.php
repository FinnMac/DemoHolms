<?php

function url_for($script_path=""){
    if(strlen($script_path)!=0 && $script_path[0] !='/') {
        $script_path = '/'.$script_path;
    }
    return WWW_ROOT.$script_path;
}

function u($string=""){
    return urlencode($string);
}

function h($string=""){
    return htmlspecialchars($string);
}
?>