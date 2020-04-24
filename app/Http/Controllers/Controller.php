<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Settings;
use App\Menus;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function __construct()
      {
        $settings = Settings::find(1);
        $menu = Menus::where('navigation_menu', '=', 1)->first();
        $pages = $menu->pages;

        View::share([
            'settings' => $settings,
            'pages' => $pages
        ]);
      }
}
