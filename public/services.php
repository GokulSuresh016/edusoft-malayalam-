<?php
/***************************************************************************
* File name   : index.php
* Begin       : 12 April 2020
* Description : create module page
* Author: Merin Sunny
***************************************************************************/

require_once"../config/config.php";
include_once"../template/head.php";
include_once"../template/preloader.php";
include_once"../template/topbar_and_menu.php";
$services_main=1;
include_once"../pages/services.php";
include_once"../template/footer.php";
?>