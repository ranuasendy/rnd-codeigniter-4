<?php

namespace App\Modules\Invoice\Controllers;

class Invoice extends \App\Controllers\BaseController
{
    public function index(): string
    {
        $d['view'] = '\App\Modules\Invoice\Views\invoice.php';
        return view('\App\Modules\Template\Views\template.php', $d);
    }
}
