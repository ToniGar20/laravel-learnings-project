<?php

function setActiveMenuLink($routeName){
    return request()->routeIs($routeName) ? 'active' : '';
}

?>
