<?php
$siteKey = "6LdDn54UAAAAAPpC18Gm6k5aboBvX0W3gsE4mkcg";
$secretKey = "6LdDn54UAAAAAOukSyqtZ0mBmvaKXeTpbE58wKsP";

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
    case "index.php":
            $title = "SCC SACNAS";
            $logo = "fa-home";
        break;
    case "about.php":
            $title = "About SACNAS";
            $logo = "fa-comment";
        break;
    case "contact.php":
        $title = "Contact SACNAS";
        $logo = "fa-pencil";
    break;
    default:
            $title = "THIS_PAGE";
            $logo = "";
            $PageID = "";
        break;
}
