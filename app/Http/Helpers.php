<?php

function sidebarActive($url, $contain = true): bool
{
    if ($contain)
        return (strpos(currentUrl(), $url)) === 0;
    else
        return $url === currentUrl();
}