<?php
namespace App\Controllers;

use \Core\View;
use App\Models\User;

class Detail extends \Core\Controller
{
    public function productsAction()
    {
        View::renderTemplate('Details/index.html',[
            'products' =>User::getProduct(explode("/",$_SERVER['QUERY_STRING'])[2])
            
        ]);
    }

}
?>
