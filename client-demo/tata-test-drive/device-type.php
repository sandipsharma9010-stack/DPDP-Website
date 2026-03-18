<?php

$isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile")); 
$isTab = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "tablet")); 
$isWin = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "windows"));
$isLin = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "linux"));
$isAndroid = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "android")); 
$isIPhone = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "iphone")); 
$isIPad = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "ipad")); 
$isIOS = $isIPhone || $isIPad; 

if($isMob){ 
    if($isTab){ 
        $devtyp = 'Tablet'; 
    } else { 
        $devtyp = 'Mobile'; 
    } 
} else {
    $devtyp = 'Desktop'; 
} 

if($isIOS){ 
    $os = 'iOS'; 
}elseif($isAndroid){ 
    $os = 'Android'; 
}elseif($isWin){ 
    $os = 'Windows'; 
}elseif($isLin){ 
    $os = 'Linux'; 
}

$devicetype = "$os $devtyp";

