<?php
session_start();
if(isset($_GET["lang"])){
    
    if($_GET["lang"]=="english"){
        $_SESSION['lang']="english";
    }
    if($_GET["lang"]=="spanish"){
        $_SESSION['lang']="spanish";
    }
    if($_GET["lang"]=="telugu"){
        $_SESSION['lang']="telugu";
    }
}
else{
    $_SESSION['lang']="english";
}
include $_SESSION['lang'].'.php';


?>