<?php
namespace App\Controllers;
ini_set('display_errors',1);
    
    error_reporting(E_ALL);

use \Core\View;
use App\Models\User;
 

class Catalog extends \Core\Controller
{
   

    public function productsAction()
    {
        View::renderTemplate('Catatog/index.html',[
            'products'=>User::getAll()
            ]);
    }
}
?>