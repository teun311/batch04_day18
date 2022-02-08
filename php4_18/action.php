<?php
require_once 'vendor/autoload.php';
use App\classes\FullName;


if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'full-name')
    {
        include 'pages/full-name.php';
//        include 'pages/fullName.php';
    }
    elseif (isset($_POST["btn"]))
    {
        $fullName = new FullName($_POST);
        $result = $fullName->getFullName();
        include 'pages/fullName.php';
    }
}
