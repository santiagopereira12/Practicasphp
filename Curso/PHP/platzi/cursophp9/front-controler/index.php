<?php

$pages = $_GET["page"] ?? null;

switch ($pages) {
    case 'services':
        require ("page/services.php");
        break;

    case 'contact':
        require ("page/contact.php");
        break;    
    
    default:
        require ("page/home.php");
        break;
}