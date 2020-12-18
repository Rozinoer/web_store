<?php
$action = $_REQUEST['action'];

require_once 'function.php';

switch ($action) {
    case 'init':
        init();
        break;
    case 'selectOneGoods':
        selectOneGoods();
        break;
    case 'showCart':
        break;
}