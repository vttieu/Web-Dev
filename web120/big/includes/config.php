<?php

//Here are the keys for the server: seattlecentral.edu
$siteKey = "6LdDn54UAAAAAPpC18Gm6k5aboBvX0W3gsE4mkcg";
$secretKey = "6LdDn54UAAAAAOukSyqtZ0mBmvaKXeTpbE58wKsP";


define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
    case "index.php":
            $title = "Vu Tieu's Web Dev Examples";
            $logo = "fa home";
            $PageID = "Welcome";
        break;
    case "lightboxII.php":
            $title = "Vu's Lightbox II Gallery";
            $logo = "";
            $PageID = "Lightbox II Gallery";
        break;
    case "flexbox.php":
            $title = "Vu's Flexbox Research";
            $logo = "";
            $PageID = "Flexbox Research";
        break;
    case "galleries.php":
            $title = "Vu's Galleries Research";
            $logo = "";
            $PageID = "Galleries Research";
        break;
    case "map.php":
            $title = "Vu's Google Map Embed";
            $logo = "";
            $PageID = "Google Map";
        break;
    case "calendar.php":
            $title = "Vu's Calendar Embed";
            $logo = "";
            $PageID = "Calendar";
        break;
    case "parallax.php":
            $title = "Vu's Parallax Research";
            $logo = "";
            $PageID = "Parallax";
        break;
    case "shoppingcarts.php":
            $title = "Vu's Shopping Carts Research";
            $logo = "";
            $PageID = "Shopping Carts Research";
        break;
    case "siteapp.php":
            $title = "Site vs App Research";
            $logo = "";
            $PageID = "Welcome";
        break;
    case "webcam.php":
            $title = "Vu's Web Cam Example";
            $logo = "";
            $PageID = "Web Cam Example";
        break;
    case "youtube.php":
            $title = "Vu's Youtube Embed Example";
            $logo = "";
            $PageID = "Youtube Embed";
        break;
    default:
            $title = "THIS_PAGE";
            $logo = "";
            $PageID = "";
}