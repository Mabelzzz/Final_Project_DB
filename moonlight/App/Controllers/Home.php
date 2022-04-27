<?php
namespace App\Controllers;
use \Core\View;

ini_set('display_errors',1);
error_reporting(E_ALL);


class Home extends \Core\Controller
{
    public function indexAction()
    {
        View::renderTemplate('Home/index.html');
    }

}
?>