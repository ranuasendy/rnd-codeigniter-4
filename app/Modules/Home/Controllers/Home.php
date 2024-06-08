<?php

namespace App\Modules\Home\Controllers;

class Home extends \App\Controllers\BaseController
{
    public function index(): string
    {
        return view('\App\Modules\Home\Views\welcome_message.php');
    }
}
