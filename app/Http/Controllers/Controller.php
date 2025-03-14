<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View as ViewFacade;
use App\Models\Footer;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct()
    {
        $footer = Footer::first(); // Ambil data pertama dari tabel footer
        ViewFacade::share('footer', $footer); // Bagikan ke semua view
    }
}
