<?php

namespace App\Modules\Home\Controllers;

class Home extends \App\Controllers\BaseController
{
    public function index(): string
    {
        $d['view'] = '\App\Modules\Home\Views\welcome_message.php';
        return view('\App\Modules\Template\Views\template.php', $d);
    }
}
