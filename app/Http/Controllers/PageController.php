<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(string $page = 'index')
    {
        $page = "frontpage::$page";

        if (!View::exists($page)) {
            abort(404);
        }

        return view($page);
    }
}
